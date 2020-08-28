
    <?php
    require('headside.php');
    require('../database/dbconect.php');

    $item_id = $_GET['item_id'] ;
    $query = "SELECT * FROM productos WHERE item_id= '$item_id'";

    $resultado=mysqli_query($con,$query);
    $product=mysqli_fetch_assoc($resultado);
    $con->close();
    ?>

    <!--Cuerpo-->


    <div class="page">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="panel-body">
                        <div class="panel panel-defaul">
                            <div class="panel-heading">
                                <strong>
                                    <span> EDITAR PRODUCTO </span>
                                </strong>


                            </div>
                            <div class="panel-body">

                                <div class="d-flex justify-content-center">
                                    <form action="procesar_editar.php?item_id=<?php echo $registro['item_id'];?>&id=<?php echo $admi['user_id'];?>" method="post" enctype="multipart/form-data" id="reg-form">
                                        <!--nombre producto-->
                                        <div class="form-row my-4"> <!--margen y=4-->
                                            <div class="col">
                                                <label for="Grupo de Nombre">Nombre producto</label><br>
                                                <input type="text" size="40" style="width : 300px" value="<?php echo $product['nombre'];?>" name="nombreProducto">

                                            </div>
                                        </div>

                                        <!--Categoria-->

                                        <div class="form-group">
                                            <label for="categoriaProducto">Categoria</label>
                                            <select class="form-control" name="categoriaProducto" value="Seleccione">
                                                <option value="Enterizo">Enterizo</option>
                                                <option value="Conjunto">Conjunto</option>
                                                <option value="Vestido">Vestido</option>
                                            </select>
                                        </div>
                                        <!--precios-->
                                        <div class="form-row my-4">
                                            <div class="form-group">
                                                <label for="Grupo de Nombre">Precio Normal</label><br>
                                                <input type="text" name="Precio_prod" size="40" style="width : 80px" value="<?php echo $product['precio_normal'];?>" >
                                            </div>
                                            <div class="form-group mx-4">
                                                <label for="Grupo de Nombre">Descuento(%)</label><br>
                                                <input type="text" name="Tasa_Descuento" size="40" style="width : 80px" value="<?php echo $product['descuento'];?>" >%
                                            </div>
                                            <div class="form-group mx-4 ">
                                                <label for="Grupo de Nombre">Precio Oferta</label><br>
                                                <span><?php echo $product['precio_oferta'];?></span>
                                            </div>
                                        </div>
                                        <!--Tallas-->

                                        <div class="form-group">
                                            <label for="tallaProducto">Seleccione Talla</label>
                                            <select class="form-control" name="tallaProducto" value="Seleccione">
                                                <option value="0-3 Meses">0-3 Meses</option>
                                                <option value="3-6 Meses">3-6 Meses</option>
                                                <option value="6-9 Meses">6-9 Meses</option>

                                            </select>
                                        </div>
                                        <!--Descripción-->
                                        <div class="form-row my-4">
                                            <div class="col">
                                                <label for="DescripcionProducto">Descripcion</label><br>
                                                <textarea name="Descripcion" id="descripcion"  style="width : 300px; height: 200px" ><?php echo $product['descripcion'];?></textarea>
                                            </div>
                                        </div>
                                        <!--Colores -->
                                        <div class="form-group">
                                            <label for="coloresProducto">Seleccione Color</label>
                                            <select class="form-control" name="coloresProducto">
                                                <option value="Celeste">Celeste</option>
                                                <option value="Rojo">Rojo</option>
                                                <option value="Amarillo">Amarillo</option>
                                                <option value="Rosado">Rosado</option>
                                                <option value="Verde">Verde</option>
                                                <option value="Azul">Azul</option>
                                                <option value="Plomo">Plomo</option>
                                                <option value="Blanco">Blanco</option>
                                                <option value="Vaca">Vaca</option>
                                                <option value="Dalmata">Dalmata</option>
                                                <option value="Tigre">Tigre</option>
                                                <option value="Leopardo">Leopardo</option>
                                            </select>
                                        </div>

                                        <!--Imagen del producto-->
                                        <div class="form-row my-4">
                                            <div class="col">
                                                <label for="ImagenProducto">Imagen</label>
                                                <img src="../admin<?php echo $product['imagen']?>" width="200"><br>
                                                <input type="file" class="btn btn-info text-center"  name="imagenProducto">
                                            </div>
                                        </div>
                                        <!--Stock del producto-->
                                        <div class="submit-btn text-center my-5">
                                            <label for="StockProducto">Stock Actual : </label>
                                            <span><?php echo $product['stock']?></span>
                                        </div>
                                        <!--Minimo Stock del producto-->
                                        <div class="submit-btn text-center my-5">
                                            <label for="StockProducto">Stock Mínimo </label>
                                            <input type="text"  style="width : 100px" value="<?php echo $product['stock_min']?>" name="stockmin"><span>unidades</span>
                                        </div>
                                        <!--boton de registrar-->
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


    <?php
    require('footeradmin.php');
    ?>