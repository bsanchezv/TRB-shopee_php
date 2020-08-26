<?php
require('headside.php');
require('../database/dbconect.php');
$item_id = $_GET['item_id'] ;
$query = "SELECT * FROM productos WHERE item_id= '$item_id'";
$resultado=mysqli_query($con,$query);
$product=mysqli_fetch_assoc($resultado);
?>

<div class="page">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="panel panel-defaul">
                        <div class="panel-heading">
                            <strong>
                                <span> COMENTARIOS SOBRE PRODUCTO </span><br>

                                <!--nombre-->
                                <span>Nombre: <?php echo $product['nombre'];   ?></span><br>
                                <!--color-->
                                <span>Color: <?php echo $product['color'];?></span><br>
                                <!--Talla-->
                                <span>Talla: <?php echo $product['talla'];   ?></span><br>
                                <!--imagen-->
                                <div class="form-row my-4">
                                    <div class="col">
                                        <img src="<?php echo $product['imagen']?>" width="200"><br>
                                    </div>
                                </div>

                            </strong>

                            <?php
                            $item_id = $_GET['item_id'] ;
                            $query2 = "SELECT * FROM feedback WHERE item_id= '$item_id'";
                            $resultado2=mysqli_query($con,$query2);

                            ?>
                        </div>

                        <div class="panel-body">

                            <div>
                                <tbody>

                                <?php
                                while($registro = $resultado2->fetch_assoc()) {?>

                                    <hr class="m-0">
                                    <!--Cliente-->
                                    <?php
                                    $usuarioID = $registro['user_id'] ;
                                    $query3 = "SELECT * FROM administrador WHERE user_id = '$usuarioID'";
                                    $resultado3=mysqli_query($con,$query3);
                                    $usuario=mysqli_fetch_assoc($resultado3);
                                    ?>
                                    <b><?php echo $usuario['first_name'];   ?> <?php echo $usuario['last_name'];   ?> </b><br>

                                    <!--fecha y hora de comentario-->
                                    <span> <?php echo $registro['fecha_comentario'];   ?></span><br>

                                    <!--Estrellas-->

                                    <!--Comentaio-->
                                    <span> <?php echo $registro['comentario'];   ?></span><br>
                                    <?php
                                }

                                ?>


                                </tbody>
                            </div>


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
?>
