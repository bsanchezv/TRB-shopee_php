<?php

require ('ayuda.php');

// error variable.
$error = array();

$item_id = $_GET['item_id'] ;
$nombreProducto = validate_input_text($_POST['nombreProducto']);
if (empty($nombreProducto)){
    $error[] = "Debes llenar el campo de Nombre";
}

$Descripcion = validate_input_text($_POST['Descripcion']);
if (empty($Descripcion)){
    $error[] = "Debes llenar el campo de Descripcion";
}
$Precio_prod = $_POST['Precio_prod'];
$Tasa_Descuento = $_POST['Tasa_Descuento'];
$stockmin = $_POST['stockmin'];
$categoriaProducto = $_POST['categoriaProducto'];
$tallaProducto = $_POST['tallaProducto'];
$coloresProducto = $_POST['coloresProducto'];

$files = $_FILES['imagenProducto'];
$imagen = upload_image('/imgproductos/', $files);



if(empty($error)){

    require('../database/dbconect.php');
    $oferta=$Precio_prod*(100-$Tasa_Descuento)/100;
    // query
    $query = "UPDATE productos SET categoria='$categoriaProducto',nombre='$nombreProducto',precio_normal='$Precio_prod',descuento='$Tasa_Descuento',
            precio_oferta='$oferta', talla='$tallaProducto',descripcion='$Descripcion',color='$coloresProducto',
            imagen='$imagen',stock_min='$stockmin', fecha_registro= NOW() WHERE item_id='$item_id'";

    $resultado=mysqli_query($con,$query);

    header('location: ver_catalogo.php');

    $con->close();
}else{
    echo 'NO VALIDO';
}