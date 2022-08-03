<?php
/**
 *  add Wordpress custom-logo functionnality
 */

function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		//'height'      => 64,
		//'width'       => 64,
		//'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );
/**
 * Disable the emoji's
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	
	// Remove from TinyMCE
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter out the tinymce emoji plugin.
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

function remove_wp_block_library_css(){
wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'remove_wp_block_library_css' );
/**
 *  Enqueue files
 *  Your CSS and JS files goes here
 */
add_action('wp_enqueue_scripts', function () {

    wp_register_style('fonts', 'https://fonts.googleapis.com/css2??family=Inter&family=Manrope:wght@300;400;600;700&display=swap', false, 1);
    wp_enqueue_style('fonts');

    wp_register_style('styles', THEME_URI.'/style.min.css', false, 1);
    wp_enqueue_style('styles');

    wp_deregister_script('wp-embed');
    //wp_deregister_script('jquery');//dont deregister - necessary for gform ajax!!!!
    wp_register_script('jquery3', THEME_URI. '/inc/jquery.min.js', false);
    wp_enqueue_script('jquery3');
    /*
    wp_register_script('vendor', THEME_URI.'/js/vendor/vendor.min.js', ['jquery3'], null, true);
    wp_enqueue_script('vendor');
    //*/
    wp_enqueue_script('popper', THEME_URI.'/js/vendor/popper.min.js');
    wp_enqueue_script('popper');
    wp_enqueue_script('bootstrap', THEME_URI.'/js/vendor/bootstrap.min.js',['jquery3','popper']);
    wp_enqueue_script('bootstrap');

    wp_enqueue_script('fancybox', THEME_URI.'/js/vendor/jquery.fancybox.min.js',['jquery3']);
    wp_enqueue_script('fancybox');

    wp_register_script('aos', THEME_URI.'/js/vendor/aos.js', ['jquery3'], null, true);
    wp_enqueue_script('aos');
 
    wp_enqueue_script('slick', THEME_URI.'/js/vendor/slick.min.js',['jquery3']);
    wp_enqueue_script('slick');
  
    wp_register_script('scrollmagic', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js', ['jquery3'], null, true); 
    wp_enqueue_script('scrollmagic', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js',['jquery3']);
    wp_enqueue_script('scrollmagic');
  
    wp_register_script('scrollmagic-ind', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js', ['jquery3'], null, true);
    wp_enqueue_script('scrollmagic-ind', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js',['jquery3']);
    wp_enqueue_script('scrollmagic-ind');



//    wp_register_script('scripts', THEME_URI.'/js/custom/main.min.js', ['jquery3'/*,'vendor'//*/,'popper','bootstrap', 'aos','slick','fancybox'], null, true);
//    wp_enqueue_script('scripts');
  
    wp_register_script('scripts', THEME_URI.'/js/custom/main.js', ['jquery3'/*,'vendor'//*/,'popper','bootstrap', 'aos','slick','fancybox'], null, true);
    wp_enqueue_script('scripts');
/*
    wp_localize_script('scripts', 'Config', [
        'admin_ajax_url' => admin_url('admin-ajax.php'),
    ]);
//*/
});
/**
* Register Custom Navigation Walker
*/
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';


 
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
            height:240px; 
            background-size: 100%;
            background-repeat: no-repeat;
            padding-bottom: 30px;
            }
    </style>
<?php }
add_action('login_enqueue_scripts', 'login_logo');
add_filter('login_headertitle', '__return_empty_string');
add_filter('login_headerurl', 'get_home_url');


