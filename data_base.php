<?php

function getAllProducts(){
    $query='select * from produit';
    return executeQuery($query,null);
}

function getProductBySearch($name){
    $params = array('name' => "%".$name."%");
    $query = 'select * from produit where name LIKE :name';
    return executeQuery($query, $params);
}

function getProductById($productId) {
    $params = array('productCode' => $productId);
    $query = "
        select p.*
          from produit p
          where p.id = :productCode";
    return executeQuery($query, $params);
}

function getPriceByProductId($productId) {
    $params = array('productCode' => $recipeId);
    $query = "
        select p.unit_price
          from produit p
          where p.id = '".$productId."'
    ";
    return executeQuery($query, $params);
}

function getColorsByProductId($productId) {
    $params = array('productCode' => $recipeId);
    $query = "
        select p.Colors.*
          from produit p
          where p.id = '".$productId."'
    ";
    return executeQuery($query, $params);
}

function getNameByProductId($productId) {
    $params = array('productCode' => $recipeId);
    $query = "
        select p.name
          from produit p
          where p.id = '".$productId."'
    ";
    return executeQuery($query, $params);
}

function getSizeByProductId($productId) {
    $params = array('productCode' => $recipeId);
    $query = "
        select p.size.*
          from produit p
          where p.id = '".$productId."'
    ";
    return executeQuery($query, $params);
}

function executeQuery($query, $params) {
    
    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root','') ;
    try {
        $res = $bdd->prepare($query);
        $res->execute($params);

        $datas = $res->fetchAll();

        $res->closeCursor();

        return $datas;
    } catch (PDOException $e) {
        var_dump($e);
    }
}

function getAllCat(){
    $query='select * from cat';
    return executeQuery($query,null);
}

function getProductsByCatId($catId) {
    $params = array('catID' => $catId);
    $query = 'select p.* from produit p WHERE p.cat = :catID';
    return executeQuery($query, $params);
}

function  getProductsByOrderId($orderId) {
    $params = array('orderId' => $orderId);
    $query = '
    select p.*,op.quantity,op.unit_price as order_unit_price
    from products p
    INNER JOIN order_products op ON p.id = op.product_id
    WHERE op.order_id = :orderId';
    return  executeQuery($query, $params);
}

function addProdToCart($userId,$prodId,$qt){
    $params = array('prodId' => $prodId,'userId' =>$userId,'qt' =>$qt);
    $query = 'INSERT INTO cart (user_id,produit_id,qtt)
    VALUE (:userId,:prodId,:qt)';
    return  executeQuery($query, $params);
}

function getProdUser($userId){
    $params = array('userId' =>$userId);
    $query = 'SELECT p.*, COUNT(c.qtt) as qtt FROM cart c INNER JOIN produit p ON c.produit_id = p.id  WHERE c.user_id=:userId GROUP BY c.produit_id';
    return  executeQuery($query, $params);
}

function changeQttProd($userId,$prodId,$qt){
    $params = array('prodId' => $prodId,'userId' =>$userId,'qt' =>$qt);
    $query = 'UPDATE cart
    SET qtt = 20
    WHERE user_id=:userId AND produit_id=(SELECT id FROM cart WHERE produit_id=:prodId ORDER BY id LIMIT 1)';
    return  executeQuery($query, $params);
}

function removeProd($userId,$prodId){
    $params = array('prodId' => $prodId,'userId' =>$userId);
    $query = 'DELETE FROM cart WHERE user_id=:userId AND produit_id=:prodId';
    return  executeQuery($query, $params);
}


?>