<?php

/**
 * Plugin Name: WP Custom WooCommerce Product
 * Plugin URI: http://example.com
 * Description: This is a custom plugin for WooCommerce
 * Version: 1.0
 * Author: Mehedi Hassan Shovo
 * Author URI: http://example.com
 */

 if(!defined("WPINC")) {
    exit;
 }

 function wcp_show_woocommerce_error() {
    echo "<div class='notice notice-error is-dismissible'><p><strong>Please Install and activate WooCommerce Plugin first.</strong></p></div>";
 }

 if(!in_array("woocommerce/woocommerce.php", apply_filters("active_plugins", get_option("active_plugins")))) {
    add_action("admin_notices", "wcp_show_woocommerce_error");
 }

//  add plugin Menu
add_action("admin_menu", "wce_add_menu");

function wce_add_menu() {
    add_menu_page("WooCommerce Product Creator", "WooCommerce Product Creator", "manage_options", "wcp-woocommerce-product-creator", "wcp_add_woocommerce_product_layout", "dashicons-cloud-upload", 8);
}

// add WooCommerce Product Layout
function wcp_add_woocommerce_product_layout() {
    ob_start();
    include_once plugin_dir_path(__FILE__) . "template/add_woocom_product_form.php";
    $template = ob_get_contents();
    ob_end_clean();
    echo $template;
}