    // Hinzufügen eines Links in die WooCommerce Orders Tabelle!
    add_filter('manage_edit-shop_order_columns', function( $columns ) {

        return array_merge( $columns, [ 'mj_custom_field' => __('Meine Spalte', 'mj_custom_field') ] );

    }, 10, 1 );

    add_action('manage_shop_order_posts_custom_column', function( $column_key, $post_id ) {

        if ( $column_key === 'mj_custom_field' ) {

            echo '<a href="#" target="_blank">Custom Link: ' . $post_id . '</a>';
        }

    }, 10, 2 );
