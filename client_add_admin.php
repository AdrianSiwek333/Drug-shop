<?php
include('header.php');
$password=$_POST['password_a'];
$hashpasswd= password_hash($password, PASSWORD_BCRYPT);
$sql_stmt = "INSERT INTO users (email, password, user_type) VALUES (
'" . $_POST['email_a'] . "','" . $hashpasswd . "','" . $_POST['user_type_a'] . "');";
$commit = $db_con->query($sql_stmt);
header("Location: adminpanel.php");
?>