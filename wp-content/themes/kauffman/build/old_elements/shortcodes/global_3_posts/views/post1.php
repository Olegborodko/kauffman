<div class="fw-col-xs-12 fw-col-lg-6">
  
  <!-- -->
  
  <div style="margin-top: 60px;margin-bottom: 30px;text-align: left;">
    
    <div style="background-color: #1086C2;
              height: 4px;
              max-width:520px;
              width:100%;
              display:inline-block"></div>
  
  </div>
  
  <div class="g_text" style="margin-top: 0px; margin-bottom: 0px">
    <p>
      <span style="font-family: GTAmerica, Helvetica, Arial, sans-serif; font-size: 36px;">
        <img class="alignnone size-full wp-image-1357" src="<?php echo get_stylesheet_directory_uri(); ?>/img/review_logo.png" alt="" width="40" height="40">
        <span style="margin-left:15px;">
        <?=$title?>
        </span>
      </span>
    </p>
    <p style="margin-right: 40px;margin-top: 67px;">
      <span style="font-size: 18px; font-family: GTAmerica, Helvetica, Arial, sans-serif;">
         <?=$text?>
      </span>
    </p>
  </div>
  
  <div class="review-item-block g_mobile_margin_100 aos-init aos-animate" style="
margin-top: 70px;
margin-bottom: 0px;
margin-right: 90px;
margin-left: -30px;
">
    
    
    <div class="review-item review-item--left" style="padding-left: 30px;padding-right: 0;margin-bottom: 10px!important;">
      <div class="review-item__white-block" style="width:100%;max-width:270px">
      </div>
      <div class="review-item__img-wrapper">
        <a href="<?=get_post_permalink()?>">
          <?=get_the_post_thumbnail()?>
        </a>
      </div>
      
      <div class="review-item__tags">
        <?php
        if (get_the_tags()) {
          foreach (get_the_tags() as $key => $value) {
            ?>
            <a href="<?= get_tag_link($value->term_id) ?>"
               style="background-color: <?= color_next($key + 1) ?>"><?= $value->name ?></a>
            <?php
          }
        }
        ?>
      </div>
      
      <div class="review-item__content">
        <span class="review-item__title">
          <a href="<?=get_post_permalink()?>">
            <?=get_the_title()?>
          </a>
        </span>
        <div class="review-item__dscr" style="max-width:">
          <p>
            <span style="font-family: GTAmerica, Helvetica, Arial, sans-serif; font-size: 14px; color: #878889;">
              <?=get_field("short_text")?>
            </span>
          </p>
        </div>
        <a href="<?=get_post_permalink()?>" class="review-item__link">
          read more</a>
      </div>
    </div>
  
  </div>
  
  <div class="g_mobile_display_none" style="margin:180px auto 0 auto;
            text-align: left">
    <a style="padding: 29px 100px 28px 250px; color: rgb(16, 134, 194) !important;
    background-color: transparent !important;"
       href="<?=$link_url?>" class="releases__more-btn"
       onmouseover="this.style.cssText ='color:#FFFFFF!important;background-color:#1086C2!important;padding:29px 100px 28px 250px';"
       onmouseout="this.style.cssText='color:#1086C2!important;background-color:transparent!important;padding:29px 100px 28px 250px';"
    >
      <?=$link_text?></a>
  </div>

</div>