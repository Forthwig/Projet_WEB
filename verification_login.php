<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <?php include "config.php"?>
    </head>

    <body>
        <?php
        $pwd_peppered = hash_hmac("sha256", $_POST['password'], $pepper); // Hashage du password

        try{
            // On se connecte à MySQL
            $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
        }
        catch(Exception $e){
            // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
        }

        // On récupère tout les username et les password (hashés) contenu de la table user
        $raw_data = $bdd->query('SELECT username, password FROM user');

        $validUsername = false; // Condition pour savoir si le username et le password se trouve dans la base de données

        while ($sorted_data = $raw_data->fetch()){
            if ($sorted_data['username'] == $_POST['username'] and $sorted_data['password'] == $pwd_peppered){
                $validUsername = true;
            }
        }

        if($validUsername == true){
            $_SESSION['username'] = $_POST['username'];
            header('Location: index.php?page=main');
            exit();
        }

        header('Location: index.php?page=login');
        ?>
    </body>
</html>