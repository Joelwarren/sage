<?php
if (post_password_required()) {
return;
}
?>

<div class="btn-comments-wrapper">
    <button class="btn btn-block btn-comments d-md-none" type="button" data-toggle="collapse" data-target="#comments" aria-expanded="false" aria-controls="comments">
        <i class="icon-comments"></i> Comments
    </button>
</div>
<section id="comments" class="collapse comments">
    <?php if (have_comments()) : ?>
        <h4><?php printf(_nx('One comment', '%1$s comment', get_comments_number(), 'comments title', 'sage'), number_format_i18n(get_comments_number())); ?></h4>

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
        $commenter = wp_get_current_commenter();
        $req = get_option( 'require_name_email' );
        $aria_req = ( $req ? " aria-required='true'" : '' );

        $custom_comment_form = array(
            'fields' => apply_filters( 'comment_form_default_fields',
                array(
                    'author' => '<div class="col-sm-6"><div class="form-group name-field">
                                 <input class="form-control" placeholder="Name *" type="text" id="author" name="author" value="' . esc_attr( $commenter['comment_author'] ) . '" />
                                 </div>',
                    'email'  => '<div class="form-group email-field">
                                 <input class="form-control" placeholder="Email *" name="email" type="text" id="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" />
                                 </div>',
                    'url'    => ''
                )
            ),
            'comment_field'        => '<div class="row"><div class="col-sm-6"><div class ="message-field form-group">
                                       <textarea class="form-control" placeholder="Message *" name="comment" id="comment" aria-required="true" rows="5"></textarea>
                                       </div></div>',
           'cancel_reply_link'    => __( 'Cancel' , 'lenwallisaudio' ),
            'comment_notes_before' => '',
            'comment_notes_after'  => '',
            'title_reply'          => '<i class="icon-comments"></i> We would love to hear your comments',
            'label_submit'         => __( 'Send your comment' , 'lenwallisaudio' ),
            'class_submit'         => 'btn btn-block btn-primary'
        );
        ?>
        <?php comment_form($custom_comment_form); ?>
        </div></div>
</section>
