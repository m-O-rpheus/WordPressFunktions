<?php


// wp-config.php
    define('FORCE_SSL', true);



// entweder functions.php - Betrifft nicht alle Dateien z.B. keine Bilder.
    add_action('send_headers', function() {
        header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');
    });


// oder htaccess - Betrifft alle Dateien inkl. Bilder.
    <IfModule mod_headers.c>
        Header set Strict-Transport-Security "max-age=31536000; includeSubDomains; preload"
    </IfModule>


?>
