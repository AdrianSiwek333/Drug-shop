<?php
include ('header.php');
$orders_stmt="SELECT * FROM products WHERE product_id IN (SELECT product_id FROM order_info WHERE order_id IN (SELECT order_id FROM orders WHERE user_id LIKE ".$_SESSION['user_idx']." ))";
$orders=$db_con->query("SELECT * FROM products WHERE product_id IN (SELECT product_id FROM order_info WHERE order_id IN (SELECT order_id FROM orders WHERE user_id LIKE ".$_SESSION['user_idx']." ))");
while ($order=$orders->fetch()){
    echo "<img src='".$order['image']."' alt='Zdjęcie produktu'>";
    echo "<a href='".$order['image']."' download>Pobierz zdjęcie</a>";
}
include ('footer.php');