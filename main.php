<?php require 'header.inc.php'; ?>
<?php require 'data_base.php'; ?>

<link rel="stylesheet" href="css/test.css">


<section class="main_first" id="top">

	<div class="info">

		<h1>BADASS WEBSITE,FOR BADASS CUSTOMERS</h1>

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


