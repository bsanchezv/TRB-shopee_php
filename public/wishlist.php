<?php
ob_start();
//Include header.php file
include('public/header.php');
?>

<?php

//Include _wishlist_template file if it is not empty. (if)
count($product->getData('wishlist')) ? include('public/Template/_wishlist_template.php') : include('public/Template/notFound/_wishlist_notFound.php');

//Include _cart-template if it is not empty. (if)
count($product->getData('cart')) ? include('public/Template/_cart-template.php') : include('public/Template/notFound/_cart_notFound.php');

//Include _new-products file
include('public/Template/_new-products.php');

?>

<?php
//Include footer.php file
include('public/footer.php');
?>