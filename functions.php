<?php

//require MySQL Connection
require('database/DBController.php');


// require Product Class
require ('database/Product.php');

// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
//$product_shuffle = $product->getData(); //Example. For calling table cart: getData(table:'cart')
//print_r($product->getData());


