<?php
include('header.php');
include('admin-verification.php');
?>
<style>
    main {
        display: flex;
        align-items: center;
        flex-direction: column;
    }
  
  
</style>
<main>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="siteTitle">Panel Admina</h1>
        </div>
        <div class="row">
        <div class="col-md-4 ">
            <a href="clients_admin.php"><button class="buttonAdd" type="submit">Klienci</button></a></div>
            <div class="col-md-4">
            <a href="orders_admin.php"><button class="buttonAdd" type="submit">Zamówienia</button></a></div>
            <div class="col-md-4">
            <a href="product_admin.php"><button class="buttonAdd" type="submit">Produkty</button></a>
</main>
<?php
include('footer.php');
?>
