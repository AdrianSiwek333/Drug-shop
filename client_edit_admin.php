<?php
include ('header.php');
$password=$_POST['password_c'];
$hashpasswd= password_hash($password, PASSWORD_BCRYPT);
$sql_stmt = "UPDATE users SET user_id ='" . $_POST['user_id_c'] . "', email ='" . $_POST['email_c'] . "', password ='" . $hashpasswd . "', user_type ='" . $_POST['user_type_c'] . "'";
$commit = $db_con->query($sql_stmt);
header("Location: adminpanel.php");
?>