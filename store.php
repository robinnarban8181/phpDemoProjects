<?php
include 'config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];


$conn->query("INSERT INTO user (name, email, mobile, address) VALUES ('$name', '$email', '$mobile', '$address')");

header("Location: index.php");
?>
