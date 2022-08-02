<?php
/**
 *  Remove all widgets, saving db queries
 */
add_action('widgets_init', function () {
    unregister_widget('WP_Widget_Pages');
    unregister_widget('WP_Widget_Calendar');
    unregister_widget('WP_Widget_Archives');
    unregister_widget('WP_Widget_Links');
    unregister_widget('WP_Widget_Meta');
    unregister_widget('WP_Widget_Search');
    unregister_widget('WP_Widget_Text');
    unregister_widget('WP_Widget_Categories');
    unregister_widget('WP_Widget_Recent_Posts');
    unregister_widget('WP_Widget_Recent_Comments');
    unregister_widget('WP_Widget_RSS');
    unregister_widget('WP_Widget_Tag_Cloud');
    unregister_widget('WP_Nav_Menu_Widget');
}, 1);

/**
 * Register menus
 */
add_action('init', function () {
    register_nav_menu('header-menu', __('Header Menu'));
});

/**
 * Desactivation de gutenberg
*/
add_filter('use_block_editor_for_post_type', 'disable_block_editor');
function disable_block_editor($use_block_editor) {
  return false;
}

/**
 *  Add ACF options pages
 */

acf_add_options_page(array(
		'page_title' 	=> 'Réglages du Site',
		'menu_title'	=> 'Réglages du site',
		'menu_slug' 	=> 'site-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
));
