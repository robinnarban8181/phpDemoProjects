<?php
include 'config.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];

$conn->query("UPDATE user SET name='$name', email='$email', mobile='$mobile', address='$address' WHERE id=$id");

header("Location: index.php");
?>
