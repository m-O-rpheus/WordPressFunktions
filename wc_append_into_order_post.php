<?php


    // Hinzufügen einer Meta Box unter einer Bestellung
    add_action( 'add_meta_boxes', function() {

        add_meta_box( 'mj_custom_field_metabox', __('Meine Spalte', 'mj_custom_field'), 'mj_custom_field_metabox_append', 'shop_order', 'side', 'high' );
    }, 10, 0 );

    function mj_custom_field_metabox_append() {

        global $post;

        echo '<a href="#" target="_blank">Custom Link: ' . $post->ID . '</a>';
    }


?>
