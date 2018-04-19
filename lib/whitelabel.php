<?php

add_action('login_head', 'theme_login_logo');
/*
* Custom login page logo
*/
function theme_login_logo() {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

    echo '<style type="text/css">
          body.login { background: #000; }
          .login h1 a {
          background-image:url(' . $image[0] . ') !important;
          background-size: contain !important;
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
