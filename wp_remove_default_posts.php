<?php

// Entferne "Beiträge" aus dem Adminmenu 
add_action( 'admin_menu', function() { remove_menu_page( 'edit.php' ); });

?>
