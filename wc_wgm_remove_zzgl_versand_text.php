<?php

// Zuzüglich Versand das von German Market erzeugt wird entfernen.
add_filter( 'wgm_product_summary_parts_after', function( $output_parts, $product, $hook ) {

    if ( isset( $output_parts[ 'shipping' ]  ) ) {
        unset( $output_parts[ 'shipping' ] );
    }

    return $output_parts;

}, 10, 3 );

?>
