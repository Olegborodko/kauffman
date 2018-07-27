<?php if (!defined('FW')) {
  die('Forbidden');
}

if ( empty( $atts['items'] ) ) {
  return;
}

$top = 0;
if ( ! empty( $atts['top'] ) ) {
  $top = (int) $atts['top'];
}

$space = 0;
if ( ! empty( $atts['space'] ) ) {
  $space = (int) $atts['space'];
}
?>

<div class="apply_section_right_fixed lavalamp-menu" style="top: <?=$top?>px">
  <nav id="js_fixed_menu">
    <ul>
      <?php
      $isFirst = true;
      foreach ( $atts['items'] as $key => $value ) {
        ?>
        <li id="<?=$value['link_id']?>" style="margin-right: <?=$space?>px">
          <?=$value['link_text']?>
        </li>
        <?php
      }
      ?>
    </ul>
  </nav>
</div>
<div class="apply_section_right_line"></div>