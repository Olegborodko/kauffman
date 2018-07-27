<?php
/**
 * The template for displaying the KF Review category listing pages
 * Created by Together Editing & Design (www.togetherediting.com)
 * It relies on the function KFReviewTemplateSelect to force subcategories (e.g., future-of-innovation)
 * to use the parent (kf-category) category template.
 *
 * @package snpcore-revised-2017
 * @since snpcore 2.0
 */

get_header('kf-review'); ?>

<!-- body -->
<section id="bd">
	<div id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- main content -->
		<div class="center_container main kf-review">
			<header>
			<?php $cat = get_term_by('name', single_cat_title('',false), 'category'); ?>
				<h1 class="kf-category-title">Collection: <span class="<?php echo $cat->slug; ?>"><?php single_cat_title(); ?></span></h1>
			</header>
			
			<div class="row"><div class="col-md-10 col-md-offset-1 col-xs-12">

		<!-- the loop -->
		<?php 
		$count = 0;
		while ( have_posts() ) : the_post();
		
			if( $count % 10 === 0 ) : 
				$md_span_size = 12;
				$sm_span_size = 12;
		?>
			<!-- start 2-block photoLeft -->
			<div class="row-fluid block-2">
		<?php 
			endif;
			
			if( $count % 10 === 2 ) :
				$md_span_size = 4; 
				$sm_span_size = 6;
		?>
			<!-- start 3-block -->
			<div class="row-fluid block-3">
		<?php 
			endif; 
			if( $count % 10 === 5 ) : 
				$md_span_size = 12;
				$sm_span_size = 12;
		?>
			<!-- start 2-block photoRight -->
			<div class="row-fluid block-2 alt">
		<?php 
			endif; 
			if( $count % 10 === 7 ) : 
				$md_span_size = 4;
				$sm_span_size = 6;
		?>
			<!-- start 3-block -->
			<div class="row-fluid block-3">
		<?php endif; ?>


				<!-- individual blog items -->
				<article class="col-md-<?php echo $md_span_size; ?> col-sm-<?php echo $sm_span_size; ?>">
				<!-- check if the post has a Post Thumbnail assigned to it.-->
				<?php if ( has_post_thumbnail() ) { ?>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				<?php } ?>
				
				<p class="cat-list">
				<?php  
				$parentcat = get_category_by_slug('kf-review');
				$cat_list = '';
				$separator = ' / ';
				$cat_count = 0;
				foreach( (get_the_category()) as $childcat ):
				  if ( cat_is_ancestor_of($parentcat, $childcat) ):
				    $cat_count ++;
				    if ( $cat_count > 1 ):
					    $cat_list .= $separator;
				    endif;
				    $cat_list .= '<a href="' . get_category_link($childcat->cat_ID) . '" class="' . $childcat->slug . '">' . $childcat->cat_name . '</a>';
				  endif;
				endforeach;
				echo $cat_list;
				?>
				</p>
				<h2 class="entry-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>
					<a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
				</article>

		<?php if( $count % 10 === 1 || $count % 10 === 4 || $count % 10 === 6 || $count % 10 === 9 ) : ?>
			</div> <!-- /row-fluid -->

		<?php 
			endif;
			$count++;
		endwhile;

		// we need to make sure that we close section
		// rewind counter one step
		$count--;
	
		// check if last counter value was the one when we close tags and if not, close it 
		if( $count % 10 ==! 1 && $count % 10 ==! 4 && $count % 10 ==! 6 && $count % 10 ==! 9 ) :
		?>
		    </div>
		<?php endif; ?>


		</div></div></div> <!--/main, enclosing row, span10 -->
	</div> <!-- /#page -->

</section>

<!-- photo bar -->
<div class="page-footer"></div>

<?php get_footer(); ?>