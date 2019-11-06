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
            $confirmPwd = $_POST['confirmPassword'];

            if($pwd == $confirmPwd){
                try{
                    // On se connecte à MySQL
                    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
                }
                catch(Exception $e){
                    // En cas d'erreur, on affiche un message et on arrête tout
                    die('Erreur : '.$e->getMessage());
                }

                // On récupère tout les username contenu de la table user
                $usernamelist = $bdd->query('SELECT username FROM user');
                
                $validUsername = true; // Condition pour mettre le username dans la bdd à condition qu'il n'y soit déjà pas

                while ($donnees = $usernamelist->fetch()){
                    if ($donnees['username'] == $username){
                        $validUsername = false;
                    }
                }

                if($validUsername == true){
                    $pwd_peppered = hash_hmac("sha256", $pwd, $pepper); // Hashage du password

                    $req = $bdd->prepare('INSERT INTO user(username, password) VALUES(:username, :password)');
                    $req->execute(array(
                        'username' => $username,
                        'password' => $pwd_peppered
                        ));
                }

            }

            header('Location: login.php');
            
            /* Tests */

            //echo "Pepper: " . $pepper . "<br/>";
            //echo "Username: " . $username . "<br/>";   
            //echo "Password: " . $pwd . "<br/>";
            //echo "Confirm password: " . $confirmPwd . "<br/>";
            //echo "pwd_peppered: " . $pwd_peppered . "<br/>";
        ?>
    </body>
</html>