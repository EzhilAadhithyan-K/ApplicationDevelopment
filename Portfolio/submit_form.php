<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $phone = $_POST['phone']; 
    $message = $_POST['message']; 

    // Process the data, such as saving it to a database or sending an email
    echo "Thank you, $name! Your message has been received."; 
} 
?>
