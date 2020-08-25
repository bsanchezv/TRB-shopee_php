<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Virtual TRB</title>

    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!--Owl-carousel CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!--fotawesome icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

    <!--Custom CSS file-->
    <link rel="stylesheet" href="./style.css">

    <?php
    //require functions.php file
    require('public/functions.php');
    ?>

</head>
<body>
<!--start #header-->
<header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 color-header-bg">
        <p class="font-rale font-size-12 text-black-50 m-0">Jr. Los incas 300-Urbanización Jorge Chávez, San Luis. (01) 512 4856</p>
        <div class="font-rale font-size-14">
            <a href="./register/register-admi/login.php" class="px-3 border-right border-left text-dark">Login</a>
            <a href="public/wishlist.php" class="px-3 border-right text-dark">Lista de Deseos (0)</a>
        </div>

    </div>

    <!--Primary Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light color-second-bg">
        <a class="navbar-brand" href="../index.php">TRB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li
                <li class="nav-item active">
                    <a class="nav-link" href="../public/offer.php">Ofertas <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../public/new-products.php">Nuevos Productos <span class="sr-only">(current)</span></a>
                </li>

            </ul>
            <form action="#" class="font-size-14 font-rale">
                <a href="../public/cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
                </a>
            </form>
        </div>
    </nav>
    <!--end Primary Navigation-->

</header>
<!--end #header-->

<!--start #main-site-->
<main id="main-site">