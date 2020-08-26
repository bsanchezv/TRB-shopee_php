<?php

$error = array();

// validadr email y contraseña
$email = validate_input_email($_POST['email']);
if (empty($email)){
    $error[] = "complete este campo";
}

$password = validate_input_text($_POST['password']);
if (empty($password)){
    $error[] = "complete este campo";
}

if(empty($error)){
    // consulta SQL

    $query = "SELECT user_id, first_name, last_name, email, password, profileImage FROM administrador WHERE email='$email'";


    include ('../database/dbconect.php');

    $resultadoAdmi=mysqli_query($con,$query);
    $administrador=mysqli_fetch_assoc($resultadoAdmi);

    $admiID=$administrador['user_id'];

    if (!empty($administrador)){
        // verify password

        header("location: ../admin/ver_catalogo.php?id=$admiID");

        /*if(password_verify($password, $administrador['password'])){

            header("location: ../admin/ver_catalogo.php?id=$admiID");
            exit();
        }*/
    }else{
        echo "Email o password incorrecto";
    }

}else{
    echo "por favor ingrese su email y contraseña!";
}
