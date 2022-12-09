<?php
include ('header.php');
include('admin-verification.php');
$password=$_POST['password_c'];
$hashpasswd= password_hash($password, PASSWORD_BCRYPT);
if($_POST['user_type_c']!="admin" && $_POST['user_type_c']!="noob"){
    $_POST['user_type_c']="noob";
}
$sql_stmt = "UPDATE users SET email ='" . $_POST['email_c'] . "', password ='" . $hashpasswd . "', user_type ='" . $_POST['user_type_c'] . "' WHERE user_id =" . $_POST['user_id_c'] . "";
$commit = $db_con->query($sql_stmt);
header("Location: adminpanel.php");
?>