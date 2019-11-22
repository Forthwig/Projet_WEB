<?php include "config.php"?>

        <?php
        if (isset($_POST['username'],$_POST['password'])) {
            $pwd_peppered = hash_hmac("sha256", $_POST['password'], $pepper); // Hashage du password
            
            if(count(getUserRaw($_POST['username'],$pwd_peppered))){
                $_SESSION['username'] = $_POST['username'];
                header('Location: index.php?page=main');
                exit();
            }
        }

        header('Location: index.php?page=login');
        exit();
        ?>
