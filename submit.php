<?php
$name = $_POST['name'];
$age = $_POST['age'];
$program = $_POST['program'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$social_status = $_POST['social_status'];
$id = $_POST['id'];

$data = "Name: $name | Age: $age | Program: $program | Email: $email | Phone: $phone | Address: $address | Social Status: $social_status | ID: $id" . PHP_EOL;

file_put_contents("submissions.txt", $data, FILE_APPEND);

echo "<h2>Thank you, $name!</h2>";
echo "<p>Your information has been submitted successfully.</p>";
?>