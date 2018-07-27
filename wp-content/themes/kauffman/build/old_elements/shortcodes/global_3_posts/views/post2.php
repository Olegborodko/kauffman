
  
  <div class="review-item-block g_mobile_margin_100 aos-init aos-animate" style="margin-top: 70px;margin-bottom: 0px;margin-right: 0px;margin-left: -20px;">
    <div class="review-item review-item--left" style="padding-left: 30px;padding-right: 0px;">
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
        <div class="review-item__dscr">
          <p>
            <span style="font-family: GTAmerica, Helvetica, Arial, sans-serif; font-size: 14px; color: #878889;">
              <?=get_field("short_text")?>
            </span>
          </p>
        </div>
        <a href="<?=get_post_permalink()?>" class="review-item__link">
          read more
        </a>
      </div>
    </div>
  </div>