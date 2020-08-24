<?php
require('headside.php');
require ('DBconect.php');
$admiID = $_GET['id'];
$query = "SELECT * FROM administrador WHERE user_id= '$admiID'";
$resultado = mysqli_query($con, $query);
$administrador = mysqli_fetch_assoc($resultado);


?>

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
                                    <form action="procesar_editarperfil.php?id=<?php echo $admiID;?>" method="post" enctype="multipart/form-data" id="reg-form">
                                        <!--nombres administrador-->
                                        <div class="form-row my-4"> <!--margen y=4-->
                                            <div class="col">
                                                <label for="Grupo de Nombre">Nombre: </label>
                                                <input type="text" value="<?php echo $administrador['first_name'];?>" style="width : 300px" name="nombreAdmi">
                                            </div>
                                        </div>
                                        <!--Apellidos administrador-->
                                        <div class="form-row my-4">
                                            <div class="col">
                                                <label for="Grupo de Nombre">Apellidos: </label>
                                                <input type="text" value="<?php echo $administrador['last_name'];?>" name="apellidoAdmi" style="width : 300px">
                                            </div>
                                        </div>

                                        <!--Imagen-->
                                        <div class="form-row my-4">
                                            <div class="col">
                                                <label for="ImagenProducto">Imagen</label>
                                                <img src="../register/register-admi<?php echo $administrador['profileImage'];?> " width="300"><br>
                                                <input type="file" class="btn btn-secondary text-center"  name="imagen">
                                            </div>
                                        </div>
                                        <!--Email-->
                                        <div class="form-row my-4">
                                            <div class="col">
                                                <label for="EmailAdmin">Email</label>
                                                <input type="email" name="emailAdmi" value="<?php echo $administrador['email'];?>"style=" width : 300px">
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

<?php
require('footeradmin.php');
?>