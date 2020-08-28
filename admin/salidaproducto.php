<?php
require('headside.php');
require('../database/dbconect.php');

$query = "SELECT * FROM comprobantes";
$resultado=mysqli_query($con,$query);
$con->close();
?>

    <div class="page">
        <div class="container-fluid">
            <div class="row">
                <div class="alert alert-success" role="alert">Agregado Exitosamente</div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel-body">
                        <div class="panel panel-defaul">
                            <div class="panel-heading">
                                <strong>

                                    <span> VENTAS </span>
                                </strong>
                                <div class="pull-right">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" >
                                        <span>Ordenar Por</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Fecha</a></li>
                                        <li><a href="#">Mes</a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 20px;">Nro comprobante</th>
                                            <th class="text-center" style="width: 25%;"> Nombres y Apellidos  </th>
                                            <th class="text-center" style="width: 20%;"> Fecha </th>
                                            <th class="text-center" style="width: 20px;"> Detalle </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while($registro = $resultado->fetch_assoc()) {?>
                                        <tr>
                                            <?php
                                            require('../database/dbconect.php');
                                            $user_id=$registro['user_id'];
                                            $query2 = "SELECT * FROM user WHERE user_id='$user_id'";
                                            $resultado2=mysqli_query($con,$query2);
                                            $cliente=mysqli_fetch_assoc($resultado2);
                                            $con->close();
                                            ?>


                                            <th class="text-center" "><?php echo $registro['id_venta'];  ?></th>
                                            <th>  <?php echo $cliente['first_name']; echo " "; echo $cliente['last_name'];?></th>
                                            <th class="text-center"><?php echo $registro['fecha_venta'];  ?> </th>
                                            <th class="text-center"> <a href="detalleventa.php?id_pdf=<?php echo $registro['pdf'];?> & id=<?php echo $admi['user_id'];?>"><img src="assets/iconos/verdetalle.png" width="20" title="Ver Detalle"></a> </th>

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

    <!--Carrusel admin-->


    <!--Class bootstrap-->
<?php
require('footeradmin.php');
?>