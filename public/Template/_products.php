<!--start product-->
<?php
$item_id = $_GET['item_id'] ?? 1;
foreach ($product->getData() as $item) :
if ($item['item_id'] == $item_id) :
    // request method post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //especificando para que no llame más de una vez
        if (isset($_POST['special_price_submit'])){
            // call method addToCart
            $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
    }
    $in_cart = $Cart->getCartId($product->getData('cart'));
?>

    <?php
    //$base_url = "https://trbshopee.herokuapp.com/";

    $base_url = "http://localhost/trb/TRB-shopee/";
    ?>
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $base_url; ?>admin<?php echo $item['imagen'] ?? "public/assets/Productos/1.jpg" ?>" alt="product" class="img-fluid">
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <!--<div class="col">
                        <button type="submit" class="btn btn-danger form-control">Proceder a la compra</button>
                    </div>-->
                    <div class="col">

                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                            <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                            <?php
                            if (in_array($item['item_id'], $in_cart ?? [])){
                                echo '<button type="submit" disabled class="btn btn-success font-size-12">En el carrito</button>';
                            }else{
                                echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Agregar al carrito</button>';
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?php echo $item['nombre'] ?? "Desconocido"; ?></h5>
                <small>de <?php echo $item['categoria'] ?? "Categoria"; ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14">2 calificaciones</a>
                </div>
                <hr class="m-0">

                <!---start product price  -->
                <table class="my-3">
                    <?php if ($item['precio_oferta'] == $item['precio_normal']): ?>
                        <tr class="font-rale font-size-14">
                            <td>Precio:</td>
                            <td>S/<?php echo $item['precio_normal']??'0';?></td>
                        </tr>

                    <?php else: ?>
                        <tr class="font-rale font-size-14">
                            <td>Precio Normal:</td>
                            <td><span class="color-red"><strike>S/<?php echo $item['precio_normal']??'0';?></strike></span></td>
                        </tr>
                        <tr class="font-rale font-size-14">
                            <td>Precio Oferta:</td>
                            <td class="font-size-16"><span>S/<?php echo $item['precio_oferta']??'0';?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Incluido I.G.V.</small></td>

                        </tr>
                    <?php endif ?>


                </table>
                <!--- end product price -->

                <!-- start policy -->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <!--<div class="font-size-20 my-2 color-second">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">7 días <br>de devolución</a>-->
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck  border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">TRB<br>Delivery</a>
                        </div>
                        <!--<div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">Garantía <br>1 año</a>
                        </div>-->
                    </div>
                </div>
                <!-- end policy -->
                <hr>

                <!-- start order-details -->
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Fecha Delivery: Julio 29  - Agosto 1</small>
                    <!--<small> <a href="#">Daily Electronics </a>(4.5 de 5 | 18,198 ratings)</small>-->
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Delivery a Cliente - 424201</small>
                </div>
                <!-- end order-details -->

                <div class="row">
                    <div class="col-6">
                        <!-- color -->
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Color:</h6>
                                <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                            </div>
                        </div>
                        <!-- !color -->
                    </div>
                    <div class="col-6">
                        <!-- start product qty section -->
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Cant.</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                        <!-- !product qty section -->
                    </div>
                </div>

                <!-- start size -->
                <div class="size my-3">
                    <h6 class="font-baloo">Talla:</h6>
                    <div class="d-flex justify-content-between w-75">
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">0 a 3 meses</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">3 a 6 meses</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">6 a 9 meses</button>
                        </div>
                    </div>
                </div>
                <!--end size -->

            </div>
            <div class="col-12 my-3">

                <h6 class="font-rubik">Descripción del Producto</h6>
                <hr>
                <h5 class="font-baloo font-size-20"><?php echo $item['descripcion'] ?? "Desconocido"; ?></h5>

            </div>

        </div>
    </div>

</section>
<!--end product-->
<?php
endif;
endforeach;
?>