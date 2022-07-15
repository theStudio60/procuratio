<?php 

/**
 *  Removing the admin bar
 */
 add_filter('show_admin_bar', '__return_false');

/**
 *  Custom login logo
 */
 
function login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png);
            height:20px; 
            background-size: 100%;
            background-repeat: no-repeat;
            padding-bottom: 30px;
            }
    </style>
<?php }
add_action('login_enqueue_scripts', 'login_logo');
add_filter('login_headertitle', '__return_empty_string');
add_filter('login_headerurl', 'get_home_url');

/**
 *  Sanitize file name, remove accents
 */
add_filter('sanitize_file_name', 'remove_accents');
/**
 *   add pages shortcuts in wp admin menu
 */
//*(STAGE) 

add_action( 'admin_menu', 'register_page_menu_item' );
function register_page_menu_item() {

add_menu_page( 
      'homepage', 
      'Page d\'accueil', 
      'edit_pages', 
      'post.php?post=39&action=edit', 
      '', 
      'dashicons-admin-home', 
      3
  );
add_menu_page( 
    'about', 
    'Page Qui sommes-nous', 
    'edit_pages', 
    'post.php?post=163&action=edit', 
    '', 
    'dashicons-admin-page', 
    4
);

add_menu_page( 
  'formations', 
  'Page Centre Compétence', 
  'edit_pages', 
  'post.php?post=165&action=edit', 
  '', 
  'dashicons-admin-home', 
  5
);

add_menu_page( 
  'healthcare', 
  'Page Soins', 
  'edit_pages', 
  'post.php?post=167&action=edit', 
  '', 
  'dashicons-admin-home', 
  6
);

    add_menu_page( 
      'messages', 
      'Messages', 
      'edit_pages', 
      'admin.php?page=gf_entries&view=entries&id=1', 
      '', 
      'dashicons-email', 
       997
  );
  add_menu_page( 
      'déconnexion', 
      'Déconnexion', 
      'edit_pages', 
      '../wp-login.php?action=logout', 
      '', 
      'dashicons-exit', 
       999
  ); 
}
add_action( 'admin_menu', 'register_page_menu_item' );
//*/
/**
 * Include ACF fields
 */
if (function_exists('acf_add_local_field_group')) {
    $acf_files = glob(__dir__.'/functions/acf/*.php');
    foreach ($acf_files as $filename) {
        include $filename;
    }
}

/**
 * Wordpress admin panel limitations
 */
//hide some buttons
function hide_buttons()
{
global $current_screen;

if($current_screen->id == 'page');
{
echo '<style>.page-title-action{display: none;}</style>'; //NEW PAGE
echo '<style>#insert-media-button{display: none;}</style>'; //MEDIA
echo '<style>.update-nag{display: none;}</style>'; //update notice
echo '<style>#contextual-help-link{display: none;}</style>'; //help  tabs
echo '<style>.metabox-prefs{display: none;}</style>'; // 
echo '<style>.gf_dashboard_button .button{display: none;}</style>'; //NEW PAGE
}

// for posts the if statement would be:
// if($current_screen->id == 'edit-post' && !current_user_can('publish_posts'))
}
add_action('admin_head','hide_buttons');

/**
 * Hide the admin bar on the front-end
 * @link https://codex.wordpress.org/Function_Reference/show_admin_bar
 */
add_filter( 'show_admin_bar', '__return_false' );
/**
 * Hide or create new menus and items in the admin bar.
 */

