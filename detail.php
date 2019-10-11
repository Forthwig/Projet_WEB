<link rel="stylesheet" href="css/detail.css" />
<?php require 'header.inc.php'; ?>
    <body style="background-color: gray">



        <section class="detail_style" id="detail_section">
            <div>
                <h1 id="detail_title">1911 Knight Hawk Fullmetal Black GBB</h1>
            </div>
            <div>
                <div id="detail_img">
                    <img src="img/gun.png">
                </div>
                <div id="detail_price">
                    Prix : 199.90 €
                </div>
                <div id="detail_quantity">
                    Quantité :
                    <input type="number" name="quantite:" value="1" min="0">
                </div>
                <div>
                    <button type="button" id="detail_cart">Ajouter au panier</button>
                </div>
                <div id="detail_stock">
                    En stock
                </div>
            </div>
            <div id ="detail_description">
                <p style="text-indent: 2ch;">Vous aimez les répliques de type 1911 sans avoir la même que tout le monde ? WE a pensé à vous avec cette réplique M1911 personnalisée Knighthawk par Knight Armament Company.</p>
                <br/>
                <p>Tout métal, fonctionnant à gaz avec une culasse mobile et des plaquettes en polymère, cette réplique reprend ce qui a fait le succès des modèles 1911 en y ajoutant une personnalisation originale et un magnifique marquage Knighthawk !</p>
            </div>
            
                <?php require 'footer.inc.php' ; ?>
        </section>
    </body>
</html>
