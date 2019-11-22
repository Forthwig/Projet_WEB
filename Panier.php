
<link rel="stylesheet" href="css/Panier.css" />
<div class="cart_h">
<h1>Votre panier</h1>
</div>
<div class="prod_container">
<?php 

foreach (getProdUser($user["id"]) as $prod) { ?>
        <div class="cart_prod">
        <br />
        <img src="img/<?php echo $prod["img"] ?>.jpg" height="50px" width="75px" />
        <br />
        <br />
        <?php echo $prod["name"] ?>
        <br />
        <?php echo $prod["qtt"] ?>
        <br />
        
        <form action="cart_function.php" method="post">
            <input type="hidden" name="remove_prod">
            <input type="hidden" name="prod" value="<?php echo $prod["id"] ?>">
            <button type="submit">supprimer</button>
        </form>
        
        <br />
        <br />
        </div>
    <?php } ?>
    
    
    </div>
