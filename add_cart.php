<?php
require('data_base.php');

if (isset($_POST["id_prod"]) and isset($_POST["qtt"])) {
    //On utilise un user_id fictif en attendant les sessions
    $userId = 1;
    addProdToCart($userId,$_POST["id_prod"],$_POST["qtt"]);
    header("Location: Panier.php");
    exit();
}

header("Location: main.php");
?>