add_action( 'wp_before_admin_bar_render', function () {
  global $wp_admin_bar;

  $wp_admin_bar->remove_menu( 'wp-logo' );            // Remove the WordPress logo
  $wp_admin_bar->remove_menu( 'about' );            // Remove the about WordPress link
  $wp_admin_bar->remove_menu( 'wporg' );            // Remove the about WordPress link
  $wp_admin_bar->remove_menu( 'documentation' );    // Remove the WordPress documentation link
  $wp_admin_bar->remove_menu( 'support-forums' );   // Remove the support forums link
  $wp_admin_bar->remove_menu( 'feedback' );         // Remove the feedback link

  //$wp_admin_bar->remove_menu( 'site-name' );          // Remove the site name menu
  $wp_admin_bar->remove_menu( 'view-site' );        // Remove the view site link
  $wp_admin_bar->remove_menu( 'dashboard' );        // Remove the dashboard link
  $wp_admin_bar->remove_menu( 'menus' );            // Remove the menus link
 
  $wp_admin_bar->remove_menu( 'customize' );          // Remove the site name menu
 
  $wp_admin_bar->remove_menu( 'updates' );            // Remove the updates link
  $wp_admin_bar->remove_menu( 'comments' );           // Remove the comments link
  
  $wp_admin_bar->remove_menu( 'new-content' );        // Remove the content link
  $wp_admin_bar->remove_menu( 'new-post' );         // Remove the new post link
  $wp_admin_bar->remove_menu( 'new-media' );        // Remove the new media link
  $wp_admin_bar->remove_menu( 'new-page' );         // Remove the new page link
  $wp_admin_bar->remove_menu( 'new-user' );         // Remove the new user link

  $wp_admin_bar->remove_menu( 'edit' );               // Remove the edit link

  $wp_admin_bar->remove_menu( 'my-account' );         // Remove the user details tab
  $wp_admin_bar->remove_menu( 'search' );             // Remove the search tab

  $wp_admin_bar->remove_menu( 'gform-forms' );             // Remove gform menu

 

}, 999); // Needs to have low priority

/*************************************************************/
/*  custom color swatches in Wysiwyg */
/***********************************************************/

function my_mce4_options($init) {

    $custom_colors = '
        "3C3C3C", "Normal",
        "000", "Noir",
        "fff", "Blanc",
        "00707D" , "Bleu Pétrole",
        "00AE9B" , "Teal Paisible"
    ';

    // build color grid default+custom colors
    $init['textcolor_map'] = '['.$custom_colors.']';

    // change the number of rows in the grid if the number of colors changes
    // 8 swatches per row
    $init['textcolor_rows'] = 3;

    return $init;
}
add_filter('tiny_mce_before_init', 'my_mce4_options');

 
/**
 * Hide admin menu items. Can be both parents and children in dropdowns.
 * Specify link to parent and link to child.
 * @link https://codex.wordpress.org/Function_Reference/remove_menu_page
 */

//*(STAGE) 
function remove_menus(){
// get current login user's role
  $roles = wp_get_current_user()->roles;
 
  // test role
  if( !in_array('editor',$roles)){
  return;
  }
  // Remove Dashboard
  remove_menu_page( 'index.php' );
  // Remove Dashboard -> Update Core notice
  remove_submenu_page( 'index.php', 'update-core.php' );
  // Remove Posts
  remove_menu_page( 'edit.php' );
  // Remove Posts -> New post
  remove_submenu_page( 'edit.php', 'post-new.php' );
  // Remove Posts -> Categories
  remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=category' );
  // Remove Posts -> Tags
  remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=post_tag' );
  // Remove Media
  //remove_menu_page( 'upload.php' );
  // Remove Media -> Library
  //remove_submenu_page( 'upload.php', 'upload.php' );
  // Remove Media -> Add new media
  //remove_submenu_page( 'upload.php', 'media-new.php' );

  // Remove Pages
  remove_menu_page( 'edit.php?post_type=page' );
  // Remove Pages -> All pages
  remove_submenu_page( 'edit.php?post_type=page', 'edit.php?post_type=page' );
  // Remove Pages -> Add new page
  remove_submenu_page( 'edit.php?post_type=page', 'post-new.php?post_type=page' );
  // Remove Comments
  remove_menu_page( 'edit-comments.php' );

  // Remove Appearance
  remove_menu_page( 'themes.php' );
  // Remove Appearance -> Themes
  remove_submenu_page( 'themes.php', 'themes.php' );
  // Remove Appearance -> Customize
  remove_submenu_page( 'themes.php', 'customize.php?return=' . urlencode( $_SERVER['REQUEST_URI'] ) );

  // Remove Appearance -> Widgets
  remove_submenu_page( 'themes.php', 'widgets.php' );
  // Remove Appearance -> Menus
  remove_submenu_page( 'themes.php', 'nav-menus.php.php' );
  // Remove Appearance -> Editor
  remove_submenu_page( 'themes.php', 'theme-editor.php' );

  
  // Remove Plugins
  remove_menu_page( 'plugins.php' );
  // Remove Plugins -> Installed plugins
  remove_submenu_page( 'plugins.php', 'plugins.php' );
  // Remove Plugins -> Add new plugins
  remove_submenu_page( 'plugins.php', 'plugin-install.php' );
  // Remove Plugins -> Plugin editor
  remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
   
  // Remove Users
  
  remove_menu_page( 'users.php' );
  // Remove Users -> Users
  remove_submenu_page( 'users.php', 'users.php' );
  // Remove Users -> New user
  remove_submenu_page( 'users.php', 'user-new.php' );
  // Remove Users -> Your profile
  remove_submenu_page( 'users.php', 'profile.php' ); 
  
  // Remove profile page
  remove_menu_page( 'profile.php' );

  // Remove Tools
  remove_menu_page( 'tools.php' );
  // Remove Tools -> Available Tools
  remove_submenu_page( 'tools.php', 'tools.php' );
  // Remove Tools -> Import
  remove_submenu_page( 'tools.php', 'import.php' );
  // Remove Tools -> Export
  remove_submenu_page( 'tools.php', 'export.php' );

  // Remove Settings
  remove_menu_page( 'options-general.php' );
  // Remove Settings -> Writing
  remove_submenu_page( 'options-general.php', 'options-writing.php' );
  // Remove Settings -> Reading
  remove_submenu_page( 'options-general.php', 'options-reading.php' );
  // Remove Settings -> Discussion
  remove_submenu_page( 'options-general.php', 'options-discussion.php' );
  // Remove Settings -> Media
  remove_submenu_page( 'options-general.php', 'options-media.php' );
  // Remove Settings -> Permalinks
  remove_submenu_page( 'options-general.php', 'options-permalink.php' );

  // Remove CPTUI menu item
  remove_menu_page( 'cptui_main_menu' ); 

 }
