<?php


//wp-config.php
    define('FORCE_SSL', true);



//functions.php
    add_action('send_headers', function() {
        header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');
    });


?>
