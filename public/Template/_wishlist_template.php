<!-- start Wishlist section  -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['delete-cart-submit'])){
        $deletedrecord = $Cart->deleteCart($_POST['item_id']);
    }

    if(isset($_POST['cart-submit'])){
        $Cart->saveForLater($_POST['item_id'], 'cart', 'wishlist');
    }
}
?>

<section id="cart" class="py-3 mb-5">


    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Lista de Deseos</h5>

        <!--  shopping cart items   -->
        <div class="row">
            <div class="col-sm-9">
                <?php

                //var_dump($product->getData('wishlist'));

                foreach ($product->getData('wishlist') as $item) :
                    //var_dump($product->getProduct($item['item_id']));
                    $cart = $product->getProduct($item['item_id']);
                    $subTotal[] = array_map(function ($item){
                        ?>
                        <!-- start cart item -->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="https://trbshopee.herokuapp.com/admin<?php echo $item['imagen'] ?? "public/assets/Productos/1.jpeg" ?>" style="height: 120px;" alt="cart1" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20"><?php echo $item['nombre'] ?? "Desconocido"; ?></h5>
                                <small>de <?php echo $item['categoria'] ?? "categoria"; ?></small>
                                <!-- start product rating -->
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
                                </div>
                                <!-- end product rating-->

                                <!-- start product qty -->
                                <div class="qty d-flex pt-2">
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                        <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger pl-0 pr-3 border-right">Eliminar</button>
                                    </form>

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                        <button type="submit" name="cart-submit" class="btn font-baloo text-danger">Agregar al carrito</button>
                                    </form>
                                </div>
                                <!-- end product qty -->
                            </div>
                            <div class="col-sm-2 text-right">
                                <div class="font-size-20 text-danger font-baloo">
                                    S/<span class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['precio_normal'] ?? 0; ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- end cart item -->
                        <?php
                        return $item['precio_oferta'];
                    }, $cart); // closing array_map function
                endforeach;
                ?>
            </div>
        </div>
        <!--  !shopping cart items   -->
    </div>
</section>
<!-- end Shopping cart section  -->
