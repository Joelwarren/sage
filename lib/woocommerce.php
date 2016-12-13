<?php


add_action( 'init', 'jk_remove_wc_breadcrumbs' );
function jk_remove_wc_breadcrumbs() {
  global $post;
  // general
  remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );

  // shop
  remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
  remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

  // product
  // remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
  add_action( 'woocommerce_before_single_product', 'theme_woocommerce_template_hero_title', 10 );
  add_action( 'woocommerce_single_product_summary', 'theme_woocommerce_template_additional_title', 10 );
  remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
  add_action( 'woocommerce_single_product_summary', 'theme_woocommerce_single_price', 25 );
  add_action( 'woocommerce_single_product_summary', 'theme_bulk_licence_total_calculation', 35 );
  remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
  add_action( 'woocommerce_after_single_product', 'theme_woocommerce_product_faqs', 13 );
  remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
  remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
  remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

}

function theme_bulk_licence_total_calculation() {
  global $product;
  if( has_term('bulk', 'product_tag') ) {
    /* if you are changing this consider changing the values in the javascript */
    $bulk_min_qty = 5;
    $bulk_max_qty = 60;
    $bulk_min_price = 15.95;

    $price = $bulk_min_qty * $bulk_min_price;
    echo '<div class="total"><span class="price price-total">$<span class="price-amount">' . $price . '</span> / per month</a></div>';
  }
}

function theme_woocommerce_single_price() {
  if( ! get_field('hide_woocommerce_price') ) {
    add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 25 );
  }
}

function theme_woocommerce_template_hero_title() {
  ?>
  <?php if( get_field('hero_title') ) { ?><h1 class="product-hero-title text-center"><?php the_field('hero_title'); ?></h1><?php } ?>
  <?php
}
function theme_woocommerce_template_additional_title() {
  ?>
  <?php if( get_field('product_subtitle') ) { ?><h3 class="additional-product-subtitle h4"><?php the_field('product_subtitle'); ?></h3><?php } ?>
  <?php
}

function theme_woocommerce_product_faqs() {
  if( have_rows('questions') ):
  ?>
      </main><!-- .main -->
    </div><!-- .content.row -->
  </div><!-- .container -->
  <div class="product-faqs-section">
    <div class="container">
      <h3 class="faqs-heading">Frequently Asked Questions</h3>
      <div class="product-faq-content">
        <?php while ( have_rows('questions') ) : the_row(); ?>
          <div class="question">
            <h4 class="h5 question-title"><?php the_sub_field('question'); ?></h4>
            <div class="question-answer">
              <?php the_sub_field('answer'); ?>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="content row">
      <main class="main">
  <?php
  endif;
}


/*
add_filter('woocommerce_subscriptions_product_price_string', 'theme_alter_subscription_pricing_string', 10, 3);
function theme_alter_subscription_pricing_string( $subscription_string, $product, $include ) {
  // var_dump( $product );
  if ( $product->subscription_period == 'year' ) {
    $monthly_amount = $product->subscription_price / 12;
    $subscription_string = '<span class="subscription-details">' . wc_price($monthly_amount) . ' per month <small>billed annually</small></span>';
  }
  return $subscription_string;
}
*/

add_filter ('woocommerce_add_to_cart_redirect', 'redirect_to_checkout');
function redirect_to_checkout() {
  global $woocommerce;
  $checkout_url = $woocommerce->cart->get_checkout_url();
  return $checkout_url;
}

add_filter( 'woocommerce_quantity_input_args', 'jk_woocommerce_quantity_input_args', 10, 2 );
function jk_woocommerce_quantity_input_args( $args, $product ) {
	$args['max_value'] = get_field('maximum_quantity', $product->post->ID);
	$args['min_value'] = get_field('minimum_quantity', $product->post->ID);
	return $args;
}

add_filter( 'gettext', 'theme_continue_shopping_button_text', 20, 3 );
function theme_continue_shopping_button_text( $translated_text, $text, $domain ) {

  switch ( $translated_text ) {
    case 'Return To Shop' :
      $translated_text = __( 'Return To Programs', 'theme_text_domain' );
      break;
    case 'Quantity' :
      $translated_text = __( 'Users', 'theme_text_domain' );
      break;
  }

  return $translated_text;
}

add_filter('wc_add_to_cart_message', 'theme_wc_remove_btn_from_alert', 10, 2);
function theme_wc_remove_btn_from_alert( $message, $product_id ) {
  $message = preg_replace('~<a(.*?)</a>~Usi', "", $message);
  return $message;
}


function custom_override_checkout_fields( $fields ) {
  global $post;

  $tags = array( 'bulk' );

  // Products currently in the cart
	$cart_ids = array();

	// Categories currently in the cart
	$cart_tags = array();

	// Find each product in the cart and add it to the $cart_ids array
	foreach( WC()->cart->get_cart() as $cart_item_key => $values ) {
		$cart_product = $values['data'];
		$cart_ids[]   = $cart_product->id;
	}

	// Connect the products in the cart w/ their categories
	foreach( $cart_ids as $id ) {
		$products_tags = get_the_terms( $id, 'product_tag' );
    if ( $products_tags && ! is_wp_error( $products_tags ) ) {
  		// Loop through each product category and add it to our $cart_categories array
  		foreach ( $products_tags as $products_tag ) {
  			$cart_tags[] = $products_tag->slug;
  		}
    }
	}

  if ( empty( array_intersect( $tags, $cart_tags ) ) ) {
    unset($fields['billing']['billing_abn']);
    unset($fields['billing']['domain']);
    unset($fields['billing']['domain_description']);
    unset($fields['billing']['billing_email']['class']);
    $fields['billing']['billing_email']['class'][] = 'form-row-last';
    unset($fields['billing']['billing_phone']['class']);
    $fields['billing']['billing_phone']['class'][] = 'form-row-wide';
  }
  return $fields;
}
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields', 99 );

add_filter( 'woocommerce_cart_item_permalink', 'woocommerce_cart_item_permalink', 10, 3 );
function woocommerce_cart_item_permalink( $link, $cart_item, $cart_item_key ) {
  $link = get_permalink($cart_item['product_id']);
  return $link;
}
