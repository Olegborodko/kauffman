<?php if (!defined('FW')) die('Forbidden');

if (!is_admin()) {
  wp_register_style(
  'fw-ext-builder-frontend-grid',
  get_template_directory_uri() .'/framework-customizations/extensions/builder/static/css/frontend-grid.css',
  array(),
  fw()->theme->manifest->get_version()
  );
}