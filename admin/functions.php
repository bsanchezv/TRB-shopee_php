<?php

//require MySQL Connection
//require('database/DBController.php');

require('database/user.php');
require('database/user_session.php');


// require Product Class
require ('database/Product.php');

// require Cart Class
require ('database/Cart.php');

// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
//Para hacer shuffle anywhere
$product_shuffle = $product->getData(); //Example. For calling table cart: getData(table:'cart')
//print_r($product->getData());

// Cart object
$Cart = new Cart($db );

/* Prueba añadir a tabla Cart
$arr=array(
    "user_id"=>2,
    "item_id"=>9
);

$Cart->insertIntoCart($arr);
*/


function CadenaFormato($entrada){
    $entrada=trim($entrada);
    $entrada=strtoupper($entrada);
    
    while(strpos($entrada,"  ")>0){
        $entrada=str_replace("  "," ",$entrada);
    }    

    return $entrada;
}

?>