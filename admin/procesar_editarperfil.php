<?php

require('ayuda.php');
// error variable.
$error = array();

$admiID = $_GET['id'] ;
$nombreAdmi = validate_input_text($_POST['nombreAdmi']);
if (empty($nombreAdmi)){
    $error[] = "Debes llenar el campo de Nombre";
}

$apellidoAdmi = validate_input_text($_POST['apellidoAdmi']);
if (empty($apellidoAdmi)){
    $error[] = "Debes llenar el campo de Apellido";
}

$email = validate_input_text($_POST['emailAdmi']);
if (empty($email)){
    $error[] = "Debes llenar el campo de email";
}

$files = $_FILES['imagen'];
//CAMBIAR DIRECCION, SOLO PUEDE SER EN UNA LAS IMAGENES
$imagen = upload_image('./register/register-admi/assets/profile/', $files);


if(empty($error)){
    // query
    require('../database/dbconect.php');
    $query = "UPDATE administrador SET first_name='$nombreAdmi',last_name='$apellidoAdmi',email='$email', profileImage='$imagen' WHERE user_id='$admiID'";

    $resultado=mysqli_query($con,$query);

    header("location: perfil.php?id=$admiID");

    $con->close();
}else{

    echo 'NO VALIDO';
}
