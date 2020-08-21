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
    <link rel="stylesheet" href="style.css">

    <!-- cached version -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/datepicker3.min.css" />

    <!-- main -->
    <link rel="stylesheet" href="css/main.css" />

    <?php
    //require functions.php file
    require('functions.php');
    ?>

</head>
<body>
<!--start #header-->
<header id="header">

    <div class="logo pull-left"> Tienda de Ropa de Bebés </div>
    <div class="header-content">
        <div class="header-date pull-left">
            <strong>
                Bienvenido Administrador D'angelo
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-emoji-smile" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path fill-rule="evenodd" d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683z"/>
                    <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                </svg>
            </strong>
        </div>
        <!--Perfil desplegable-->
        <div class="pull-right clearfix">
            <ul class="info-menu list-inline list-unstyled">
                <li class="profile">
                    <a href="#" data-toggle="dropdown" class="toggle" aria-expanded="false">
                        <img src="assets/admin.png" width="20" height="20" class="img-circle img-inline">
                        <span >D'angelo</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="perfil.php">
                                <img src="assets/perfil.jpg" alt="15" height="15" class="img-circle img-inline">
                                Perfil
                            </a>
                        </li>
                        <li class="last">
                            <a href="salir_admin.php">
                                <img src="assets/salir.png" alt="15" height="15" >
                                Salir
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>


</header>
<!--end #header-->

<!--start #main-site-->
<main id="main-site">

    <!--Sidebar-->


    <div class="sidebar">
        <ul>

            <li>
                <div class="dropright">

                    <a href="#" data-toggle="dropdown" class=" dropdown-toggle" >
                        <svg width="30"  viewBox="0 0 16 16" class="bi bi-shop text-white mx-3 my-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 15.5a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zM3.12 1.175A.5.5 0 0 1 3.5 1h9a.5.5 0 0 1 .38.175l2.759 3.219A1.5 1.5 0 0 1 16 5.37v.13h-1v-.13a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.13H0v-.13a1.5 1.5 0 0 1 .361-.976l2.76-3.22z"/>
                            <path d="M2.375 6.875c.76 0 1.375-.616 1.375-1.375h1a1.375 1.375 0 0 0 2.75 0h1a1.375 1.375 0 0 0 2.75 0h1a1.375 1.375 0 1 0 2.75 0h1a2.375 2.375 0 0 1-4.25 1.458 2.371 2.371 0 0 1-1.875.917A2.37 2.37 0 0 1 8 6.958a2.37 2.37 0 0 1-1.875.917 2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.5h1c0 .76.616 1.375 1.375 1.375z"/>
                            <path d="M4.75 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm3.75 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm3.75 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                            <path fill-rule="evenodd" d="M2 7.846V7H1v.437c.291.207.632.35 1 .409zm-1 .737c.311.14.647.232 1 .271V15H1V8.583zm13 .271a3.354 3.354 0 0 0 1-.27V15h-1V8.854zm1-1.417c-.291.207-.632.35-1 .409V7h1v.437zM3 9.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5V15H7v-5H4v5H3V9.5zm6 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-4zm1 .5v3h2v-3h-2z"/>
                        </svg>
                        <span>Catalogo de Productos</span>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="text-center text-info"  href="nuevo_producto.php">
                                <img src="assets/iconos/add.png" width="20" class="img-circle img-inline">
                                Añadir nuevo</a></li>
                        <li><a class="text-center text-info" href="ver_catalogo.php">Ver Catalogo</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="dropright">
                    <a href="#" data-toggle="dropdown" class=" dropdown-toggle" >
                        <svg width="30"  viewBox="0 0 16 16" class="bi bi-file-text text-white mx-3 my-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4 1h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4z"/>
                            <path fill-rule="evenodd" d="M4.5 10.5A.5.5 0 0 1 5 10h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                        <span>Control de Productos</span>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="text-center text-info" href="registrarentrada.php">Entrada Productos</a></li>
                        <li><a class="text-center text-info" href="salidaproducto.php">Salidas Productos</a></li>
                        <li><a class="text-center text-info" href="bajo_stock.php">Bajo Stock</a></li>
                    </ul>
                </div>

            </li>
        </ul>
    </div>
    <!--Sidebar-->


    <div class="page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-body">
                        <div class="panel panel-defaul">
                            <div class="panel-heading">
                                <strong>
                                    <span> EDICIÓN PERFIL </span>
                                </strong>

                            </div>
                            <div class="panel-body">
                                <div class="d-flex justify-content-center">
                                    <form action="#" method="post" enctype="multipart/form-data" id="reg-form">
                                        <!--nombres administrador-->
                                        <div class="form-row my-4"> <!--margen y=4-->
                                            <div class="col">
                                                <label for="Grupo de Nombre">Nombre: </label>
                                                <input type="text" value="D'angelo Catacora Mamani" style="width : 300px">
                                            </div>
                                        </div>
                                        <!--Fecha Nacimiento-->
                                        <div class="form-row my-4">
                                            <div class="col">
                                                <label for="Grupo de Nombre">Fecha Nacimiento</label>
                                                <input type="date" name="FechaNacimiento" size="40" style="width : 150px"  >
                                            </div>
                                        </div>

                                        <!--Imagen-->
                                        <div class="form-row my-4">
                                            <div class="col">
                                                <label for="ImagenProducto">Imagen</label>
                                                <input type="file" class="btn btn-secondary text-center"  id="Imagen">
                                            </div>
                                        </div>
                                        <!--Email-->
                                        <div class="form-row my-4">
                                            <div class="col">
                                                <label for="EmailAdmin">Email</label>
                                                <input type="email" name="emailAdmin" value="dangelo_123456@gmail.com"style=" width : 300px">
                                            </div>
                                        </div>

                                        <!--boton de Guardar cambios-->
                                        <div class="submit-btn text-center my-5">
                                            <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Guardar Cambios</button>
                                        </div>
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


</main>
<!--end #main-site-->


<!--Bootstrap JS-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<!--Owl Carousel Js file-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

<!--isotope plugin CDN-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>


<script type="text/javascript" src="adicional/jquery-3.5.1.js"></script>
<script type="text/javascript" src="adicional/bootstrap.min.js"></script>
<script type="text/javascript" src="adicional/bootstrap-datepicker.min.js"></script>


<script type="text/javascript" src="adicional/unctions.js"></script>



<!--Custom Javascript-->
<script src="index.js"></script>

</body>
</html>