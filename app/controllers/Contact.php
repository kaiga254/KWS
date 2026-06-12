<?php
class Contact extends Controller {
    public function index() {
        $message = '';
        $old = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once '../config.php';
            global $conn;
            $old = $_POST;

            $validation = $this->validateContact($_POST);
            if ($validation !== true) {
                $message = $validation;
            } else {
                $data = $this->prepareData($_POST);
                $errors = [];

                $mysqlSuccess = false;
                if ($conn instanceof mysqli) {
                    $mysqlSuccess = $this->saveToDB($conn, $data, $errors);
                } else {
                    $errors[] = 'Local backup storage is unavailable.';
                }

                $emailSuccess = Mailer::sendEnquiryEmail($data);
                if (!$emailSuccess) {
                    $errors[] = 'Failed to send email notification.';
                }

                if ($mysqlSuccess || $emailSuccess) {
                    $message = 'success';
                    $old = []; // Clear input values on success
                } else {
                    $message = 'Error: ' . implode(' ', $errors);
                }
            }
        }

        $this->view('layout/main', ['view' => 'contact/index', 'message' => $message, 'old' => $old]);
    }

    private function validateContact($post) {
        $required = ['contact_name', 'contact_email', 'contact_subject', 'contact_message'];
        foreach ($required as $field) {
            if (!isset($post[$field]) || trim((string) $post[$field]) === '') {
                return 'Please fill all the required fields.';
            }
        }

        $namePattern = "/^[a-zA-Z\s\-\']{2,100}$/";
        if (!preg_match($namePattern, trim((string) $post['contact_name']))) {
            return 'Name must be between 2 and 100 characters and contain only letters.';
        }

        if (!filter_var($post['contact_email'], FILTER_VALIDATE_EMAIL)) {
            return 'Please provide a valid email address.';
        }

        $validSubjects = [
            'Learner enrollment',
            'School or community partnership',
            'Donor or sponsor support',
            'Equipment or volunteer support',
            'General enquiry'
        ];
        if (!in_array($post['contact_subject'], $validSubjects, true)) {
            return 'Please select a valid discussion topic.';
        }

        $messageLen = strlen(trim((string) $post['contact_message']));
        if ($messageLen < 10 || $messageLen > 2000) {
            return 'Message must be between 10 and 2000 characters.';
        }

        return true;
    }

    private function prepareData($post) {
        return [
            'name' => trim((string) ($post['contact_name'] ?? '')),
            'email' => trim((string) ($post['contact_email'] ?? '')),
            'subject' => trim((string) ($post['contact_subject'] ?? '')),
            'message' => trim((string) ($post['contact_message'] ?? ''))
        ];
    }

    private function saveToDB($conn, $data, &$errors) {
        // First ensure table exists
        $createTableSql = 'CREATE TABLE IF NOT EXISTS enquiries (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100) NOT NULL,
            email VARCHAR(150) NOT NULL,
            subject VARCHAR(150) NOT NULL,
            message TEXT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )';
        
        if (!$conn->query($createTableSql)) {
            $errors[] = 'Failed to initialize database table.';
            return false;
        }

        $sql = 'INSERT INTO enquiries (name, email, subject, message) VALUES (?, ?, ?, ?)';
        $stmt = $conn->prepare($sql);

        if ($stmt === false) {
            $errors[] = 'Local backup save failed.';
            return false;
        }

        $stmt->bind_param(
            'ssss',
            $data['name'],
            $data['email'],
            $data['subject'],
            $data['message']
        );

        $ok = $stmt->execute();
        if (!$ok) {
            $errors[] = 'Local backup save failed.';
        }

        $stmt->close();
        return $ok;
    }
}
