
<?php  
    
    
    // SKU in der Cart und der Checkout Seite
    add_filter( 'woocommerce_cart_item_name', function( $item_name, $cart_item, $cart_item_key ) {

        $product = $cart_item['data'];

        if( !empty( $product->get_sku() ) ) {

            $item_name = '<p class="mj_sku"><small>SKU: ' . $product->get_sku() . '</small></p>' . $item_name;
        }

        return $item_name;

    }, 10, 3 );

    
?>
