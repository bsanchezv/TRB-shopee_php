<?php
require('headside.php');
?>

    <!--Cuerpo-->

    <div class="page">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="panel-body">
                        <strong>
                            <span> DETALLE VENTA </span>
                        </strong>
                        <div class="panel panel-defaul" >

                            <div class="panel-body" >
                                <!--
                                <div class="d-flex justify-content-center">
                                    <img src="assets/boleta.jpg" width="500">
                                </div>-->
                                <object data="assets/boleta.pdf" type="application/pdf" width="800" height="700">

                                    <p>Tu navegador no tiene el plugin para previsualizar documentos pdf.</p>
                                    <p>Puedes descargarte el archivo desde <a href="myfile.pdf">aquí</a></p>

                                </object>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>





    <!--Class bootstrap-->

<?php
require('footeradmin.php');
?>