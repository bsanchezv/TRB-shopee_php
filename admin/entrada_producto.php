
<?php
    require('headside.php');
    require('DBconect.php');
    $item_id = $_GET['id'] ;
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
                                    <span> ENTRADA PRODUCTO</span>
                                </strong>


                            </div>
                            <div class="panel-body">

                                <div class="d-flex justify-content-center">
                                    <form action="procesar_actualizar.php?id=<?php echo $item_id;?>" method="post" enctype="multipart/form-data" id="reg-form">
                                        <!--nombre producto-->
                                        <div class="form-row my-4"> <!--margen y=4-->
                                            <div class="col">
                                                <label for="Grupo de Nombre">Nombre producto</label><br>
                                                <button type="button" id="NombreProducto" class="btn btn-info btn-sm" disabled>
                                                    <span><?php echo $product['nombre'];   ?></span>
                                                </button>

                                            </div>
                                        </div>
                                        <!--categoria producto-->
                                        <div class="form-row my-4"> <!--margen y=4-->
                                            <div class="col">
                                                <label for="Grupo de Nombre">Categoria</label><br>
                                                <button type="button" id="categoriaProducto" class="btn btn-info btn-sm" disabled>
                                                    <span><?php echo $product['categoria'];   ?></span>
                                                </button>

                                            </div>
                                        </div>
                                        <!--Comentarios-->
                                        <div class="form-row my-4"> <!--margen y=4-->
                                            <div class="col">
                                                <a href="comentarios.php">Comentarios sobre producto</a><br>
                                            </div>
                                        </div>
                                        <!--precios-->
                                        <div class="form-row my-4">
                                            <div class="form-group">
                                                <label for="Grupo de Nombre">Precio Normal</label><br>
                                                <button type="button" id="PrecioProducto" class="btn btn-info btn-sm" disabled><?php echo $product['precio_normal'];   ?></button>
                                            </div>
                                            <div class="form-group mx-4">
                                                <label for="Grupo de Nombre">Precio Oferta</label><br>
                                                <button type="button" id="OfertaProducto" class="btn btn-info btn-sm" disabled><?php echo $product['precio_oferta'];   ?></button>
                                            </div>
                                            <div class="form-group mx-4 ">
                                                <label for="Grupo de Nombre">Descuento</label><br>
                                                <button type="button" id="DescuentoProducto" class="btn btn-info btn-sm" disabled><?php echo $product['descuento'];   ?></button>
                                            </div>
                                        </div>
                                        <!--Talla-->
                                        <div class="form-row my-4"> <!--margen y=4-->
                                            <div class="col">
                                                <label for="TallaProducto">Talla</label><br>
                                                <button type="button" id="TallaProducto" class="btn btn-info btn-sm" disabled><?php echo $product['talla'];   ?></button>
                                            </div>
                                        </div>
                                        <!--Descripción-->
                                        <div class="form-row my-4">
                                            <div class="col">
                                                <label for="DescripcionProducto">Descripcion</label><br>
                                                <span class="text-center mx-4"><?php echo $product['descripcion'];?></span>
                                            </div>
                                        </div>
                                        <!--Colores-->
                                        <div class="form-row my-4">
                                            <label for="ColoresProducto">Color</label>
                                            <div class="col">
                                                <span class="text-center mx-4"><?php echo $product['color'];?></span>
                                            </div>
                                        </div>

                                        <!--Imagen del producto-->
                                        <div class="form-row my-4">
                                            <div class="col">
                                                <label for="ImagenProducto">Imagen</label>
                                                <img src="<?php echo $product['imagen']?>" width="200"><br>
                                            </div>
                                        </div>
                                        <!--Minimo Stock del producto-->
                                        <div class="submit-btn text-center my-5">
                                            <label for="StockProducto">Stock Mínimo </label>
                                            <button type="button" id="StockProducto" class="btn btn-info btn-sm" disabled><span class="text-center mx-4"><?php echo $product['stock_min'];?></span></button>

                                        </div>
                                        <div class="submit-btn text-center my-5">
                                            <label for="StockProducto">Stock Actual </label>
                                            <button type="button" id="StockProducto" class="btn btn-info btn-sm" disabled><span class="text-center mx-4"><?php echo $product['stock'];?></span></button>

                                        </div>



                                        <!--CANTIDAD A INGRESAR-->
                                        <div class="text-center">
                                            <b>CANTIDAD </b>
                                            <input type="text" name="agregar" style="width : 210px" placeholder="Ingrese Cantidad">
                                        </div>
                                        <!--boton de registrar-->
                                        <div class="submit-btn text-center my-5">
                                            <button type="submit" class="btn btn-success rounded-pill text-dark px-5">Agregar a Stock</button>
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




    <!--Class bootstrap-->
<?php
require('footeradmin.php');
?></html>