add_action( 'admin_menu', 'remove_menus' , 100 );
/*
 * These 2 filters and 1 function move the built in WordPress admin pages to
 * the top so they don't get pushed down the menu every time a new plugin is installed.
 * Activates the 'menu_order' filter and then hooks into 'menu_order'
 */
add_filter('custom_menu_order', function() { return true; });
add_filter('menu_order', 'my_new_admin_menu_order');
/**
 * Filters WordPress' default menu order
 */
function my_new_admin_menu_order( $menu_order ) {
  // define your new desired menu positions here
  // for example, move 'upload.php' to position #9 and built-in pages to position #1
  $new_positions = array(
    'upload.php' => 1,  // Media 
  );
  // helper function to move an element inside an array
  function move_element(&$array, $a, $b) {
    $out = array_splice($array, $a, 1);
    array_splice($array, $b, 0, $out);
  }
  // traverse through the new positions and move 
  // the items if found in the original menu_positions
  foreach( $new_positions as $value => $new_index ) {
    if( $current_index = array_search( $value, $menu_order ) ) {
      move_element($menu_order, $current_index, $new_index);
    }
  }
  return $menu_order;
};
/**
 *   GRAVITY_FORM
 */
//*(STAGE) 
// Give access to the editor
function add_gf_cap()
{
    $role = get_role( 'editor' );
    $role->add_cap( 'gform_full_access' );
}
add_action( 'admin_init', 'add_gf_cap' );

// hide GForm button from wysiwyg
add_filter( 'gform_display_add_form_button', function(){return false;} );

 // hide GForm menu pages for editors
