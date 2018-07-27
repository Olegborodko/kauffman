<?php
/*
 * Get prefix.
 *
 * Return theme prefix.
 *
 * @since Entrepreneur 1.0.0
 * @return sting
 */
function mp_entrepreneur_get_prefix() {
	return 'mp_entrepreneur_';
}

/**
 * Entrepreneur page menu.
 *
 * Show pages of site.
 *
 * @since Entrepreneur 1.0.0
 */
function mp_entrepreneur_page_menu() {
	echo '<ul class="sf-menu">';
	wp_list_pages( array( 'title_li' => '', 'depth' => 1 ) );
	echo '</ul>';
}

/*
 * Post thumbnail
 *
 * Show post thumbnail.
 *
 * @since Entrepreneur 1.0.0
 */

function mp_entrepreneur_post_thumbnail( $mp_entrepreneur_post, $mp_entrepreneur_page_template ) {
	?>
	<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
		<div class="entry-thumbnail">
			<?php if ( $mp_entrepreneur_page_template == 'single.php' ): ?>
				<?php the_post_thumbnail(); ?>
			<?php else: ?>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			<?php endif; ?>
		</div>
	<?php endif;
}

/*
 * Post current date/time and author
 *
 * Gett HTML  information for the current post-date/time and author.
 *
 * @since Entrepreneur 1.0.0
 */

function mp_entrepreneur_posted_on( $mp_entrepreneur_post ) {
	if ( ! is_single() ) {
		$mp_entrepreneur_archive_year  = get_the_time( 'Y' );
		$mp_entrepreneur_archive_month = get_the_time( 'm' );
		$mp_entrepreneur_archive_day   = get_the_time( 'd' );
		printf( '<span class="date-post"><a href="%1$s" title="%2$s" rel="bookmark"><i class="fa fa-calendar"></i><time class="entry-date" datetime="%3$s">%4$s</time></a></span>', esc_url( get_day_link( $mp_entrepreneur_archive_year, $mp_entrepreneur_archive_month, $mp_entrepreneur_archive_day ) ), esc_attr( get_the_time() ), esc_attr( get_the_date( 'c' ) ), esc_html( get_the_date() ) );
	} else {
		printf( '<span class="date-post"><i class="fa fa-calendar"></i><time class="entry-date" datetime="%1$s">%2$s</time></span>', esc_attr( get_the_date( 'c' ) ), esc_html( get_the_date() ) );
	}
}

/*
 * List term
 *
 * Get list term.
 *
 * @since Entrepreneur 1.0.0
 */

function mp_entrepreneur_get_term_list( $mp_entrepreneur_term_list ) {
	foreach ( $mp_entrepreneur_term_list as $mp_entrepreneur_term ) {
		echo '<a href="' . get_term_link( $mp_entrepreneur_term ) . '"';
		if ( $mp_entrepreneur_term === end( $mp_entrepreneur_term_list ) ) :
			echo " class='last' ";
		endif;
		echo ' >' . $mp_entrepreneur_term->name . '</a>';
		if ( $mp_entrepreneur_term != end( $mp_entrepreneur_term_list ) ) :
			echo ", ";
		endif;
	}
}

/*
 * Post Categories
 *
 * Get post Categories.
 *
 * @since Entrepreneur 1.0.0
 */

function mp_entrepreneur_post_category( $mp_entrepreneur_post ) {
	if ( get_theme_mod( mp_entrepreneur_get_prefix() . 'show_categories', '1' ) === '1' || get_theme_mod( mp_entrepreneur_get_prefix() . 'show_categories' ) ):
		if ( strcmp( get_post_type( $mp_entrepreneur_post ), 'post' ) === 0 ) :
			?>
			<?php $mp_entrepreneur_categories = get_the_category();
			$mp_entrepreneur_separator        = ', ';
			if ( ! empty( $mp_entrepreneur_categories ) ) { ?>
				<span><i class="fa fa-folder-open"></i><?php _e( 'Posted in', 'entrepreneur-lite' ); ?></span>
				<?php
				foreach ( $mp_entrepreneur_categories as $mp_entrepreneur_category ) {
					$mp_entrepreneur_class = '';
					if ( $mp_entrepreneur_category === end( $mp_entrepreneur_categories ) ) :
						$mp_entrepreneur_class     = " class='last' ";
						$mp_entrepreneur_separator = '';
					endif;
					echo '<a href="' . esc_url( get_category_link( $mp_entrepreneur_category->term_id ) ) . '"' . $mp_entrepreneur_class . ' alt="' . esc_attr( sprintf( __( 'View all posts in %s',  'entrepreneur-lite' ), $mp_entrepreneur_category->name ) ) . '">' . esc_html( $mp_entrepreneur_category->name ) . '</a>' . $mp_entrepreneur_separator;
				}
			}
		endif;
	endif;
}

