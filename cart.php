<?php
ob_start();
//Include header.php file
include('header.php');
?>

<?php

//Include _cart-template if it is not empty. (if)
count($product->getData('cart')) ? include ('Template/_cart-template.php') :  include ('Template/notFound/_cart_notFound.php');


//Include _wishlist_template file if it is not empty. (if)
count($product->getData('wishlist')) ? include ('Template/_wishlist_template.php') :  include ('Template/notFound/_wishlist_notFound.php');

//Include _new-products file
include('Template/_new-products.php');


?>
    <!-- Blog
    <section id="blogs">
      <div class="container py-4">
        <h4 class="font-rubik font-size-20">Últimos Blogs</h4>
        <hr>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <div class="card border-0 font-rale mr-5" style="width: 18rem;">
              <h5 class="card-title font-size-16">Nombre blog1</h5>
              <img src="./assets/blog/blog1.jpg" alt="cart image" class="card-img-top">
              <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis non iste sequi cupiditate tempora iure. Velit accusamus saepe harum sed.</p>
              <a href="#" class="color-second text-left">Ir a blog1</a>
            </div>
          </div>
          <div class="item">
            <div class="card border-0 font-rale mr-5" style="width: 18rem;">
              <h5 class="card-title font-size-16">Nombre blog2</h5>
              <img src="./assets/blog/blog2.jpg" alt="cart image" class="card-img-top">
              <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis non iste sequi cupiditate tempora iure. Velit accusamus saepe harum sed.</p>
              <a href="#" class="color-second text-left">Ir a blog2</a>
            </div>
          </div>
          <div class="item">
            <div class="card border-0 font-rale mr-5" style="width: 18rem;">
              <h5 class="card-title font-size-16">Nombre blog3</h5>
              <img src="./assets/blog/blog3.jpg" alt="cart image" class="card-img-top">
              <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis non iste sequi cupiditate tempora iure. Velit accusamus saepe harum sed.</p>
              <a href="#" class="color-second text-left">Ir a blog3</a>
            </div>
          </div>

        </div>
      </div>
    </section>
    end Blog-->

<?php
//Include footer.php file
include('footer.php');
?>