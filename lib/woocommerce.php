<?php

namespace Roots\Sage\WooCommerce;

use Roots\Sage\Assets;

// All woocommerce related functionality should exist in this file
add_theme_support('woocommerce');
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

/**
 * Theme assets
 */
function assets() {
  wp_enqueue_style('sage/css/woocommerce', Assets\asset_path('styles/woocommerce.css'), false, null);
}
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);


remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper',       10 );
remove_action( 'woocommerce_after_main_content',  'woocommerce_output_content_wrapper_end',   10 );
add_action( 'woocommerce_before_main_content', __NAMESPACE__ . '\\sage_output_content_wrapper',       10 );
add_action( 'woocommerce_before_main_content', __NAMESPACE__ . '\\sage_output_content_wrapper_inner',       11 );
add_action( 'woocommerce_after_main_content',  __NAMESPACE__ . '\\sage_output_content_wrapper_inner_end',   1 );
add_action( 'woocommerce_sidebar',  __NAMESPACE__ . '\\sage_output_content_wrapper_end',   20 );
function sage_output_content_wrapper() {
  echo '<div class="shop container section"><div class="row">';
}
function sage_output_content_wrapper_inner() {
  echo '<main class="main">';
}
function sage_output_content_wrapper_inner_end() {
  echo '</main>';
}
function sage_output_content_wrapper_end() {
  echo '</div></div>';
}


remove_action( 'woocommerce_after_shop_loop',     'woocommerce_pagination',                   10 );
remove_action( 'woocommerce_before_shop_loop',    'woocommerce_result_count',                 20 );
remove_action( 'woocommerce_before_shop_loop',    'woocommerce_catalog_ordering',             30 );

add_action( 'woocommerce_before_shop_loop',       __NAMESPACE__ . '\\sage_sorting_wrapper',               9 );
add_action( 'woocommerce_before_shop_loop',       'woocommerce_catalog_ordering',             10 );
add_action( 'woocommerce_before_shop_loop',       'woocommerce_result_count',                 20 );
add_action( 'woocommerce_before_shop_loop',       'woocommerce_pagination',        30 );
add_action( 'woocommerce_before_shop_loop',       __NAMESPACE__ . '\\sage_sorting_wrapper_close',         31 );

add_action( 'woocommerce_after_shop_loop',        __NAMESPACE__ . '\\sage_sorting_wrapper',               9 );
add_action( 'woocommerce_after_shop_loop',        'woocommerce_catalog_ordering',             10 );
add_action( 'woocommerce_after_shop_loop',        'woocommerce_result_count',                 20 );
add_action( 'woocommerce_after_shop_loop',        'woocommerce_pagination',                   30 );
add_action( 'woocommerce_after_shop_loop',        __NAMESPACE__ . '\\sage_sorting_wrapper_close',         31 );


function sage_sorting_wrapper() {
  echo '<div class="woocommerce-sorting"><div class="row align-items-center">';
}


function sage_sorting_wrapper_close() {
  echo '</div></div>';
}