function hide_gform_menu_pages(){
  global $current_screen;

  $roles = wp_get_current_user()->roles;
  // test role
  if( !in_array('editor',$roles)){
  return;
  }
  remove_menu_page( 'gf_edit_forms' ); // GRAVITY FORMS
  remove_submenu_page( 'gf_edit_forms', 'gf_settings' ); // GRAVITY FORMS
  remove_submenu_page( 'gf_edit_forms', 'gf_export' ); // GRAVITY FORMS
  remove_submenu_page( 'gf_edit_forms', 'gf_update' ); // GRAVITY FORMS
  remove_submenu_page( 'gf_edit_forms', 'gf_addons' ); // GRAVITY FORMS
  remove_submenu_page( 'gf_edit_forms', 'gf_help' ); // GRAVITY FORMS


  if($current_screen->id == 'page');{
  //*
    echo '<style>#add_gform{display: none;}</style>'; //GFORM
    echo '<style>.gform-settings-header{display: none;}</style>'; //header gform

    echo '<style>#gf-admin-notices-wrapper{display: none;}</style>'; //dashboard notice
    echo '<style>div.form-list-head,div.form-list-nav{display: none;}</style>'; //
    echo '<style>#gform-form-toolbar{display: none;}</style>'; //toolbar 
    echo '<style>tfoot{display: none;}</style>'; //table footer
    echo '<style>#entry_search_container{display: none!important;}</style>'; //
    echo '<style>#entry_list_form .column-column_selector{display: none!important;}</style>'; //
    echo '<style>.gform-settings-panel__content #form_list_form .tablenav, .gform-settings-panel__content#entry_list_form .tablenav{display: none!important;}</style>'; //
    echo '<style>a .gf_dashboard_button .button{display: none!important;}</style>'; //
 
  }

}
add_action( 'admin_menu', 'hide_gform_menu_pages' , 100 );

/**
 *  Hide ACF settings menu
 */
//*(STAGE)
//add_filter('acf/settings/show_admin', '__return_false');
//*/

/**
 * Remove left admin footer text
 */
add_filter( 'admin_footer_text', '__return_empty_string' ); 
// add some text instead of the WordPress version
function custom_footer ($default) {
  $url=('<a href=https://studio60.ch>STUDIO60</a>');
	return $url;
}
add_filter ('update_footer', 'custom_footer', 999);

//*


// function to remove the dashboard widgets, but only for non-admin users
// if you want to remove the widgets for admin(s) too, remove the 'if' statement within the function
function remove_dashboard_widgets() {
	if ( ! current_user_can( 'manage_options' ) ) {	
    /**
     *  Remove widgets from dashboard
     */

    remove_action('welcome_panel', 'wp_welcome_panel');
    remove_meta_box('dashboard_activity', 'dashboard', 'side');
    remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');
    remove_meta_box('dashboard_incoming_links', 'dashboard', 'side');
    remove_meta_box('dashboard_plugins', 'dashboard', 'side');
    remove_meta_box('dashboard_primary', 'dashboard', 'side');
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');
    remove_meta_box('dashboard_right_now', 'dashboard', 'side');
    remove_meta_box('dashboard_secondary', 'dashboard', 'side');
    remove_meta_box('icl_dashboard_widget', 'dashboard', 'side');

    /**
     *  Remove widgets from post
     */
    remove_meta_box('commentsdiv', 'post', 'side');
    remove_meta_box('cryptx', 'post', 'side');
    remove_meta_box('icl_div_config', 'post', 'side');
    remove_meta_box('revisionsdiv', 'post', 'side');
    remove_meta_box('tagsdiv-post_tag', 'post', 'normal');

    /**
     *  Remove widgets from pages
     */
    remove_meta_box('icl_div_config', 'page', 'normal');
//
	}
}
// 
add_action( 'wp_dashboard_setup', 'remove_dashboard_widgets' );

/**
 *  Callback : Remove unneeded columns
 */
//*
function wp_remove_wp_columns($columns)
{
    unset($columns['comments']);
    unset($columns['tags']);
    unset($columns['author']);
    unset($columns['date']);
    return $columns;
}
 
add_action('admin_init', function () {
    add_filter('manage_posts_columns', 'wp_remove_wp_columns');
    add_filter('manage_pages_columns', 'wp_remove_wp_columns');
});
//*/
 

 
// Update CSS within in Admin
function admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/functions/editor.css');
}
add_action('admin_enqueue_scripts', 'admin_style');
 


//add_action('map_meta_cap', 'custom_manage_privacy_options', 1, 4);
//function custom_manage_privacy_options($caps, $cap, $user_id, $args)
//{
//  $user_meta = get_userdata($user_id);
//  if (array_intersect(['editor', 'administrator'], $user_meta->roles)) {
//    if ('manage_privacy_options' === $cap) {
//      $manage_name = is_multisite() ? 'manage_network' : 'manage_options';
//      $caps = array_diff($caps, [ $manage_name ]);
//    }
//  }
//  return $caps;
//}