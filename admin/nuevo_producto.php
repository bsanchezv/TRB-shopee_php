<?php
//require functions.php file
require('headside.php');


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
                                    <span>NUEVO PRODUCTO </span>
                                </strong>


                            </div>
                            <div class="panel-body">

                                <div class="d-flex justify-content-center">
                                    <form action="nuevoproducto_proceso.php?id=<?php echo $admiID;?>" method="post" enctype="multipart/form-data" id="reg-form">
                                        <!--nombres producto-->
                                        <div class="form-row my-4"> <!--margen y=4-->
                                            <div class="col">
                                                <label for="Grupo de Nombre">Nombre producto</label><br>
                                                <input type="text" size="40" style="width : 300px" name="nombreProducto" >

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
                                                <input type="text" name="Precio_prod" size="40" style="width : 80px"  >
                                            </div>
                                            <div class="form-group mx-4">
                                                <label for="Grupo de Nombre">Descuento(%)</label><br>
                                                <input type="text" name="Tasa_Descuento" size="40" style="width : 80px"  >%
                                            </div>
                                            <div class="form-group mx-4 ">
                                                <label for="Grupo de Nombre">Precio Oferta</label><br>
                                                <span></span>
                                            </div>
                                        </div>
                                        <!--Tallas-->

                                        <div class="form-group">
                                            <label for="tallaProducto">Seleccione Talla</label>
                                            <select class="form-control" name="tallaProducto">
                                                <option value="0-3 Meses">0-3 Meses</option>
                                                <option value="3-6 Meses">3-6 Meses</option>
                                                <option value="6-9 Meses">6-9 Meses</option>

                                            </select>
                                        </div>
                                        <!--Descripción-->
                                        <div class="form-row my-4">
                                            <div class="col">
                                                <label for="DescripcionProducto">Descripcion</label><br>
                                                <textarea name="Descripcion" id="descripcion"  style="width : 300px; height: 200px" placeholder="Ingrese descripcion"></textarea>
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
                                                <input type="file" class="btn btn-info text-center"  name="imagenProducto">
                                            </div>
                                        </div>
                                        <!--Minimo Stock del producto-->
                                        <div class="submit-btn text-center my-5">
                                            <label for="StockProducto">Stock Mínimo </label>
                                            <input type="text"  style="width : 100px" name="stockmin"><span>unidades</span>
                                        </div>
                                        <!--boton de registrar-->
                                        <div class="submit-btn text-center my-5">
                                            <button type="submit" class="btn btn-success rounded-pill text-dark px-5">Añadir Producto</button>
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
//require functions.php file
require('footeradmin.php');
?>

