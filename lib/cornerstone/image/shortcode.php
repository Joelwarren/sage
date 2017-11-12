<?php

/**
 * Shortcode handler
 */

$id    = ( $id    != '' ) ? 'id="' . esc_attr( $id ) . '"' : '';
$class = ( $class != '' ) ? 'custom-image ' . esc_attr( $class ) : 'custom-image';
$style = ( $style != '' ) ? 'style="' . $color . $style . '"' : 'style="' . $color . '"';
$target = ( $target != '' ) ? 'target="_blank"' : '';

if ( $link != '' ) {
  $output = "<a {$id} href=\"{$link}\" {$target}><img class=\"{$class} {$img_class}\" {$style} src=\"{$image}\" {$alt}></a>";
} else {
  $output = "<img {$id} class=\"{$class} {$img_class}\" {$style} src=\"{$image}\" {$alt}>";
}

echo $output;
