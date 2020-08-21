<?php

require ('ayuda.php');
// error variable.
$error = array();

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
$imagen = upload_image('./imgproductos/', $files);

if(empty($error)){

    //require ('conect.php');
    $oferta=$Precio_prod*(100-$Tasa_Descuento)/100;
    // query
    $query = "INSERT INTO productos(categoria,nombre,precio_normal,descuento,precio_oferta, talla,descripcion,color ,imagen,stock,stock_min, fecha_registro )
                VALUES('$categoriaProducto','$nombreProducto','$Precio_prod','$Tasa_Descuento','$oferta','$tallaProducto','$Descripcion','$coloresProducto','$imagen','0', '$stockmin', NOW())";

    $con = mysqli_connect("localhost","root","","register_db");

   $resultado=mysqli_query($con,$query);

    header('location: ver_catalogo.php');

    $con->close();
}else{
    echo 'NO VALIDO';
}





