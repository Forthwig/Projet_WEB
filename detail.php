<link rel="stylesheet" href="css/detail.css" />
<?php require 'header.inc.php'; ?>
    <body style="background-color: gray">
    <?php require 'data_base.php'; ?>
        <?php if(isset($_GET["id"])){
                $prod = getProductById($_GET["id"]);
                if (count($prod)) {
                    $prod = $prod[0]; ?>
                <section class="detail_style" id="detail_section">
                    <div>
                        <h1 id="detail_title"><?php echo $prod["name"] ?></h1>
                    </div>
                    <div>
                        <div id="detail_img">
                            <img src="img/<?php echo $prod["img"] ?>.jpg">
                        </div>
                        <div id="detail_price">
                            Prix : <?php echo $prod["price"] ?> €
                        </div>                        
                        <div>
                            <form action="add_cart.php" method="post">
                                <?php /*<div id="detail_quantity">
                                    Quantité :
                                    </div>*/ ?>
                                <input type="hidden" name="qtt" value="1" min="0">
                                <input type="hidden" name="id_prod" value="<?php echo $prod["id"] ?>">
                                <button type="submit" id="detail_cart">Ajouter au panier</button>
                            </form>
                        </div>
                    </div>
                        <div id="detail_stock">
                            En stock
                        </div>
                    </div>
                    <div id ="detail_description">
                        <p style="text-indent: 2ch;"><?php echo $prod["des"] ?></p>
                    </div>
                    
                        <?php require 'footer.inc.php' ; ?>
                </section>
                <?php }else{
                    header("HTTP/1.0 404 Not Found");?>
                    <section class="detail_style" id="detail_section">
                        <h1>Le produit n'existe pas</h1>
                    </section>    
                <?php } ?>
                
                <?php
            }else{ header("Location: main.php");} ?>
    </body>
</html>
