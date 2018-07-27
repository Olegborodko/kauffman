<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Entrepreneur
 * @since Entrepreneur 1.0
 */
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h3 class="comments-title h1"><?php comments_number( __( 'No Comments', 'entrepreneur-lite' ), __( 'One Comment', 'entrepreneur-lite' ), __( '% Comments', 'entrepreneur-lite' ) ); ?></h3>
		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'       => 'ol',
				'short_ping'  => true,
				'avatar_size' => 72,
				'callback'    => 'mp_entrepreneur_comment'
			) );
			?>
		</ol><!-- .comment-list -->

		<?php
		// Are there comments to navigate through?
		if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
			?>
			<nav class="navigation comment-navigation">
				<ul>
					<li class="nav-previous"><?php previous_comments_link( __( 'previous', 'entrepreneur-lite' ) ); ?></li>
					<li class="nav-next"><?php next_comments_link( __( 'next', 'entrepreneur-lite' ) ); ?></li>
				</ul
			</nav>
		<?php endif; // Check for comment navigation  ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
			<p class="no-comments"><?php _e( 'Comments are closed.', 'entrepreneur-lite' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments()  ?>
	<?php
	if ( comments_open() ) {
		$mp_entrepreneur_req          = get_option( 'require_name_email' );
		$mp_entrepreneur_aria_req     = ( $mp_entrepreneur_req ? " aria-required='true'" : '' );
		$mp_entrepreneur_comment_args = array(
			'fields'              => apply_filters( 'comment_form_default_fields', array(
				'author' => '<div class="form-group comment-form-author">',
				'<input class="form-control" id="author" name="author" type="text" placeholder="' . __( 'Name','entrepreneur-lite' ) . ( $mp_entrepreneur_req ? ' *' : '' ) . '" value="' .
				esc_attr( $commenter['comment_author'] ) . '" size="30"' . $mp_entrepreneur_aria_req . ' />' .
				'</div><!-- #form-section-author .form-section -->',
				'email'  => '<div class="form-group comment-form-email">' .
				            '<input class="form-control" id="email" name="email" type="text" placeholder="' . __( 'Email','entrepreneur-lite' ) . ( $mp_entrepreneur_req ? ' *' : '' ) . '" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $mp_entrepreneur_aria_req . ' />' .
				            '</div><!-- #form-section-email .form-section -->',
				'url'    => '<div class="form-group comment-form-url">' .
				            '<input class="form-control" id="url" name="url" type="text" placeholder="' . __( 'Website', 'entrepreneur-lite' ) . '" value="' . esc_attr( $commenter['comment_author_url'] ) .
				            '" size="30" /></div>'
			) ),
			'comment_notes_after' => '',
			'title_reply_before'  => '<h3 id="reply-title" class="comment-reply-title h1">',
			'title_reply_after'   => '</h3>',
			'comment_field'       => '<div class="form-group comment-form-comment"><textarea rows="3" class="form-control" id="comment" name="comment" placeholder="' . __( 'Comment', 'entrepreneur-lite' ) . ( $mp_entrepreneur_req ? ' *' : '' ) . '" aria-required="true"></textarea></div>'
		);
		comment_form( $mp_entrepreneur_comment_args );
	}
	?>

</div><!-- #comments -->