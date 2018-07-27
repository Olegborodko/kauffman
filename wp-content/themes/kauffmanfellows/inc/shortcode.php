<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 5/10/2018
 * Time: 2:20 PM
 */



/**
 *
 * Create Right menu
 *
 * @param $atts
 * @param null $content
 * @return string
 */
function right_menu_shortcode($atts, $content=null)
{
    $attributes = shortcode_atts(
        array('links' => ''),
        $atts
    );
    $menuItems = explode(',', $attributes['links']);

    $menu = <<<MENU
<div id="sidemenu" class="d-none d-lg-block d-xl-block"><ul class="nav-side">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
</ul> 
</div>
MENU;
    return $menu;
}
add_shortcode('right_menu', 'right_menu_shortcode');

/**
 * Create list of team
 * @return string
 */
function team_list_function() {
    $team = New TeamView();
    return $team->getTeam();
}
add_shortcode('team_list', 'team_list_function');



function tab_list_function() {
    $fellowsList = new fellowmap();
    return $fellowsList->fellowCountry();
}
add_shortcode('tab_list', 'tab_list_function');



function fellows_derectory_table(){
    $fellowsList = new fellowmap();
    return $fellowsList->fellowTable();
}

add_shortcode('fellow_table', 'fellows_derectory_table');


/**
 * Create shortcut for map
 */
function map($atts, $content=null){
    $baseURL = get_stylesheet_directory_uri();
    $attributes = shortcode_atts(
        array('country' => ''),
        $atts
    )['country'];

    $map = <<<MAP
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="$baseURL/assets/lib/jqvmap/dist/jquery.vmap.js"></script>
    <script type="text/javascript" src="$baseURL/assets/lib/jqvmap/dist/maps/jquery.vmap.world.js" charset="utf-8"></script>
    <script type="text/javascript" src="$baseURL/assets/lib/jqvmap/jquery.vmap.sampledata.js"></script>

    <script>
      jQuery(document).ready(function () {
          var data = { $attributes }
        jQuery('#vmap').vectorMap({
          map: 'world_en',
          backgroundColor: '',
          color: '#ffffff',
          hoverOpacity: 0.7,
          selectedColor: '',
          enableZoom: true,
          showTooltip: true,
          scaleColors: ['#C8EEFF', '#006491'],
          values: data,
          normalizeFunction: 'polynomial',
          onLabelShow: function(event, label, code)
            {              
                if (undefined == data[code])
                {
                    event.preventDefault();
                }
                else if (data[code])
                {
                    label.text(label[0].innerHTML + " " + data[code]);
                }
            }
        });
      });
    </script>
 <div id="vmap" style="width: 100%;"></div>
MAP;
    return $map;
}
add_shortcode('map', 'map');



function vc_fellow_addons() {
    require_once( __DIR__ . '/../render/textbox.php');
    require_once( __DIR__ . '/../render/bluebox.php');
    require_once( __DIR__ . '/../render/blockphoto.php');
}
add_action( 'init',  'vc_fellow_addons' );