<!-- start Shopping cart section  -->
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Carrito de Compras</h5>

        <!--  shopping cart items   -->
        <div class="row">
            <div class="col-sm-9">
                <!-- start cart item -->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">
                        <img src="./assets/productos/1.jpg" style="height: 120px;" alt="cart1" class="img-fluid">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="font-baloo font-size-20">Producto1</h5>
                        <small>de Marca1</small>
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
                            <div class="d-flex font-rale w-25">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="pro1" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                            <button type="submit" class="btn font-baloo text-danger px-3 border-right">Eliminar</button>
                            <button type="submit" class="btn font-baloo text-danger">Guardar</button>
                        </div>
                        <!-- end product qty -->
                    </div>
                    <div class="col-sm-2 text-right">
                        <div class="font-size-20 text-danger font-baloo">
                            S/<span class="product_price">17</span>
                        </div>
                    </div>
                </div>
                <!-- end cart item -->

                <!-- start cart item -->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">
                        <img src="./assets/Productos/3.jpg" style="height: 120px;" alt="cart1" class="img-fluid">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="font-baloo font-size-20">Producto 3</h5>
                        <small>de Marca2</small>
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
                            <div class="d-flex font-rale w-25">
                                <button class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                                <input type="text" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                <button class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                            <button type="submit" class="btn font-baloo text-danger px-3 border-right">Eliminar</button>
                            <button type="submit" class="btn font-baloo text-danger">Guardar</button>
                        </div>
                        <!-- end product qty -->
                    </div>

                    <div class="col-sm-2 text-right">
                        <div class="font-size-20 text-danger font-baloo">
                            S/<span class="product_price">20</span>
                        </div>
                    </div>
                </div>
                <!-- end cart item -->
            </div>
            <!-- start subtotal section-->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Pedido con delivery gratuito</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Subtotal (2 item):&nbsp; <span class="text-danger">S/<span class="text-danger" id="deal-price">100.00</span> </span> </h5>
                        <button type="submit" class="btn btn-warning mt-3">Comprar</button>
                    </div>
                </div>
            </div>
            <!-- end subtotal section-->
        </div>
        <!--  !shopping cart items   -->
    </div>
</section>
<!-- end Shopping cart section  -->