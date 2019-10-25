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

function getProductById($productId)
{
    $params = array('productCode' => $productId);
    $query = "
        select p.*
          from produit p
          where p.id = :productCode";
    return executeQuery($query, $params);
}

function getPriceByProductId($productId)
{
    $params = array('productCode' => $recipeId);
    $query = "
        select p.unit_price
          from produit p
          where p.id = '".$productId."'
    ";
    return executeQuery($query, $params);
}

function getColorsByProductId($productId)
{
    $params = array('productCode' => $recipeId);
    $query = "
        select p.Colors.*
          from produit p
          where p.id = '".$productId."'
    ";
    return executeQuery($query, $params);
}

function getNameByProductId($productId)
{
    $params = array('productCode' => $recipeId);
    $query = "
        select p.name
          from produit p
          where p.id = '".$productId."'
    ";
    return executeQuery($query, $params);
}

function getSizeByProductId($productId)
{
    $params = array('productCode' => $recipeId);
    $query = "
        select p.size.*
          from produit p
          where p.id = '".$productId."'
    ";
    return executeQuery($query, $params);
}

function executeQuery($query, $params)
{
    
    $bdd = new PDO('mysql:host=localhost;dbname=projet_web', 'root','') ;
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

function getProductsByCatId($catId){
    $params = array('catID' => $catId);
    $query = 'select p.* from produit p WHERE p.cat = :catID';
    return executeQuery($query, $params);
}

function  getProductsByOrderId($orderId){
    $params = array('orderId' => $orderId);
    $query = '
select p.*,op.quantity,op.unit_price as order_unit_price
from products p
INNER JOIN order_products op ON p.id = op.product_id
WHERE op.order_id = :orderId';
return  executeQuery($query, $params);
}


?>