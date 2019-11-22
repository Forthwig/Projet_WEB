<?php session_start();?>

<?php require 'data_base.php'; ?>
<HTML>

<HEAD>
    <TITLE>Peace & War</TITLE>
    <link rel="icon" type="ico"  href="img/ico/logo.ico"/>
	<link rel="stylesheet" href="css/agency.css"/>
</HEAD>



<body>
<?php 
$user= NULL;

if (isset($_SESSION['username'])){
    $user = getUser($_SESSION['username'])[0];
}

require 'header.inc.php';

if(isset($_GET['page'])){
     if($_GET['page'] == 'panier' and isset($user)){
        include 'Panier.php';
    }

    else if($_GET['page'] == 'detail'){
        include 'detail.php';
    }
        
    else if($_GET['page'] == 'search'){
        include 'search.php';
    }

    else if($_GET['page'] == 'add_cart' and isset($user)){
        include 'add_cart.php';
    }

    
    else if($_GET['page'] == 'login' and !isset($user)){
        include 'login.php';
    }
    else if($_GET['page'] == 'logout' and isset($user)){
        include 'logout.php';
    }
    
    else if($_GET['page'] == 'verification_login' and !isset($user)){
        include 'verification_login.php';
    }

    else if($_GET['page'] == 'verification_register' and !isset($user)){
        include 'verification_register.php';
    }

    //verification_login

    // if page has others values than above
    else{
        include 'main.php';
    }
}
else{
    include 'main.php';
}

?>

<?php require 'footer.inc.php' ; ?>

</body>