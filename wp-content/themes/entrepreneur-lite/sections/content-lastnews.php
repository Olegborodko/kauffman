<?php
/*
 * last news section
 */
?>
	<section id="news" class="news-section default-section">
		<div class="container">
			<div class="section-content">
				<?php
				$mp_entrepreneur_news_title        = esc_html( get_theme_mod( mp_entrepreneur_get_prefix() . 'news_title' ) );
				$mp_entrepreneur_news_subtitle     = esc_html( get_theme_mod( mp_entrepreneur_get_prefix() . 'news_subtitle' ) );
				$mp_entrepreneur_news_button_url   = esc_url( get_theme_mod( mp_entrepreneur_get_prefix() . 'news_button_url','#news' ) );
				$mp_entrepreneur_news_button_label = esc_html( get_theme_mod( mp_entrepreneur_get_prefix() . 'news_button_label',__( 'all news', 'entrepreneur-lite' ) ) );
				?>
				<div class="section-table-wrapper">
					<div class="section-header">
						<?php
						if ( get_theme_mod( mp_entrepreneur_get_prefix() . 'news_title', false ) === false ) :
							?>
							<h2 class="section-title"><?php _e( 'Tips & News', 'entrepreneur-lite' ); ?></h2>
							<?php
						else:
							if ( ! empty( $mp_entrepreneur_news_title ) ):
								?>
								<h2 class="section-title h1"><?php echo $mp_entrepreneur_news_title; ?></h2>
								<?php
							endif;
						endif;
						if ( get_theme_mod( mp_entrepreneur_get_prefix() . 'news_subtitle', false ) === false ) :
							?>
							<div
								class="section-subtitle"><?php _e( 'Updates from the blog', 'entrepreneur-lite' ); ?></div>
							<?php
						else:
							if ( ! empty( $mp_entrepreneur_news_subtitle ) ):
								?>
								<div class="section-subtitle"><?php echo $mp_entrepreneur_news_subtitle; ?></div>
								<?php
							endif;
						endif;
						?>
					</div>
					<div class="section-buttons">
						<?php
						if ( get_theme_mod( mp_entrepreneur_get_prefix() . 'news_button_url', false ) === false ) :
							?>
							<a href="#news" title="<?php _e( 'all news', 'entrepreneur-lite' ) ?>"
							   class="button button-white "><?php _e( 'all news', 'entrepreneur-lite' ) ?></a>
							<?php
						else:
							if ( ! empty( $mp_entrepreneur_news_button_label ) && ! empty( $mp_entrepreneur_news_button_url ) ):
								?>
								<a href="<?php echo $mp_entrepreneur_news_button_url; ?>"
								   title="<?php echo $mp_entrepreneur_news_button_label; ?>"
								   class="button white-button"><?php echo $mp_entrepreneur_news_button_label; ?></a>
								<?php
							endif;
						endif;
						?>
					</div>
				</div>
				<?php
				$mp_entrepreneur_args   = array(
					'post_type'           => 'post',
					'posts_per_page'      => 3,
					'post_status'         => 'publish',
					'orderby'             => 'date',
					'ignore_sticky_posts' => 1,
				);
				$mp_entrepreneur_posts = new WP_Query( $mp_entrepreneur_args );
				if ( $mp_entrepreneur_posts ->have_posts() ) {
					
					add_filter( 'excerpt_length', 'mp_entrepreneur_lastnews_excerpt_length', 999 );
					add_filter( 'excerpt_more', 'mp_entrepreneur_lastnews_excerpt_more', 999 );
					
					?>
					<div class="news-list">
						<div class="row">
							<?php
							while ( $mp_entrepreneur_posts ->have_posts() ) {
								$mp_entrepreneur_posts ->the_post();
								?>
								<div
									id="post-<?php the_ID(); ?>" <?php post_class( 'post-entry col-xs-12 col-sm-12 col-md-4 col-lg-4' ); ?>>
									<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
										<div class="entry-thumbnail">
											<a rel="external" alt="<?php the_title(); ?>"
											   href="<?php the_permalink() ?>">
												<?php the_post_thumbnail( mp_entrepreneur_get_prefix() . 'thumb-large' ); ?>
											</a>
										</div>
									<?php else: ?>
										<div class="entry-thumbnail  entry-thumbnail-default">
											<span class="date-post h6"><?php the_time( 'F j, Y' ); ?></span>
										</div>
									<?php endif; ?>
									<div class="post-wrapper">
										<div class="wpapper-content">
											<div class="entry-header">
												<h3 class="entry-title">
													<a href="<?php the_permalink(); ?>"
													   rel="bookmark"><?php the_title(); ?></a>
												</h3>
											</div>
											<div class="entry entry-content">
												<?php the_excerpt(); ?>
											</div>
										</div>
									</div>
								</div>
							<?php }
							?>
						</div>
					</div>
					<?php
					
					remove_filter( 'excerpt_length', 'mp_entrepreneur_lastnews_excerpt_length', 999 );
					remove_filter( 'excerpt_more', 'mp_entrepreneur_lastnews_excerpt_more', 999 );
					
				} else {
					_e( 'Nothing Found', 'entrepreneur-lite' );
				}
				
				wp_reset_query();
				?>
			</div>
		</div>
	</section>
<?php

function mp_entrepreneur_lastnews_excerpt_length( $length ) {
	return 30;
}

function mp_entrepreneur_lastnews_excerpt_more( $more ) {
	return '...';
}
