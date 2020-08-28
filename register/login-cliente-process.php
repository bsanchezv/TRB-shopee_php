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
    include ('../database/dbconect.php');
    $query = "SELECT user_id, first_name, last_name, email, password, profileImage FROM user WHERE email='$email'";

    $resultadoCliente=mysqli_query($con,$query);
    $cliente=mysqli_fetch_assoc($resultadoCliente);

    $clienteID=$cliente['user_id'];

    if (!empty($cliente)){
        // verify password
        header("location: http://localhost/trb/TRB-shopee/continuar_compra.php?id=$clienteID");
        /*
        if(password_verify($password, $cliente['password'])){
            header("location: ../index.php?id=$clienteID");
            exit();
        }*/
    }else{
        print "Email o password incorrecto";
    }

}else{
    echo "por favor ingrese su email y contraseña!";
}
