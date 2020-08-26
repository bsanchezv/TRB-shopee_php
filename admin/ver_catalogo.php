
<?php
include ('headside.php');
require('../database/dbconect.php');

$query = "SELECT * FROM productos";

$resultado=mysqli_query($con,$query);
$con->close();



?>

    <div class="page">
        <div class="container-fluid">
            <div class="row">
                <div class="alert alert-success" role="alert">Operación Exitosa</div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-body">
                        <div class="panel panel-defaul">
                            <div class="panel-heading">
                                <strong>
                                    <span>Catalogo de Productos </span>
                                </strong>
                                <div class="pull-right">
                                    <input type="text" placeholder="Buscar Producto">
                                    <svg width="20" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                    </svg>

                                </div>


                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 50px;">Codigo</th>
                                            <th class="text-center" style="width: 15%;">Categoria</th>
                                            <th> Nombre  </th>
                                            <th class="text-center" style="width: 15%;"> Talla</th>
                                            <th class="text-center" style="width: 15%;"> Color</th>
                                            <th class="text-center" style="width: 15%;"> Precio Unitario</th>
                                            <th class="text-center" style="width: 100px;"> Acciones </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        while($registro = $resultado->fetch_assoc()) {?>

                                            <tr>
                                                <th class="text-center" ><?php echo $registro['item_id'];  ?></th>
                                                <th> <?php echo $registro['categoria'];  ?>   </th>
                                                <th> <?php echo $registro['nombre'];  ?>   </th>
                                                <th class="text-center"> <?php echo $registro['talla'];  ?>  </th>
                                                <th class="text-center">
                                                    <span><?php echo $registro['color'];  ?></span>
                                                    <!--<img src="assets/colores/celeste.jpg" width="20" height="20">-->
                                                </th>
                                                <th class="text-center"> <?php echo $registro['precio_normal'];  ?></th>
                                                <th class="text-center" >
                                                    <a href="verdetalle.php?item_id=<?php echo $registro['item_id'];?>&id=<?php echo $admi['user_id'];?>"><img src="assets/iconos/verdetalle.png" width="20" title="Ver Detalle"></a>
                                                    <a href="editar.php?item_id=<?php echo $registro['item_id'];?>&id=<?php echo $admi['user_id'];?>"><img src="assets/iconos/editar.png" width="20" title="Editar"></a>
                                                </th>
                                            </tr>
                                        <?php
                                        }

                                        ?>


                                    </tbody>


                                </table>
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