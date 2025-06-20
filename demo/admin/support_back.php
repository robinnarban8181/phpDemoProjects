<?php
include 'config.php';

$scontent = $_POST['scontent'];
$conn->query("insert into support(scontent) values('$scontent')");
header("Location: dashbord.php");

?>