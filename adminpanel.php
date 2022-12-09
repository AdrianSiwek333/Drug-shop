<?php
include('header.php');
include('admin-verification.php');
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