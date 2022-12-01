<?php
include('header.php');
/*if(!isset($_SESSION['login'])){
    header('location:index.php');
}
if($_SESSION['login']!=2){
}*/
?>
<style>
    main{
        display: flex;
        align-items: center;
        flex-direction: column;
    }
</style>
<main>
    <a href="clients_admin.php"><button class="buttonAdd" type="submit">Klienci</button></a>
    <a href="orders_admin.php"><button class="buttonAdd" type="submit">Zamówienia</button></a>
    <a href="product_admin.php"><button class="buttonAdd" type="submit">Produkty</button></a>
</main>
<?php
include('footer.php');
?>