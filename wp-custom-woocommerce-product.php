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

//  add plugin Menu
add_action("admin_menu", "wce_add_menu");

function wce_add_menu() {
    add_menu_page("WooCommerce Product Creator", "WooCommerce Product Creator", "manage_options", "wcp-woocommerce-product-creator", "wcp_add_woocommerce_product_layout", "dashicons-cloud-upload", 8);
}

// add WooCommerce Product Layout
function wcp_add_woocommerce_product_layout() {
    echo "<h3>add WooCommerce Product</h3>";
}