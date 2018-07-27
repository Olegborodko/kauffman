<div class="swiper_response_lg_50_xs_100">
  <div class="review-item-block g_mobile_margin_100 aos-init aos-animate swiper-slide__right">
    <div class="review-item review-item--left swiper-slide__right">
      <div class="review-item__white-block swiper-slide__right">
      </div>
      <div class="review-item__img-wrapper">
        <a href="<?=$link_url?>">
          <?=get_the_post_thumbnail()?>
        </a>
      </div>

      <div class="review-item__content">
        <span class="review-item__title swiper-slide__right">
        <a href="<?=$link_url?>">
          <?=get_the_title()?>
        </a>
        </span>
        <div class="review-item__dscr swiper-slide__right">
          <p>
            <span>
              <?=get_field( "description" )?>
            </span>
          </p>
        </div>
        <div class="swiper-slide__link_div_right">
          <a href="<?=$link_url?>" class="swiper-slide__link">
            <?=get_field( "link_title" )?>
          </a>
        </div>
      </div>
    </div>
  </div>


  <div style="margin-top: 98px;
            margin-bottom: 0;
            text-align: right">
    <a style="padding: 29px 100px 28px 250px;
    color: rgb(16, 134, 194);
    background-color: transparent !important;"
       class="releases__more-btn swiper_button_js mobile-display-none"
       onmouseover="this.style.cssText ='color:#FFFFFF!important;background-color:#1086C2!important;padding:29px 100px 28px 250px';"
       onmouseout="this.style.cssText='color:#1086C2!important;background-color:transparent!important;padding:29px 100px 28px 250px';">
      <?=$link_text?></a>
    <div class="g_mobile_display_block g_text" style="font-size: 20px;">
      Swipe to see more >
    </div>
  </div>
  
</div>


</div> <!-- swiper-slide -->