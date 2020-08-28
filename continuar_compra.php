<?php
ob_start();
//Include header.php file
include('header.php');
?>
<!-- registration area -->

    <div class="row m-0 container">
        <div class="col-lg-4 offset-lg-2">
            <div class="text-center pb-5">
                <h5 class="font-baloo font-size-20">Realizar pago</h5>
            </div>
        </div>
    </div>

<div class="con">

    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="9FD5KRDDS659U">
        <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
    </form>

</div>
<div class="border-top py-4">
    <a href="public/comprobantePDF.php?user_id=<?php echo 1; ?>">Ver comprobante</a>
</div>