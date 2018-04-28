<?php

add_action('login_head', 'theme_login_logo');
/*
* Custom login page logo
*/
function theme_login_logo() {
<<<<<<< HEAD
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

    echo '<style type="text/css">
          body.login { background: #000; }
          .login h1 a {
          background-image:url(' . $image[0] . ') !important;
          background-size: contain !important;
=======
    $admin_logo = ( get_theme_mod('admin_login_logo') != '' ? get_theme_mod('admin_login_logo') : get_stylesheet_directory_uri() . '/dist/images/login-logo.png' );

    echo '<style type="text/css">
          .login h1 a {
          background-image:url(' . $admin_logo . ') !important;
          background-size: 320px 80px !important;
>>>>>>> 0f500ccbf3c1af6623e0ebf60508c419b54619a1
          width: 320px !important; height: 80px !important; }
          </style>';
}

add_filter( 'login_headerurl', 'theme_change_login_page_url' );
/*
* Custom login logo link to homepage
*/
function theme_change_login_page_url( $url ) {
    return home_url();
}
