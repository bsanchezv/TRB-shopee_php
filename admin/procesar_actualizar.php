
<?php

require ('ayuda.php');
require('../database/dbconect.php');
// error variable.
$error = array();
$id_admin = $_GET['id'];
$item_id = $_GET['item_id'] ;
$agregar = $_POST['agregar'];

$actualizar = "SELECT * FROM productos WHERE item_id= '$item_id'";

$resultado2=mysqli_query($con,$actualizar);
$product=mysqli_fetch_assoc($resultado2);

$stock=$product['stock'];
$stock=$stock+$agregar;

if(empty($error)){

    //actualizar stock
    $query = "UPDATE productos SET stock='$stock'  WHERE item_id='$item_id'";

    $resultado=mysqli_query($con,$query);

    header("location: registrar_entrada.php?id=$id_admin");

    $con->close();
}else{
    echo 'NO VALIDO';
}