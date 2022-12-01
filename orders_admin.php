<?php
include('header.php');
/*if(!isset($_SESSION['login'])){
    header('location:index.php');
}
if($_SESSION['login']!=2){
}*/
?>
<main>
    <style>
        table,thead,td{
            border: solid 1px black;
        }
    </style>
    <table>
        <thead>
            <td>product_id</td>
            <td>product_name</td>
            <td>price</td>
            <td>quantity</td>
            <td>category_id</td>
            <td>image</td>
            <td>Przycisk edycji</td>
            <td>Przycisk usuń</td>
        </thead>
        <?php
        $stmt=$db_con->query("SELECT * FROM products");
        while($row=$stmt->fetch()){
            echo "<tr>";
            echo "<td>".$row['product_id']."</td>";
            echo "<td>".$row['product_name']."</td>";
            echo "<td>".$row['price']."</td>";
            echo "<td>".$row['quantity']."</td>";
            echo "<td>".$row['category_id']."</td>";
            echo "<td>".$row['image']."</td>";
            echo "<td><form method='post' action='orders_admin_edit.php'><button type='Submit'>Edytuj produkt</button></form></td>";
            echo "<td><form method='post' action='orders_admin_delete.php'><button type='Submit'>Usuń produkt</button></form></td>";
            echo "</tr>";
        }
        ?>
    </table>
</main>
<?php
include('footer.php');
?>