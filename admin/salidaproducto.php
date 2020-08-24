<?php
require('headside.php');
?>

    <div class="page">
        <div class="container-fluid">
            <div class="row">
                <div class="alert alert-success" role="alert">Agregado Exitosamente</div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel-body">
                        <div class="panel panel-defaul">
                            <div class="panel-heading">
                                <strong>

                                    <span> VENTAS </span>
                                </strong>
                                <div class="pull-right">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" >
                                        <span>Ordenar Por</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Fecha</a></li>
                                        <li><a href="#">Mes</a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 50px;">#</th>
                                            <th class="text-center" style="width: 18%;"> Nombre  </th>
                                            <th class="text-center" style="width: 10%;"> Cantidad</th>
                                            <th class="text-center" style="width: 10%;"> P. Unit.</th>
                                            <th class="text-center" style="width: 10%;"> Total</th>
                                            <th class="text-center" style="width: 30%;"> Destino </th>
                                            <th class="text-center" style="width: 10%;"> Fecha </th>
                                            <th class="text-center" style="width: 100px;"> Detalle </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class="text-center" ">1</th>
                                            <th> Producto 1  </th>
                                            <th class="text-center" "> 5</th>
                                            <th class="text-center" "> S/10</th>
                                            <th class="text-center" > S/100</th>
                                            <th class="text-center" > Lima,Surco, Jr Ica 123 </th>
                                            <th class="text-center""> 04/08/2020 </th>
                                            <th class="text-center" "> <a href="detalleventa.php"><img src="assets/iconos/verdetalle.png" width="20" title="Ver Detalle"></a> </th>

                                        </tr>
                                        <tr>
                                            <th class="text-center" ">2</th>
                                            <th> Producto 2  </th>
                                            <th class="text-center" "> 7</th>
                                            <th class="text-center" "> S/20</th>
                                            <th class="text-center" > S/140</th>
                                            <th class="text-center" > Lima,Lince, Jr Canta 100 </th>
                                            <th class="text-center""> 02/08/2020 </th>
                                            <th class="text-center" "> <a href="detalleventa.php"><img src="assets/iconos/verdetalle.png" width="20" title="Ver Detalle"></a> </th>

                                        </tr>
                                        <tr>
                                            <th class="text-center" ">3</th>
                                            <th> Producto 3  </th>
                                            <th class="text-center" "> 10</th>
                                            <th class="text-center" "> S/30</th>
                                            <th class="text-center" > S/300</th>
                                            <th class="text-center" > Lima,Lima, Jr Nicolas 1414 </th>
                                            <th class="text-center""> 01/08/2020 </th>
                                            <th class="text-center" "> <a href="detalleventa.php"><img src="assets/iconos/verdetalle.png" width="20" title="Ver Detalle"></a> </th>

                                        </tr>
                                        <tr>
                                            <th class="text-center" ">4</th>
                                            <th> Producto 4  </th>
                                            <th class="text-center" "> 2</th>
                                            <th class="text-center" "> S/20</th>
                                            <th class="text-center" > S/40</th>
                                            <th class="text-center" > Lima,San Luis, Jr Rosa 10 </th>
                                            <th class="text-center""> 30/07/2020 </th>
                                            <th class="text-center" "> <a href="detalleventa.php"><img src="assets/iconos/verdetalle.png" width="20" title="Ver Detalle"></a> </th>

                                        </tr>
                                        <tr>
                                            <th class="text-center" ">5</th>
                                            <th> Producto 8  </th>
                                            <th class="text-center" "> 5</th>
                                            <th class="text-center" "> S/12</th>
                                            <th class="text-center" > S/60</th>
                                            <th class="text-center" > Lima,Comas, Jr Lomas 100 </th>
                                            <th class="text-center""> 27/07/2020 </th>
                                            <th class="text-center" "> <a href="detalleventa.php"><img src="assets/iconos/verdetalle.png" width="20" title="Ver Detalle"></a> </th>

                                        </tr>
                                        <tr>
                                            <th class="text-center" ">6</th>
                                            <th> Producto 3  </th>
                                            <th class="text-center" "> 4</th>
                                            <th class="text-center" "> S/15</th>
                                            <th class="text-center" > S/60</th>
                                            <th class="text-center" > Lima,Surco, Av Principal 321 </th>
                                            <th class="text-center""> 26/08/2020 </th>
                                            <th class="text-center" "> <a href="detalleventa.php"><img src="assets/iconos/verdetalle.png" width="20" title="Ver Detalle"></a> </th>

                                        </tr>
                                        <tr>
                                            <th class="text-center" ">7</th>
                                            <th> Producto 15  </th>
                                            <th class="text-center" "> 5</th>
                                            <th class="text-center" "> S/10</th>
                                            <th class="text-center" > S/50</th>
                                            <th class="text-center" > Lima,Santa Anita Jr Pedro 510 </th>
                                            <th class="text-center""> 04/08/2020 </th>
                                            <th class="text-center" "> <a href="detalleventa.php"><img src="assets/iconos/verdetalle.png" width="20" title="Ver Detalle"></a> </th>

                                        </tr>
                                        <tr>
                                            <th class="text-center" ">8</th>
                                            <th> Producto 12  </th>
                                            <th class="text-center" "> 5</th>
                                            <th class="text-center" "> S/11</th>
                                            <th class="text-center" > S/55</th>
                                            <th class="text-center" > Lima,La Victoria Av Mexico 1550</th>
                                            <th class="text-center""> 04/08/2020 </th>
                                            <th class="text-center" "> <a href="detalleventa.php"><img src="assets/iconos/verdetalle.png" width="20" title="Ver Detalle"></a> </th>

                                        </tr>
                                        <tr>
                                            <th class="text-center" ">9</th>
                                            <th> Producto 24  </th>
                                            <th class="text-center" "> 4</th>
                                            <th class="text-center" "> S/12</th>
                                            <th class="text-center" > S/48</th>
                                            <th class="text-center" > Lima,El Agustino Av Rivaguero 100 </th>
                                            <th class="text-center""> 04/08/2020 </th>
                                            <th class="text-center" "> <a href="detalleventa.php"><img src="assets/iconos/verdetalle.png" width="20" title="Ver Detalle"></a> </th>

                                        </tr>
                                    </tbody>



                                </table>
                            </div>


                        </div>
                    </div>
                </div>

            </div>



        </div>
    </div>








    <!--Carrusel admin-->


    <!--Class bootstrap-->
<?php
require('footeradmin.php');
?>