/*
 * Post Tags
 *
 * Get post Tages.
 *
 * @since Entrepreneur 1.0.0
 */

function mp_entrepreneur_post_tag( $mp_entrepreneur_post ) {
	if ( get_theme_mod( mp_entrepreneur_get_prefix() . 'show_tags', '1' ) === '1' || get_theme_mod( mp_entrepreneur_get_prefix() . 'show_tags' ) ):
		if ( strcmp( get_post_type( $mp_entrepreneur_post ), 'post' ) === 0 ) :
			$mp_entrepreneur_tags      = get_the_tags();
			$mp_entrepreneur_separator = ', ';
			if ( ! empty( $mp_entrepreneur_tags ) ) { ?>
				<span><i class="fa fa-tags"></i><?php _e( 'Tagged with', 'entrepreneur-lite' ); ?></span>
				<?php
				foreach ( $mp_entrepreneur_tags as $mp_entrepreneur_tag ) {
					$mp_entrepreneur_class = '';
					if ( $mp_entrepreneur_tag === end( $mp_entrepreneur_tags ) ) :
						$mp_entrepreneur_class     = " class='last' ";
						$mp_entrepreneur_separator = '';
					endif;
					echo '<a href="' . esc_url( get_tag_link( $mp_entrepreneur_tag->term_id ) ) . '"' . $mp_entrepreneur_class . ' alt="' . esc_attr( sprintf( __( 'View all posts in %s',  'entrepreneur-lite' ), $mp_entrepreneur_tag->name ) ) . '">' . esc_html( $mp_entrepreneur_tag->name ) . '</a>' . $mp_entrepreneur_separator;
				}
			}
		endif;
	endif;
}

/*
 * Post meta
 *
 * Get post meta.
 *
 * @since Entrepreneur 1.0.0
 */

function mp_entrepreneur_post_meta( $mp_entrepreneur_post ) {
	if ( get_theme_mod( mp_entrepreneur_get_prefix() . 'show_meta', '1' ) === '1' || get_theme_mod( mp_entrepreneur_get_prefix() . 'show_meta' ) || get_theme_mod( mp_entrepreneur_get_prefix() . 'show_tags', '1' ) === '1' || get_theme_mod( mp_entrepreneur_get_prefix() . 'show_tags' ) || get_theme_mod( mp_entrepreneur_get_prefix() . 'show_categories', '1' ) === '1' || get_theme_mod( mp_entrepreneur_get_prefix() . 'show_categories' ) ):
		?>
		<?php if ( get_theme_mod( mp_entrepreneur_get_prefix() . 'show_meta', '1' ) === '1' || get_theme_mod( mp_entrepreneur_get_prefix() . 'show_meta' ) ): ?>
		<div class="entry-meta">
			<?php mp_entrepreneur_posted_on( $mp_entrepreneur_post ); ?>
			<span class="author"><i
					class="fa fa-user"></i><?php _e( 'Posted by', 'entrepreneur-lite' ); ?> </span><?php the_author_posts_link(); ?>
			<?php if ( comments_open() ) : ?>
				<a class="last comments-meta " href="<?php
				if ( ! is_single() ): the_permalink();
				endif;
				?>#comments"><i
						class="fa fa-comment"></i><span><?php comments_number( '0 ', '1 ', '% ' ); ?><?php _e( 'Comments', 'entrepreneur-lite' ); ?></span></a>
				<?php
			endif;
			mp_entrepreneur_post_tag( $mp_entrepreneur_post );
			mp_entrepreneur_post_category( $mp_entrepreneur_post );
			edit_post_link( '<span>' . __( 'Edit', 'entrepreneur-lite' ) . '</span>', '', '', '', 'fa fa-pencil post-edit-link' );
			?>
		</div>
	<?php endif; ?>
		<?php
	endif;
}

/*
 * Post comments
 *
 * Get post comments.
 *
 * @since Entrepreneur 1.0.0
 */

