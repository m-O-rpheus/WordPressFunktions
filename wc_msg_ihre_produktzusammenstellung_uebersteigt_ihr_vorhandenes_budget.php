<?php

    add_filter( 'woocommerce_no_available_payment_methods_message', function() {

        return __( "Unfortunately there don't seem to be any payment methods available. Mistake: Your product mix exceeds your existing budget. Please contact us if you need assistance or would like to make other arrangements as this may be due to your current wallet's exhausted budget.", 'woocommerce' );
    
    }, 10, 0 );

?>
