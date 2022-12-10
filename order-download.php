<?php
include ('header.php');
if(!isset($_SESSION['cart']) || $_SESSION['cart']==null){
    header("Location: index.php");
}
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $key => $val) {
        echo "<img src='".$val['image']."' alt='Zdjęcie produktu'>";
        echo "<a href='".$val['image']."' download>Pobierz zdjęcie</a>";
    }
}
$_POST[] = array();
unset($_SESSION['cart']);
include ('footer.php');