function mp_entrepreneur_comment( $mp_entrepreneur_comment, $mp_entrepreneur_args, $mp_entrepreneur_depth ) {
	$GLOBALS['comment'] = $mp_entrepreneur_comment;
	extract( $mp_entrepreneur_args, EXTR_SKIP );
	if ( 'div' == $mp_entrepreneur_args['style'] ) {
		$mp_entrepreneur_tag       = 'div';
		$mp_entrepreneur_add_below = 'comment';
	} else {
		$mp_entrepreneur_tag       = 'li';
		$mp_entrepreneur_add_below = 'div-comment';
	}
	?>
	<<?php echo $mp_entrepreneur_tag ?><?php comment_class( empty( $mp_entrepreneur_args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $mp_entrepreneur_args['style'] ) : ?>
		<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
		<div class="comment-description">
	<?php endif; ?>
	<div class="comment-author vcard">
		<?php if ( $mp_entrepreneur_args['avatar_size'] != 0 ) {
			echo get_avatar( $mp_entrepreneur_comment, 67 );
		} ?>
	</div>
	<div class="comment-content">
	<?php if ( $mp_entrepreneur_comment->comment_approved == '0' ) : ?>
		<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'entrepreneur-lite' ); ?></em>
		<br/>
	<?php endif; ?>
	<?php comment_text(); ?>
	<div class="clearfix"></div>
	<div class="reply pull-right">
		<?php comment_reply_link( array_merge( $mp_entrepreneur_args, array(
			'add_below' => $mp_entrepreneur_add_below,
			'depth'     => $mp_entrepreneur_depth,
			'max_depth' => $mp_entrepreneur_args['max_depth']
		) ) ); ?>
	</div>
	<div class="comment-meta commentmetadata date-post">
		<?php
		printf( __( '<i class="fa fa-calendar"></i><span>%1$s</span>', 'entrepreneur-lite' ), get_comment_date( 'F j, Y' ) );
		?>
		<?php edit_comment_link( __( '(Edit)', 'entrepreneur-lite' ), '  ', '' ); ?>
	</div>


	<?php if ( 'div' != $mp_entrepreneur_args['style'] ) : ?>
		</div>
		</div>
		</div>
	<?php endif;
}

/*
 * Retrieve a featured video.
 *
 * Returns first finded video, iframe, object or embed tag in content.
 *
 * @since Entrepreneur 1.0.0
 * @param array $mp_entrepreneur_args Set of arguments
 */
function mp_entrepreneur_get_post_format_video( $mp_entrepreneur_post_id ) {
	$mp_entrepreneur_post    = get_post( $mp_entrepreneur_post_id );
	$mp_entrepreneur_content = do_shortcode( apply_filters( 'the_content', $mp_entrepreneur_post->post_content ) );
	$mp_entrepreneur_embeds  = get_media_embedded_in_content( $mp_entrepreneur_content );
	if ( ! empty( $mp_entrepreneur_embeds ) ) {
		return '<div class="entry-video entry-thumbnail">' . $mp_entrepreneur_embeds[0] . '</div>';
	} else {
		return false;
	}
}

/**
 * Callback for apropriate hook to show video post format related video.
 *
 * @since Entrepreneur 1.0.0
 *
 * @param array $mp_entrepreneur_args Set of arguments
 *
 * @return string related video.
 */
function mp_entrepreneur_post_format_video( $mp_entrepreneur_post, $mp_entrepreneur_page_template, $mp_entrepreneur_args = array() ) {
	$mp_entrepreneur_video = mp_entrepreneur_get_post_format_video( $mp_entrepreneur_post->ID );
	if ( $mp_entrepreneur_video ) {
		echo $mp_entrepreneur_video;
	} else {
		mp_entrepreneur_post_thumbnail( $mp_entrepreneur_post, $mp_entrepreneur_page_template );
	}
}

/**
 * Retrieve images from post content.
 *
 * Returns image ID's if can find this image in database,
 * returns image URL or boolean false in other case.
 *
 * @since Entrepreneur 1.0.0
 *
 * @param  int $mp_entrepreneur_post_id Post ID to search image in.
 * @param  int $mp_entrepreneur_limit Max images count to search.
 *
 * @return mixed          Images.
 */
function mp_entrepreneur_get_post_images( $mp_entrepreneur_post_id = null, $mp_entrepreneur_limit = 1 ) {

	$mp_entrepreneur_content = get_the_content();

	// Gets first image from content.
	preg_match_all( '/< *img[^>]*src *= *["\']?([^"\']*)/i', $mp_entrepreneur_content, $mp_entrepreneur_matches );

	if ( ! isset( $mp_entrepreneur_matches[1] ) ) {
		return false;
	}

	$mp_entrepreneur_result = array();

	for ( $i = 0; $i < $mp_entrepreneur_limit; $i ++ ) {

		if ( empty( $mp_entrepreneur_matches[1][ $i ] ) ) {
			continue;
		}

		$mp_entrepreneur_image_src = esc_url( $mp_entrepreneur_matches[1][ $i ] );
		$mp_entrepreneur_image_src = preg_replace( '/^(.+)(-\d+x\d+)(\..+)$/', '$1$3', $mp_entrepreneur_image_src );
		
		if ( function_exists('attachment_url_to_postid') )
			$mp_entrepreneur_img_id = attachment_url_to_postid( $mp_entrepreneur_image_src );
		
		if ( $mp_entrepreneur_img_id ) {
			$mp_entrepreneur_result[] = (int) $mp_entrepreneur_img_id;
		}

	}

	return $mp_entrepreneur_result;
}


