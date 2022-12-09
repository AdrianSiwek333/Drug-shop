<?php
if(isset($_SESSION['login']) && $_SESSION['login']==2){

}else{
    header("Location: index.php");
}
?>