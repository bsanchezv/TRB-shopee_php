<?php
    include ('../database/dbconect.php');
    $id_admin = $_GET['id'];
    $item_id=$_GET['item_id'];
    $pass=$_POST['pass'];

    if ($pass=="borrar"){


        $query3 = "DELETE FROM productos WHERE item_id='$item_id'";

        $resultado3=mysqli_query($con,$query3);

        header("location: ver_catalogo.php?id=$id_admin");

        $con->close();


    }else{
        echo "CODIGO DE ELIMINACION INCORRECTA";
    }


?>