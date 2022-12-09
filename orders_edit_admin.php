<?php
include ('header.php');
include('admin-verification.php');
$sql_stmt = "UPDATE orders SET user_id ='" . $_POST['user_id_c'] . "', order_date ='" . $_POST['order_date_c'] . "', order_time ='" . $_POST['order_time_c'] . "', total_price ='" . $_POST['total_price_c'] . "', fname ='" . $_POST['fname_c'] . "', lname ='" . $_POST['lname_c'] . "' WHERE order_id ='" . $_POST['order_id_c'] . "'";
$commit = $db_con->query($sql_stmt);
header("Location: adminpanel.php");
?>