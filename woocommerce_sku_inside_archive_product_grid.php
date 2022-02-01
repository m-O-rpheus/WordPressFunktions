<?php  
    
    
    // SKU im Archive Product Grid
    add_action( 'woocommerce_after_shop_loop_item_title', function () {

        global $product;
        echo '<p class="mj_sku"><small>SKU: ' . $product->get_sku() . '</small></p>';

    }, 20, 0 );
    
    
?>