/**
 * Callback for apropriate hook to show image post format related image.
 *
 * @since Entrepreneur 1.0.0
 *
 * @param array $mp_entrepreneur_args Set of arguments
 *
 * @return string related image.
 */
function mp_entrepreneur_post_format_image( $mp_entrepreneur_post, $mp_entrepreneur_page_template ) {
	$mp_entrepreneur_imgs = mp_entrepreneur_get_post_images();
	$mp_entrepreneur_img_id = ($mp_entrepreneur_imgs && !empty($mp_entrepreneur_imgs[0])) ? $mp_entrepreneur_imgs[0] : null;
	$mp_entrepreneur_img_src = wp_get_attachment_image_src( $mp_entrepreneur_img_id, 'post-thumbnail' );

	if ( $mp_entrepreneur_img_src && $mp_entrepreneur_img_src[0] ) {
		$mp_entrepreneur_img = $mp_entrepreneur_img_src[0]
		?>
		<div class="entry-thumbnail">
			<?php if ( $mp_entrepreneur_page_template == 'single.php' ): ?>
				<img src="<?php echo $mp_entrepreneur_img; ?>" class="attachment-post-thumbnail wp-post-image"
				     alt="<?php the_title(); ?>">
			<?php else: ?>
				<a href="<?php the_permalink(); ?>"><img src="<?php echo $mp_entrepreneur_img; ?>"
				                                         class="attachment-post-thumbnail wp-post-image"
				                                         alt="<?php the_title(); ?>"></a>
			<?php endif; ?>
		</div>
		<?php
	} else {
		mp_entrepreneur_post_thumbnail( $mp_entrepreneur_post, $mp_entrepreneur_page_template );
	}
}

/**
 * Returns first blockquote from content. If not - returns excerpt.
 *
 * @since Entrepreneur 1.0.0
 *
 * @param  object $mp_entrepreneur_post Post object.
 *
 * @return string       UblockquoteRL.
 */
function mp_entrepreneur_get_post_format_quote( $mp_entrepreneur_post = null ) {
	$mp_entrepreneur_post  = is_null( $mp_entrepreneur_post ) ? get_post() : $mp_entrepreneur_post;
	$mp_entrepreneur_quote = mp_entrepreneur_get_content_quote( $mp_entrepreneur_post->post_content );
	$mp_entrepreneur_quote = ! empty( $mp_entrepreneur_quote ) ? $mp_entrepreneur_quote : get_the_excerpt();
	$mp_entrepreneur_quote = $mp_entrepreneur_quote . '<p><a href="' . get_permalink() . '" class="more-link">' . __( 'read more','entrepreneur-lite' ) . '</a></p>';
	echo sprintf( '<blockquote class="post-format-quote">%s</blockquote>', $mp_entrepreneur_quote );
}

/**
 * Gets the first blockquote from post content.
 *
 * @since Entrepreneur 1.0.0
 *
 * @param  string $mp_entrepreneur_content Post content.
 *
 * @return string          Quote.
 */
function mp_entrepreneur_get_content_quote( $mp_entrepreneur_content ) {

	// Catch links that are not wrapped in an '<a>' tag.
	preg_match( '/<blockquote[^>]*>([\s\S]*)<\/blockquote>/im', $mp_entrepreneur_content, $mp_entrepreneur_matches );

	return ! empty( $mp_entrepreneur_matches[1] ) ? wp_kses_post( $mp_entrepreneur_matches[1] ) : '';
}

/**
 * Returns the post gakkery.
 *
 * @since Entrepreneur 1.0.0
 *
 * @param  object $mp_entrepreneur_post Post object.
 *
 */
function mp_entrepreneur_post_format_gallery( $mp_entrepreneur_post = null, $mp_entrepreneur_page_template ) {
	$mp_entrepreneur_gallery_post = new MP_Entrepreneur_Gallery( mp_entrepreneur_get_prefix() );
	$mp_entrepreneur_gallery_post->get_post_gallery( $mp_entrepreneur_post, $mp_entrepreneur_page_template );
}

/**
 * Returns the post gakkery.
 *
 * @since Entrepreneur 1.0.0
 *
 * @param  object $mp_entrepreneur_post Post object.
 *
 */
function mp_entrepreneur_pagination() {
	$mp_entrepreneur_args     = array(
		'prev_next' => true
	);
	$mp_entrepreneur_paginate = paginate_links( $mp_entrepreneur_args );
	if ( ! empty( $mp_entrepreneur_paginate ) ):
		?>
		<nav class="navigation paging-navigation">
			<?php echo $mp_entrepreneur_paginate; ?>
		</nav><!-- .navigation -->
	<?php endif;
}
