<?php
class Register extends Controller {
    public function index() {
        $message = '';
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once '../config.php';
            
            if (isset($_POST['first_name']) && $_POST['first_name'] != '' && isset($_POST['email']) && $_POST['email'] != '') {
                $firstName = $conn->real_escape_string($_POST['first_name']);
                $lastName = $conn->real_escape_string($_POST['last_name']);
                $email = $conn->real_escape_string($_POST['email']);
                $phone = $conn->real_escape_string($_POST['phone_number']);
                $module = $conn->real_escape_string($_POST['module']);
                $child_first_name = $conn->real_escape_string($_POST['child_first_name']);
                $child_last_name = $conn->real_escape_string($_POST['child_last_name']);
                $child_age = $conn->real_escape_string($_POST['child_age']);
                $child_gender = isset($_POST['child_gender']) ? $conn->real_escape_string($_POST['child_gender']) : '';
                
                // Mail logic placeholder (contact_mail.php)
                if (file_exists('../contact_mail.php')) {
                    // require_once("../contact_mail.php");
                }
                
                $sql="INSERT INTO provider (firstname, lastname, email, phone_number, module, child_first_name, child_last_name, child_age, child_gender) VALUES ('$firstName','$lastName', '$email', '$phone', '$module', '$child_first_name', '$child_last_name', '$child_age', '$child_gender')";
                
                if (!$result = $conn->query($sql)) {
                    $message = 'Error: ' . $conn->error;
                } else {
                    $message = 'success';
                }
            } else {
                $message = 'Please fill the required fields.';
            }
        }
        
        $this->view('layout/main', ['view' => 'register/index', 'message' => $message]);
    }
}
