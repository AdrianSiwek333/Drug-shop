<?php
include('header.php');
include('admin-verification.php');
$sql_stmt = "INSERT INTO products (product_name, price, category_id, image, description) VALUES (
'" . $_POST['product_name_a'] . "','" . $_POST['price_a'] . "','" . $_POST['category_id_a'] . "','" . $_POST['image_a'] . "','" . $_POST['description_a'] . "');";
$commit = $db_con->query($sql_stmt);
header("Location: adminpanel.php");
?>