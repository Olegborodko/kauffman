<?php
/**
 * The template for displaying the summary listing of Journal articles for a volume.
 * Created by Together Editing & Design (www.togetherediting.com)
 * It relies on the function JournalTemplateSelect to force subcategories (e.g., vol-5)
 * to use the parent (journal) category template.
 *
 * @package snpcore-revised-2017
 * @since snpcore 2.0
 */

get_header(); ?>

<!-- body -->
<section id="bd">
	<div id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- main content -->
		<div class="container main">
			<div class="row-fluid">
     
				<!-- main content for listing of article excerpts for a volume -->
				<section class="span8 main-content journal_edition">
					<!-- LFP added div below 2017.07.26 to create a widget to hold a tag cloud -->
					<div class="tag-cloud-widget">
						<?php get_template_part('journal-article-listing','1'); ?>
					</div>
				
					<?php $bloginfo = get_bloginfo('wpurl'); ?>
					<a class="journal-return" href="<?php echo $bloginfo; ?>/publications/journal"> &lt; Return to volume listing</a><br>
					
					<div class="entry-head">
						<h1><em>Kauffman Fellows Report</em>,
							<!-- the following gets the second (of two) categories; the first category is "Journal" and the second category is the volume number -->
							<?php
								$category = get_the_category();
								echo $category[1]->cat_name;
							?>
						</h1>
						<h3 class="report-date">
							<!-- figure out year of publication by looking at the first article publish date -->
							<?php
							$journal_date = the_time('Y');
							echo $journal_date[0];
							?>
							&nbsp;<span class="separator">|</span>
						</h3>
						<a href="http://www.kauffmanfellows.org/publications/kfr-hard-copy-request/">Request a hard copy</a>
					</div><!-- end of entry-head-->
					
					<!-- the loop -->
					<?php while ( have_posts() ) : the_post(); ?>
					<div class='report-article'>
						<h4 class='entry-title'><a href='<?php echo the_permalink(); ?>'><?php the_title(); ?></a></h4>
						<?php $author = get_post_meta( get_the_ID(), 'author'); ?>
						<p class='entry-author'>by <? echo $author[0]; ?></p>
						<?php the_excerpt(); ?>
					</div>
					<?php endwhile; ?>
					<p>&nbsp;</p> <!-- add a little space before footer -->
				
				</section> <!-- end of journal content -->
			</div><!-- end of row-fluid-->		
		</div><!-- end of container-main-->
	</div><!-- end of page-->
</section>
<?php get_footer(); ?>