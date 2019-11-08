<div class="product-card">
          <div class="product-image">
            <img src="img/<?php echo $product["img"] ?>.jpg">
          </div>
          <div class="product-info" style="  font-size: 20px;font-family: 'GothamMedium';">
            <h5><a href="index.php?page=detail&id=<?php echo $product["id"] ?>" style="text-decoration: none;color:black;"><?php echo $product["name"] ?></a></h5>
            <h6>$<?php echo $product["price"] ?></h6>
          </div>
        </div>