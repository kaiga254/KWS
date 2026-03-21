<?php

require_once("config.php");
if ((isset($_POST['first_name'])&& $_POST['last_name'] !='') && (isset($_POST['email'])&& $_POST['phone_number'] !='')) {
    $firstName = $conn->real_escape_string($_POST['first_name']);
    $lastName = $conn->real_escape_string($_POST['last_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone_number']);
    $comments = $conn->real_escape_string($_POST['module']);
    $child_first_name = $conn->real_escape_string($_POST['child_first_name']);
    $child_last_name = $conn->real_escape_string($_POST['child_last_name']);
    $child_age = $conn->real_escape_string($_POST['child_age']);
    $child_gender= $conn->real_escape_string($_POST['child_gender']);
    require_once("contact_mail.php");
    $sql="INSERT INTO provider (firstname, lastname, email, phone_number, module, child_first_name, child_last_name, child_age, child_gender) VALUES ('".$firstName."','".$lastName."', '".$email."', '".$phone."', '".$comments."', '".$child_first_name."', '".$child_last_name."', '".$child_age."', '".$child_gender."')";
    if (!$result = $conn->query($sql)) {
        die('There was an error running the query [' . $conn->error . ']');
    } else {
        echo "Thank you! We will contact you soon";
    }
} else {
    echo "Please fill Name and Email";
}