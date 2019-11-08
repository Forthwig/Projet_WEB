<?php require 'header.inc.php'; ?>
<?php require 'data_base.php'; ?>

<link rel="stylesheet" href="css/test.css">


<section class="main_first" id="top">

	<div class="info">
    <!-- Au cas où username n'est pas défini -->
    <?php
    if(isset($_SESSION['username']))
    {
    ?>
    <h1>Hi <?php echo $_SESSION['username'] ?> ! <br/></h1>
    <?php
    }
    ?>
    
		<h1>BADASS WEBSITE, FOR BADASS CUSTOMERS</h1>

	</div>

</section>

<!--<section>
	<img src="img/bb.jpg">
</section>-->


<section class="products">

  <?php 
  foreach (getAllCat() as $cat) {
    ?>
    <div class="cat"><h2> <?php echo $cat["nom"] ?></h2></div>
    
    <?php
    foreach (getProductsByCatId($cat["id"]) as $product) {
      include('produit.php');
    }  
  }
  
  ?>
</section>

<?php require 'footer.inc.php' ; ?>


