<?php
/**
 * The searchform template file.
 * @package Entrepreneur
 * @since Entrepreneur 1.0.0
 */
?>
<form method="get" class="search-form" action="<?php echo esc_url( home_url('/') ); ?>">
    <input type="text" class="search-field" placeholder="<?php echo esc_attr_x('Keywords:', 'placeholder','entrepreneur-lite') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label','entrepreneur-lite') ?>" />
    <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
</form>