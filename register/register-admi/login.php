
<?php

//session_start();
// header.php
include ('header.php');
include ('helper.php');
?>

<?php
    // Conección mysqli
    //$user = array();
    include ('../../database/DBController.php');

    // obtenemos la información del usuario
    //if(isset($_SESSION['userID'])){
       // $user = get_user_info($con, $_SESSION['userID']);
    //}
    // proceso de login
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        require ('login-process.php');
    }
?>

<!-- registration area -->
<section id="login-form">
    <div class="row m-0">
        <div class="col-lg-4 offset-lg-2">
            <div class="text-center pb-5">
                <h1 class="login-title text-dark">Login - Administrador</h1>
                <span class="font-ubuntu text-black-50">Crear nueva <a href="register.php">cuenta</a></span>
            </div>

            <!-- imagen -->
            <div class="upload-profile-image d-flex justify-content-center pb-5">
                <div class="text-center">
                    <img src="<?php echo isset($user['profileImage']) ? $user['profileImage'] : './assets/profile/beard.png' ; ?>" style="width: 200px; height: 200px" class="img rounded-circle" alt="profile">
                </div>
            </div>

            <!-- formulario -->
            <div class="d-flex justify-content-center">
                <form action="login.php" method="post" enctype="multipart/form-data" id="log-form">
                    <!-- email-->
                    <div class="form-row my-4">
                        <div class="col">
                            <input type="email" required name="email" id="email" class="form-control" placeholder="Email*">
                        </div>
                    </div>

                    <!-- contraseña -->
                    <div class="form-row my-4">
                        <div class="col">
                            <input type="password" required name="password" id="password" class="form-control" placeholder="Contraseña*">
                        </div>
                    </div>

                    <!-- boton login -->
                    <div class="submit-btn text-center my-5">
                        <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Login2</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
<!-- #registration area -->


<?php
// footer.php
include ('footer.php');
?>