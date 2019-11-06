

<?php
    $bdd = new PDO('mysql:host=localhost;dbname=techno_web;charset=utf8','root','');
   
    $showResult = false;

    $articles = $bdd->query('SELECT * FROM table ORDER BY id DESC');
     if(isset($_GET['q']) AND !empty($_GET['q'])) { 
       $q = htmlspecialchars($_GET['q']);
       $articles = $bdd->query('SELECT * FROM table WHERE titre LIKE "%'.$q.'%" ORDER BY id DESC');
       if($articles->rowCount() == 0) {
          $articles = $bdd->query('SELECT * FROM table WHERE CONCAT(titre) LIKE "%'.$q.'%" ORDER BY id DESC');
          $showResult = true;
        } // fin du if($articles->rowCount() == 0)
      } //  fin du if(isset($_GET['q']) AND !empty($_GET['q'])) {
?>