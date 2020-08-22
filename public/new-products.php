<?php
ob_start();
//Include header.php file
include('public/header.php');
?>
<?php
/*//Include _banner-area.php file
include('Template/_banner-area.php');

//Include _top-sale.php file
include('Template/_top-sale.php');

//Include _special-price file
include('Template/_special-price.php');

//Include _banner-adds file
include('Template/_banner-ads.php');*/

//Include _new-products file
include('public/Template/_new-products.php');

?>

<?php
//Include footer.php file
include('public/footer.php');
?>