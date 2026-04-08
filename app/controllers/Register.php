<?php
class Register extends Controller {
    public function index() {
        $message = '';
        $old = [];
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once '../config.php';
            $old = $_POST;

            $validation = $this->validateRegistration($_POST);
            if ($validation !== true) {
                $message = $validation;
            } else {
                $data = $this->prepareData($_POST);
                $errors = [];

                $mysqlSuccess = false;
                $googleSuccess = false;

                if ($conn instanceof mysqli) {
                    $mysqlSuccess = $this->saveToDB($conn, $data, $errors);
                } else {
                    $errors[] = 'Local backup storage is unavailable.';
                }

                if (!empty(GOOGLE_SHEETS_WEBHOOK_URL)) {
                    $googleSuccess = $this->syncToGoogleSheets($data, $errors);
                }

                // Success if either MySQL backup or Google sync succeeds.
                if ($mysqlSuccess || $googleSuccess) {
                    $message = 'success';
                } else {
                    $message = 'Error: ' . implode(' ', $errors);
                }
            }
        }
        
        $this->view('layout/main', ['view' => 'register/index', 'message' => $message, 'old' => $old]);
    }

    private function validateRegistration($post) {
        $required = ['first_name', 'last_name', 'email', 'phone_number', 'child_first_name', 'child_last_name', 'child_age'];
        foreach ($required as $field) {
            if (!isset($post[$field]) || trim((string) $post[$field]) === '') {
                return 'Please fill the required fields.';
            }
        }

        if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
            return 'Please provide a valid email address.';
        }

        $childAge = filter_var($post['child_age'], FILTER_VALIDATE_INT);
        if ($childAge === false || $childAge < 6 || $childAge > 17) {
            return 'Please enter a child age between 6 and 17.';
        }

        return true;
    }

    private function prepareData($post) {
        return [
            'first_name' => trim((string) ($post['first_name'] ?? '')),
            'last_name' => trim((string) ($post['last_name'] ?? '')),
            'email' => trim((string) ($post['email'] ?? '')),
            'phone_number' => trim((string) ($post['phone_number'] ?? '')),
            'module' => trim((string) ($post['module'] ?? '')),
            'child_first_name' => trim((string) ($post['child_first_name'] ?? '')),
            'child_last_name' => trim((string) ($post['child_last_name'] ?? '')),
            'child_age' => trim((string) ($post['child_age'] ?? '')),
            'child_gender' => trim((string) ($post['child_gender'] ?? '')),
            'submitted_at' => date('c')
        ];
    }

    private function saveToDB($conn, $data, &$errors) {
        $sql = 'INSERT INTO registrations (first_name, last_name, email, phone_number, module, child_first_name, child_last_name, child_age, child_gender) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $stmt = $conn->prepare($sql);

        if ($stmt === false) {
            $errors[] = 'Local backup save failed.';
            return false;
        }

        $stmt->bind_param(
            'sssssssss',
            $data['first_name'],
            $data['last_name'],
            $data['email'],
            $data['phone_number'],
            $data['module'],
            $data['child_first_name'],
            $data['child_last_name'],
            $data['child_age'],
            $data['child_gender']
        );

        $ok = $stmt->execute();
        if (!$ok) {
            $errors[] = 'Local backup save failed.';
        }

        $stmt->close();
        return $ok;
    }

    private function syncToGoogleSheets($data, &$errors) {
        $payload = $data;
        if (GOOGLE_SHEETS_SHARED_SECRET !== '') {
            $payload['shared_secret'] = GOOGLE_SHEETS_SHARED_SECRET;
        }

        $json = json_encode($payload);
        if ($json === false) {
            $errors[] = 'Google Sheets sync failed.';
            return false;
        }

        $ch = curl_init(GOOGLE_SHEETS_WEBHOOK_URL);
        if ($ch === false) {
            $errors[] = 'Google Sheets sync failed.';
            return false;
        }

        curl_setopt_array($ch, [
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $json,
            CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => GOOGLE_SHEETS_TIMEOUT,
            CURLOPT_CONNECTTIMEOUT => GOOGLE_SHEETS_TIMEOUT
        ]);

        $response = curl_exec($ch);
        $httpCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curlError = curl_error($ch);
        curl_close($ch);

        if ($response === false || $curlError !== '' || $httpCode < 200 || $httpCode >= 300) {
            $errors[] = 'Google Sheets sync failed.';
            return false;
        }

        return true;
    }
}
