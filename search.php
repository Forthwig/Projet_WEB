<?php require 'header.inc.php'; ?>
<?php require 'data_base.php'; ?>

<link rel="stylesheet" href="css/search.css">
<link rel="stylesheet" href="css/test.css">
<section class="search_info">
<h2>Votre recherche</h2>
</section>
<section class="products">

  <?php 
  if (isset($_GET["q"])) {
        $prods = getProductBySearch($_GET["q"]);
        if(count($prods)){
            foreach (getProductBySearch($_GET["q"]) as $product) { 
                include('produit.php');
            } 
        } else{ ?>
            <h2>Votre recherche n'a rien retourné</h2>  
        <?php } ?>
      
  <?php }else{
      ?>
      <h2>Votre recherche n'est pas venu</h2>
      <?php
  } ?>
</section>

<?php require 'footer.inc.php' ; ?>


