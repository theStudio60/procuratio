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


// wpml language list navbar
function languages_list_navbar_mobile(){
  $languages = icl_get_languages('skip_missing=0&orderby=id&order=ASC');
  if(!empty($languages)){
    echo '<ul id="navbar__language-list" class="d-flex d-lg-none mr-0">';
    foreach($languages as $l){
       //echo '<li class=" ">';
      if($l['language_code']){


        if($l['language_code'] == 'it-it'){
          $l['language_code'] = 'IT';
        }
        if($l['language_code'] == 'fr-fr'){
          $l['language_code'] = 'FR';
        }
        if($l['language_code'] == 'en-en'){
          $l['language_code'] = 'EN';
        }
        

        //if(!$l['active']) echo '<a class="navbar__language-list__item" href="'.$l['url'].'">';
        //echo icl_disp_language($l['language_code']);
        //if(!$l['active']) echo '</a>';
      }
      //echo '';

      //*
      
      if(!$l['active']) :
        echo '<li class="nav-link" ><a style=" text-decoration:none; text-transform:uppercase;" class=" " href="'.$l['url'].'">';
        echo icl_disp_language($l['language_code']);
        //if(!$l['active']) 
        echo '</a></li>';
      endif;
    //*/
    if( $l['active']) :
    echo '<li class="nav-link" ><a style=" text-decoration:underline; text-transform:uppercase;" class=" " href="'.$l['url'].'">';
    echo icl_disp_language($l['language_code']);
    //if(!$l['active']) 
    echo '</a></li>';
    endif;
   //echo '</li>';
    }
    echo '</ul>';
  }
}

    function languages_list_navbar(){
      $languages = icl_get_languages('skip_missing=0&orderby=id&order=ASC');
      if(!empty($languages)){
        echo '<ul id="navbar__language-list" class="w-25 d-block d-lg-flex p-0 ml-0 ml-lg-auto mr-auto">';
        foreach($languages as $l){
           //echo '<li class=" ">';
          if($l['language_code']){


            if($l['language_code'] == 'it-it'){
              $l['language_code'] = 'IT';
            }
            if($l['language_code'] == 'fr-fr'){
              $l['language_code'] = 'FR';
            }
            if($l['language_code'] == 'en-en'){
              $l['language_code'] = 'EN';
            }
            

            //if(!$l['active']) echo '<a class="navbar__language-list__item" href="'.$l['url'].'">';
            //echo icl_disp_language($l['language_code']);
            //if(!$l['active']) echo '</a>';
          }
          //echo '';

          //*
          
          if(!$l['active']) :
            echo '<li class="nav-link" ><a style=" text-decoration:none; text-transform:uppercase;" class=" " href="'.$l['url'].'">';
            echo icl_disp_language($l['language_code']);
            //if(!$l['active']) 
            echo '</a></li>';
          endif;
        //*/
        if( $l['active']) :
        echo '<li class="nav-link" ><a style=" text-decoration:underline; text-transform:uppercase;" class=" " href="'.$l['url'].'">';
        echo icl_disp_language($l['language_code']);
        //if(!$l['active']) 
        echo '</a></li>';
        endif;
       //echo '</li>';
        }
        echo '</ul>';
      }
    }

// hide wpml bug

add_filter( 'wpml_custom_field_original_data', '__return_null' );
