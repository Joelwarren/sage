<?php
if (post_password_required()) {
  return;
}
?>

<section id="comments" class="comments">
  <?php if (have_comments()) : ?>
    <h2><?php printf(_nx('One response to &ldquo;%2$s&rdquo;', '%1$s responses to &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'sage'), number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>'); ?></h2>

    <ol class="comment-list">
      <?php wp_list_comments(['style' => 'ol', 'short_ping' => true, 'avatar_size' => 72]); ?>
    </ol>

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
      <nav>
        <ul class="pager">
          <?php if (get_previous_comments_link()) : ?>
            <li class="previous"><?php previous_comments_link(__('&larr; Older comments', 'sage')); ?></li>
          <?php endif; ?>
          <?php if (get_next_comments_link()) : ?>
            <li class="next"><?php next_comments_link(__('Newer comments &rarr;', 'sage')); ?></li>
          <?php endif; ?>
        </ul>
      </nav>
    <?php endif; ?>
  <?php endif; // have_comments() ?>

  <?php if (!comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments')) : ?>
    <div class="alert alert-warning">
      <?php _e('Comments are closed.', 'sage'); ?>
    </div>
  <?php endif; ?>


  <?php
  	$custom_comment_form = array(
  		'fields' => apply_filters( 'comment_form_default_fields', array(
  		    'author' => '<div class="row"><div class="form-group col-sm-6 name-field">
  						<label for="author">Your Name</label>
  		    			 <input class="form-control" type="text" id="author" name="author" value="' . esc_attr( $commenter['comment_author'] ) . '" />
  		    			 </div>',
  		    'email'  => '<div class="form-group col-sm-6 email-field">
  						 <label for="email">Your Email Address</label>
  		    			 <input class="form-control" name="email" type="text" id="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" />
  		    			 </div></div>',
  		    'url'    => '')
  		),
  		'comment_field' => '<div class="message-field form-group">
  							<label for="email">Your Comment</label>
  							<textarea class="form-control" name="comment" id="comment" aria-required="true" rows="5"></textarea>
  							</div>',
  		'logged_in_as' => '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a> <a href="%3$s">Log out?</a>','_theme' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink() ) ) ) . '</p>',
  		'cancel_reply_link' => __( 'Cancel' , '_theme' ),
  		'comment_notes_before' => '',
  		'comment_notes_after' => '',
  		'title_reply' => 'leave a comment',
  		'label_submit' => __( 'Post Comment' , '_theme' ),
  		'class_submit' => 'btn btn-primary'
  	);
  ?>
  <?php comment_form($custom_comment_form); ?>
</section>
