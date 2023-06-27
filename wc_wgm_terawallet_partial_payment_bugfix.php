<?php

// WooCommerce - German Market - TeraWallet partial payment - In Koombination mit PayPal - Bugfix



// 1. WooCommerce -> Einstellungen -> Mehrwertsteuer -> Standard Raten:
// Mehrwertsteuer für alle Länder auf 0% MwSt umstellen

// 2. Setze alle Texte die jetzt 'Enthält 0% MwSt.' enthalten, wieder zurück auf 19% indem folgendes script in die functions.php eingefügt wird.



$GLOBALS['fyff_tax_text'] = 'Enthält 19% MwSt.';


// Change German Market Tax in ArchiveProductGrid and SingleProductPage
add_filter( 'wgm_product_summary_parts_after', function( $output ) {

    if ( isset( $output['tax'] ) && is_string( $output['tax'] ) ) {

        $output['tax'] = '<div class="wgm-info woocommerce-de_price_taxrate fyff_tax_text">' . $GLOBALS['fyff_tax_text'] . '</div>';
    }

    return $output;

}, 10, 1 );


// Change German Market Tax in Cart Collaterals
add_filter( 'wgm_get_totals_tax_string', function( $output ) {

    $output = '<span class="wgm-tax includes_tax fyff_tax_text">' . $GLOBALS['fyff_tax_text'] . '</span>';

    return $output;

}, 10, 1 );


// Change German Market Tax in Cart Item
add_filter( 'german_market_cart_tax_string', function( $output ) {

    $output = '<span class="fyff_tax_text">' . $GLOBALS['fyff_tax_text'] . '</span>';

    return $output;

}, 10, 1 );



?>
