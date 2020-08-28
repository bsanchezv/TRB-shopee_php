

<?php
require('headside.php');
require('../database/dbconect.php');

$item_id = $_GET['item_id'] ;
$query = "SELECT * FROM productos WHERE item_id= '$item_id'";

$resultado=mysqli_query($con,$query);
$product=mysqli_fetch_assoc($resultado);
$con->close();
?>



<div class="page">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="panel panel-defaul">
                        <div class="panel-heading">
                            <strong>
                                <span> DETALLE PRODUCTO</span>
                            </strong>


                        </div>
                        <div class="panel-body">

                            <div class="d-flex justify-content-center">
                                <form action="eliminarproducto_proceso.php?item_id=<?php echo $product['item_id'];?>&id=<?php echo $admi['user_id'];?>" method="post" enctype="multipart/form-data" id="reg-form">
                                    <!--nombre producto-->
                                    <div class="form-row my-4"> <!--margen y=4-->
                                        <div class="col">
                                            <label for="Grupo de Nombre">Nombre producto</label><br>
                                            <button type="button" id="NombreProducto" class="btn btn-info btn-sm" disabled>
                                                <span><?php echo $product['nombre'];   ?></span>
                                            </button>

                                        </div>
                                    </div>
                                    <!--Categoria producto-->
                                    <div class="form-row my-4"> <!--margen y=4-->
                                        <div class="col">
                                            <label for="Grupo de Nombre">Categoria </label><br>
                                            <button type="button" id="CategoriaProducto" class="btn btn-info btn-sm" disabled>
                                                <span><?php echo $product['categoria'];   ?></span>
                                            </button>

                                        </div>
                                    </div>

                                    <!--Talla-->
                                    <div class="form-row my-4"> <!--margen y=4-->
                                        <div class="col">
                                            <label for="TallaProducto">Talla</label><br>
                                            <button type="button" id="TallaProducto" class="btn btn-info btn-sm" disabled><?php echo $product['talla'];   ?></button>
                                        </div>
                                    </div>
                                    <!--Colores-->
                                    <div class="form-row my-4">
                                        <label for="ColoresProducto">Color</label>
                                        <div class="col">
                                            <span class="text-center mx-4"><?php echo $product['color'];?></span>
                                        </div>
                                    </div>

                                    <div class="form-row my-4">
                                        <label>Ingrese Contraseña</label> <br>
                                        <input type="password" class="text-center" name="pass">
                                    </div>
                                    <!--botones de editar y eliminar producto-->
                                    <div class="submit-btn text-center my-5">
                                        <button type="submit" class="btn btn-danger rounded-pill text-dark px-5">Eliminar </button>
                                        <a href="verdetalle.php?item_id=<?php echo $product['item_id'];?>&id=<?php echo $admi['user_id'];?>" class="btn btn-warning rounded-pill text-dark px-5">Cancelar</a>
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

<?php
require('footeradmin.php');
?>



<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">ELIMINAR PRODUCTO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-danger">Eliminar</button>
                <?php

                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $pass=$_POST['pass'];
                    if ($pass=="borrar"){

                        $query = "DELETE FROM productos WHERE item_id='$item_id'";

                        $con = mysqli_connect("localhost","root","","register_db");

                        $resultado=mysqli_query($con,$query);

                        header('location: ver_catalogo.php');

                        $con->close();


                    }else{
                        echo "CODIGO DE ELIMINACION INCORRECTA";
                    }
                }



                ?>



            </div>
        </div>
    </div>
</div>