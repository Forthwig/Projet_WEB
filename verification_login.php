<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <?php include "config.php"?>
    </head>

    <body>
        <?php
            $username = $_POST["username"];
            $pwd = $_POST['password'];

            $pwd_peppered = hash_hmac("sha256", $pwd, $pepper); // Hashage du password

            try{
                // On se connecte à MySQL
                $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
            }
            catch(Exception $e){
                // En cas d'erreur, on affiche un message et on arrête tout
                die('Erreur : '.$e->getMessage());
            }

            // On récupère tout les username et les password (hashés) contenu de la table user
            $data = $bdd->query('SELECT username, password FROM user');

            $validUsername = false; // Condition pour savoir si le username et le password se trouve dans la base de données

            while ($donnees = $data->fetch()){
                echo $donnees['username']. "<br/>";
                echo $donnees['password']. "<br/>";
                if ($donnees['username'] == $username and $donnees['password'] == $pwd_peppered){
                    $validUsername = true;
                }
            }

            if($validUsername == true){
                header('Location: main.php');
                exit();
            }

            header('Location: login.php');

            /* Tests */

            //echo "Pepper: " . $pepper . "<br/>";
            //echo "Username: " . $username . "<br/>";   
            //echo "Password: " . $pwd . "<br/>";
            //echo "pwd_peppered: " . $pwd_peppered . "<br/>";
        ?>
    </body>
</html>