<?php


    // WooCommerce Frontend -> Mein Account -> Bestellungen - Neue Spalte zur Tabelle hinzufügen!
    add_filter( 'woocommerce_my_account_my_orders_columns', function ( $columns ) {

        $columns['mj-custom-column'] = __('NeueSpalte', 'mj_invoice');
    
        return $columns;

    }, 10, 1 );

    add_action( 'woocommerce_my_account_my_orders_column_mj-custom-column', function ( $order ) {

        echo "gebe was aus " . $order->get_id();
        
    }, 10, 2 );


?>
