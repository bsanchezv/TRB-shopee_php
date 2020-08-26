<?php
    require('headside.php');
    require('../database/dbconect.php');
    $admiID = $_GET['id'] ;
    $query = "SELECT * FROM administrador WHERE user_id= '$admiID'";
    $resultadoAdmi=mysqli_query($con,$query);
    $administrador=mysqli_fetch_assoc($resultadoAdmi);

?>


    <div class="page">
        <div class="container-fluid">
            <div class="row">
                <div class="alert alert-success" role="alert">Cambios Guardados</div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel-body">
                        <div class="panel panel-defaul">
                            <div class="panel-heading">
                                <strong>
                                    <span> PERFIL ADMINISTRADOR </span>
                                </strong>
                                <div class="pull-right">
                                    <a href="editar_perfil.php?id=<?php echo $administrador['user_id'];?>"><button type="button" class="btn btn-warning">EDITAR PERFIL</button></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="text-center">
                                    <form action="#" method="post" enctype="multipart/form-data" id="reg-form">
                                        <!--Imagen-->
                                        <div class="form-row my-4">
                                            <div class="col">
                                                <img src="<?php echo $administrador['profileImage'];?> " width="300" ><br>
                                            </div>
                                        </div>
                                        <!--nombres administrador-->
                                        <div class="form-row my-4"> <!--margen y=4-->
                                            <div class="col">
                                                <label for="Grupo de Nombre">Nombre: <?php echo $administrador['first_name'];   ?></label>
                                            </div>
                                        </div>
                                        <!--Apellidos administrador-->
                                        <div class="form-row my-4"> <!--margen y=4-->
                                            <div class="col">
                                                <label for="Grupo de Nombre">Apellidos:<?php echo $administrador['last_name'];   ?></label>
                                            </div>
                                        </div>
                                        <!--Email-->

                                        <div class="form-row my-4"> <!--margen y=4-->
                                            <div class="col">
                                                <label for="Grupo de Nombre">Email: <?php echo $administrador['email'];   ?></label>
                                            </div>
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