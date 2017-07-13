<?php

// All woocommerce related functionality should exist in this file
add_theme_support('woocommerce');

add_filter('sage/display_sidebar', 'shop_sidebar');
function shop_sidebar($display) {
  if( is_shop() ) {
    return true;
  }
  return $display;
}
