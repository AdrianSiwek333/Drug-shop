<?php
include('header.php');
include('admin-verification.php');
$password=$_POST['password_a'];
$hashpasswd= password_hash($password, PASSWORD_BCRYPT);
if($_POST['user_type_a']!="admin" && $_POST['user_type_a']!="noob"){
    $_POST['user_type_a']="noob";
}
$sql_stmt = "INSERT INTO users (email, password, user_type) VALUES (
'" . $_POST['email_a'] . "','" . $hashpasswd . "','" . $_POST['user_type_a'] . "');";
$commit = $db_con->query($sql_stmt);
header("Location: adminpanel.php");
?>