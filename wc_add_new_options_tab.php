<?php



    // Neuen Einstellungs Tab unter den WooCommerce Einstellungen anlegen
    function mj_custom_options_field_page() {

        $settings = array();

        $settings['mj_custom_options_field_title'] = array(
            'name' => __('Titel', 'mj_custom_options_field' ),
            'type' => 'title',
            'desc' => __( 'Lorem Ipsum', 'mj_custom_options_field' ),
            'id'   => 'wc_settings_mj_custom_options_field_title',
        );

        $settings['mj_custom_options_field_area'] = array(
            'name' => __( 'Name des Eingabefeldes', 'mj_custom_options_field' ),
            'type' => 'textarea',
            'id'   => 'wc_settings_mj_custom_options_field_area',
        );

        $settings['mj_custom_options_field_section_end'] = array(
            'type' => 'sectionend',
            'id'   => 'wc_settings_mj_custom_options_field_section_end',
        );

        return apply_filters('wc_mj_custom_options_field_settings', $settings);
    }


    add_filter('woocommerce_settings_tabs_array', function ( $settings_tabs ) {

        $settings_tabs['mj_custom_options_field'] = __( 'Produkt Freitextfeld', 'mj_custom_options_field' );

        return $settings_tabs;

    }, 50);


    add_action('woocommerce_settings_tabs_mj_custom_options_field', function () {
        woocommerce_admin_fields(mj_custom_options_field_page());
    });


    add_action('woocommerce_update_options_mj_custom_options_field', function () {
        woocommerce_update_options(mj_custom_options_field_page());
    });



?>
