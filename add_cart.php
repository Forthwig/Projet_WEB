<?php

if (isset($_POST["id_prod"]) and isset($_POST["qtt"]) and isset($user)) {
    //On utilise un user_id fictif en attendant les sessions
    $userId =(int) $user["id"];
    addProdToCart($userId,$_POST["id_prod"],$_POST["qtt"]);
    header("Location: index.php?page=panier");
    exit();
}

header("Location: index.php?page=main");
?>