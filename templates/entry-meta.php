<time class="updated" datetime="<?php echo get_post_time('c', true); ?>"><?php echo get_the_date(); ?></time>
<span class="byline author vcard"><?php echo __('By', 'sage'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a></span>
<?php
$categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'sage' ) );
if ( $categories_list ) {
  echo '<span class="entry-cats">Categories ' . $categories_list . '</span>';
}
?>
<?php
$tags_list = get_the_tag_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'sage' ) );
if ( $categories_list ) {
  echo '<span class="entry-tags">Tags ' . $categories_list . '</span>';
}
?>
