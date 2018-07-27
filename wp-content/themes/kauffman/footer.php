<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kauffman
 */

?>

<footer class="site-footer center_container">
  <div class="display_table w_100">
    <div class="display_table_row">
      <div class="block1">
        <div class="b_inside">
          <div class="blue_line"></div>
          <div class="menu_footer">
          <?php
          if (is_active_sidebar('footer_left')){
            dynamic_sidebar('footer_left');
          }
          ?>
          </div>
        </div>
      </div>

      <div class="block2">
        <div class="b_inside b_inside2">
          <div class="blue_line"></div>

          <div class="footer_about">
            <div class="footer_about__telephone">
              <b>Telephone:</b><br>
              <?=fw_get_db_settings_option('telephone')?>
            </div>

            <div class="footer_about__address">
              <b>Address:</b><br>
              <?=fw_get_db_settings_option('address')?>
            </div>
          </div>
        </div>
      </div>

      <div class="block3">
        <div class="b_inside b_inside3">
          <div class="blue_line"></div>

          <ul class="icons">
            <li>
              <a href="<?=fw_get_db_settings_option('twitter_link')?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/shape.png"/>
              </a>
            </li>
            <li>
              <a href="<?=fw_get_db_settings_option('linkedin_link')?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linkedin.png"/>
              </a>
            </li>
<!--            <li>-->
<!--              <a href="--><?//=fw_get_db_settings_option('facebook_link')?><!--">-->
<!--                <img src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/img/facebook.png"/>-->
<!--              </a>-->
<!--            </li>-->
          </ul>
          <div class="site-footer__mail_chimp">
            <?=do_shortcode(fw_get_db_settings_option('mail_chimp'))?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="copyright">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_ico.png"/>
    <div class="text">
      <?=fw_get_db_settings_option('copyright')?>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121426691-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-121426691-1');
</script>

</body>
</html>
