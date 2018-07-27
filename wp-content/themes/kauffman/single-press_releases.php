<?php
get_header('scroll-menu');
?>

<div class="center_container" style="margin-top:82px;">
  <div class="row">
    <div class="col-lg-7 offset-lg-2">
      <div class="row">
        <div class="col">
          <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
              <a href="<?=fw_get_db_settings_option('link_press')?>">press</a>
            </li>
            <li class="breadcrumbs__item">
              <a href="<?=fw_get_db_settings_option('link_press_releases')?>">press releases</a>
            </li>
            <li class="breadcrumbs__item-current">
              <span><?=get_the_title()?></span>
            </li>
          </ul>
        </div>
      </div>
      <div data-aos="fade-left" class="article-header">
        <h3 class="article-header__heading"><?=get_the_title()?></h3>
      </div>
    </div>
    <?php
    $pdf_link = get_field("pdf_link");
    if( $pdf_link ) {
      ?>
      <div class="col-lg-2 offset-lg-1">
        <a href="<?=$pdf_link?>" class="article__download-wrapper">download as pdf</a>
      </div>
      <?php
    }
    ?>
  </div>
  <div class="row">
    <div class="col-lg-7 offset-lg-2">
      <span class="article__date"><?=get_the_date()?></span>
    </div>
  </div>
</div>

<?php
while ( have_posts() ) :
  the_post();
  
  get_template_part( 'template-parts/content2', get_post_type() );

endwhile; // End of the loop.
?>

<?php
get_footer();
?>
