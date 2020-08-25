<!--start offer-->
<?php
//En caso se agreguen más marcas
$categoria = array_map(function ($pro){ return $pro['categoria']; }, $product_shuffle);
$unique = array_unique($categoria);
sort($unique);
shuffle($product_shuffle);

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
<section id="offer">
    <div class="container">
        <h4 class="font-rubik font-size-20">Ofertas Especiales</h4>
        <div class="grid">
            <?php array_map(function($item) use($in_cart){ ?>
                <div class="grid-item border <?php echo $item['categoria'] ?? "categoria" ; ?>">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <a href="<?php printf('%s?item_id=%s', 'product.php', $item['item_id']); ?>"><img src="<?php echo $item['imagen']??"./assets/Productos/1.jpg"; ?>" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6><?php echo $item['nombre']??"Desconocido"; ?></h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <td><span><strike>S/<?php echo $item['precio_normal']??'0';?></strike></span></td>
                                    <td><span>S/<?php echo $item['precio_oferta']??'0';?></span></td>
                                </div>
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
                </div>
            <?php },$product_shuffle) ?>
        </div>
    </div>
</section>
<!--end offer-->