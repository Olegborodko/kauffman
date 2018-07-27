<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Entrepreneur
 * @since Entrepreneur 1.0
 */
?>
</div><!-- #main -->
<?php if (get_page_template_slug() != 'template-landing-page.php' || is_search()): ?>
    <footer id="footer" class="site-footer">
        <?php
			get_sidebar('footer');
		?>
        <div class="footer-inner">
            <div class="container">
                <p class="copyright"><span class="copyright-date"><?php _e('&copy; Copyright', 'entrepreneur-lite'); ?> <?php
                        $mp_entrepreneur_dateObj = new DateTime;
                        $mp_entrepreneur_year = $mp_entrepreneur_dateObj->format("Y");
                        echo $mp_entrepreneur_year;
                        ?>
                    </span>
                    <?php
                    ?>
                      <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>" target="_blank"><?php bloginfo('name'); ?></a>
                      <?php printf(__('&#8226; Designed by', 'entrepreneur-lite')); ?> <a href="<?php echo esc_url(__('https://motopress.com/', 'entrepreneur-lite' )); ?>" rel="nofollow" title="<?php esc_attr_e('Premium WordPress Plugins and Themes', 'entrepreneur-lite' ); ?>"><?php _e('MotoPress', 'entrepreneur-lite'); ?></a>
                      <?php printf(__('&#8226; Proudly Powered by ',  'entrepreneur-lite')); ?><a href="<?php echo esc_url(__('http://wordpress.org/', 'entrepreneur-lite')); ?>"  rel="nofollow" title="<?php esc_attr_e('Semantic Personal Publishing Platform', 'entrepreneur-lite' ); ?>"><?php _e('WordPress',  'entrepreneur-lite' ); ?></a>
                      <?php
                    ?>
                </p><!-- .copyright -->
            </div>
        </div>
    </footer>
<?php endif; ?>
</div>
<?php wp_footer(); ?>
</body>
</html>