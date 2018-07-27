<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kauffman
 */

get_header('scroll-menu');
?>

  <div class="home_section main_background center_container">
    <div class="on_right_now">
      what’s on right now <div class="on_right_now_line"></div>
    </div>

<?php
//		while ( have_posts() ) :
//			the_post();
//			get_template_part( 'template-parts/content', 'home' );
//		endwhile; // End of the loop.
?>

    <div class="row">
      <div class="col-xs-12 col-lg-7">
        <div class="blue_line"></div>
        <div class="fostering_a g_title">
          Fostering a worldwide network of diverse
          venture capitalists, leaders & innovators
          through education and inspiration.
        </div>
      </div>
      <div class="col-xs-12 col-lg-5">

      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-lg-7">
        <ul class="israel_global_s g_relative">
          <li class="title">
            Israel Global Summit
          </li>
          <li class="text">
            Global hotbed of technology and entrepreneurial spirit.
          </li>
          <li class="g_relative">
            <img class="img22_27" src="<?php echo get_stylesheet_directory_uri(); ?>/img/22_27.png"/>
          </li>
          <li class="israel">
            Israel
          </li>
        </ul>

        <div class="block_player g_relative">
          <img class="s_player" src="<?php echo get_stylesheet_directory_uri(); ?>/img/home_slider.png"/>
          <img class="s_money" src="<?php echo get_stylesheet_directory_uri(); ?>/img/home_money.png"/>
          <div class="title">
            Spend your seed capital wisely
            or risk starving down the road
          </div>
          <div class="text">
            <span class="link_underline">
              <a class="link_block" href="#">
                see what Kate Mitchell had to say
              </a>
            </span>
          </div>
        </div>

        <div class="block_class g_relative">
          <img class="img_class" src="<?php echo get_stylesheet_directory_uri(); ?>/img/class.png"/>
          <a href="" class="apply">
            apply
          </a>
          <div class="link">
            <span class="link_underline">
              <a class="link_block" href="#">
                Kauffman Foundation Scholarship Program
              </a>
            </span>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-lg-5">
        <div class="g_relative man_block">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/man_home.png"/>
        </div>

        <div class="ten_block">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ten.png"/>
          <div class="interactive">
            Interactive and comprehensive
            community platform
          </div>
        </div>
      </div>
    </div>

  </div>




<?php
get_footer();
?>