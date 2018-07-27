<div class="swiper-slide">
    
    <div class="swiper_response_lg_50_xs_100">
      <div style="background-color: #1086C2;
              height: 4px;
              max-width:480px;
              width:100%;
              display:inline-block"></div>
      <div class="g_title g_margin_left_40_lg" style="margin-top: 40px;
     margin-bottom: 0px;
     text-align: left"><?=$title?></div>
      
      
      <div class="review-item-block g_mobile_margin_100 aos-init aos-animate swiper-slide__block_left">
        <div class="review-item review-item--left swiper-slide__review-item_left">
          <div class="review-item__white-block swiper-slide__white-block_left">
          </div>
          <div class="review-item__img-wrapper">
            <a href="<?=$link_url?>">
              <?=get_the_post_thumbnail()?>
            </a>
          </div>
          
          <div class="review-item__content">
        <span class="review-item__title swiper-slide__review-item__title_left">
          <a href="<?=$link_url?>">
            <?=get_the_title()?>
          </a>
        </span>
            <div class="review-item__dscr swiper-slide-pref">
              <p>
            <span>
              <?=get_field( "description" )?>
            </span>
              </p>
            </div>
            
            <div class="swiper-slide__block_link_left">
              <div class="swiper-slide__link_div_left">
                <a href="<?=$link_url?>" class="swiper-slide__link">
                  <?=get_field( "link_title" )?>
                </a>
              </div>
            </div>
          
          </div>
        </div>
      </div>
    </div>