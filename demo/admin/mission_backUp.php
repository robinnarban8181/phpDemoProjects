<?php
include 'config.php';
$mContent = $_POST['mcontent'];
$conn->query("insert into mission(mcontent) values('$mContent')");
header("Location: dashbord.php");
?>