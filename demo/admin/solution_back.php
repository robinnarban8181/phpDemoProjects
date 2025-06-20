<?php
include 'config.php';
$solution =$_POST['so_content'];

$conn->query("insert into solution(so_content) values('$solution')");
header("Location: dashbord.php");
?>