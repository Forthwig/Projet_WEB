<?php session_start();?>

<?php 
if (isset($_SESSION['username']) and isset($_GET['page'])){
    if($_GET['page'] == 'main'){
        include 'main.php';
    }

    else if($_GET['page'] == 'panier'){
        include 'Panier.php';
    }

    else if($_GET['page'] == 'detail'){
        include 'detail.php';
    }
    else{
        include 'login.php';
    }
}

else if(isset($_GET['page'])){
    if($_GET['page'] == 'main'){
        include 'main.php';
    }

    else if($_GET['page'] == 'panier'){
        include 'Panier.php';
    }

    else if($_GET['page'] == 'detail'){
        include 'detail.php';
    }

    // if page has others values than above
    else{
        include 'login.php';
    }
}

// if $_GET['page'] is not defined
else{
    include 'login.php';
}
?>


<?php
//TODO start session

//TODO include database.php file
?>

<?php
//TODO assign database connexion into $database variable

//TODO include checkUser.php file
?>

<?php
//TODO (in the next step) control user access

//TODO get page parameter ($_GET['page'] or $_POST['page']) and assign it into $page variable

//if 'action/'.$page'.php' exists then include it (use file_exists($filename) function)
?>

<?php
//create one php file for each action to manage on the website

//TODO use 
//             input params (included in $_GET or $_POST)
//             $database variable (initialized in $database.php) 
// to insert or update data into database

// TODO insert the start html envelope (<html><head>....</head><body>

// TODO using $page decide to include header.php
?>

<?php

//TODO add header display

//TODO if 'view/'.$page'.php' exists then include it (use file_exists($filename) function)
//           else include 'view/main.php' (it has to exist)
?>

<?php

//create one php file for each view to manage on the website (don't forget to create on main.php view)

//TODO use 
//             input params (included in $_GET or $_POST)
//             $database variable (initialized in $database.php) 
// to get data from database (if needed)

// add view display possibly using data from database

// TODO insert the end html envelope (</body></html>)
?>