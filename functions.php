<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
    'lib/assets.php',    // Scripts and stylesheets
    'lib/extras.php',    // Custom functions
    'lib/setup.php',     // Theme setup
    'lib/titles.php',    // Page titles
    'lib/whitelabel.php',
    'lib/navwalker.php',
    'lib/pagination.php'
];

// only load specific functionality if plugin is active
if ( class_exists( 'WooCommerce' ) ) {
    $sage_includes[] = 'lib/woocommerce.php';
}

// only load specific functionality if plugin is active
if ( class_exists( 'GFForms' ) ) {
$s  age_includes[] = 'lib/gravity-forms.php';
}

foreach ($sage_includes as $file) {
    if (!$filepath = locate_template($file)) {
        trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
    }

    require_once $filepath;
}
unset($file, $filepath);
