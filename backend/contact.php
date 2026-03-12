<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_messages (name,email,phone,subject,message)
            VALUES ('$name','$email','$phone','$subject','$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Message Sent Successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}

?>