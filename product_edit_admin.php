<?php
include ('header.php');
include('admin-verification.php');
$sql_stmt = "UPDATE products SET product_name ='" . $_POST['product_name_c'] . "', price ='" . $_POST['price_c'] . "', category_id ='" . $_POST['category_id_c'] . "', image ='" . $_POST['image_c'] . "', description ='" . $_POST['description_c'] . "' WHERE product_id ='" . $_POST['product_id_c'] . "'";
$commit = $db_con->query($sql_stmt);
header("Location: adminpanel.php");
?>