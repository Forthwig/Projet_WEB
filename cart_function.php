<?php
require("data_base.php");
if (isset($_POST["prod"])) {
    $user_id = 1; // change and verify if session exist and user is authentificated
    if (isset($_POST["remove_prod"])) {
        removeProd($user_id,$_POST["prod"]);
    }

}

header("Location: Panier.php")
?>