<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package studio_soixante
 */
 // $parent_title = get_the_title($post->post_parent);

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php wp_head(); ?> 
</head> 
<?php get_template_part('partials/preloader/preloader','style'); ?>
<?php get_template_part('partials/preloader/preloader','script'); ?>
<body class="page-wrapper">
  <?php wp_body_open(); ?>
<?php
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  //$logotype_d = wp_get_attachment_image_src( $custom_logo_id , 'full' );
  $logotype_d = THEME_URI . "/images/logo-procuratio-black.png"; 
  $logotype_w = THEME_URI . "/images/logo-procuratio-black.png"; 
  $logotype_b = THEME_URI . "/images/logo-procuratio-black.png"; 
  $logotype = $logotype_d ; 
  $logotypeMobile = $logotype;
  $bg_color="";
  $bg_color_mobile="";
  $position="";
?>
<?php if ( is_front_page() ) : ?>
  <?php // get_template_part('partials/nav/overheader'); ?>
  <?php $bg_color =  "transparent"?>
  <?php $bg_color_mobile =  "light"?>
  <?php $position =  "absolute;z-index:40" ?>
  <?php $logotype = $logotype_w; ?>
  <?php $logotypeMobile = $logotype_d; ?>
  <style>
    a.nav-link{color:#00ae9b!important;}
    .current-menu-item-active a { border-left:solid 2px #00ae9b; }
    .mobile-menu {background:#e5f3f3!important; }
  </style>  
<?php elseif (is_page_template('healthcare-page.php') ):?>
  <?php $bg_color = "primary"; ?>
  <?php $bg_color_mobile = "primary"; ?>
  <?php $position =  "fixed;z-index:40;top:0;" ?>
  <?php $logotype = $logotype_w; ?>
  <?php $logotypeMobile = $logotype_w; ?>
  <style>
    .mobile-menu {background:#00ae9b!important; }
    a.nav-link{color:#fff!important;}
    .current-menu-item-active a { border-left:solid 2px #fff; }
  </style>  
<?php  elseif (is_page_template('formations-page.php') ):?>
  <?php $bg_color =  "secondary"?>
  <?php $bg_color_mobile =  "secondary"?>
  <?php $position =  "fixed;z-index:40;top:0;" ?>
  <?php $logotype = $logotype_w; ?>
  <?php $logotypeMobile = $logotype_w; ?>
  <style>
    .mobile-menu {background:#00707d!important; }
    a.nav-link{color:#fff!important;}
    .current-menu-item-active a { border-left:solid 2px #fff; }
  </style>  
<?php  elseif (is_page_template('contact-page.php') ):?>
  <?php $bg_color =  "white"?>
  <?php $bg_color_mobile =  "white"?>
  <?php $position =  "fixed;z-index:40;top:0;" ?>
  <?php $logotype = $logotype_d; ?>
  <?php $logotypeMobile = $logotype_d; ?>
  <style>
    .header__menu .menu-item a.nav-link {color:#343a40!important;}
    a.nav-link{color:#00ae9b!important;}
    .current-menu-item-active a { border-left:solid 2px #343a40!important; }
    .mobile-menu {background:#e5f3f3!important; }
  </style>  
<?php else : ?>
  <?php $bg_color =  "white"?>
  <?php $bg_color_mobile =  "white"?>
  <?php $position =  "fixed;z-index:40;top:0;" ?>
  <?php $logotype = $logotype_d; ?>
  <?php $logotypeMobile = $logotype_d; ?>
  <style>.header__menu .menu-item a.nav-link {color:#343a40!important;}
    a.nav-link{color:#00ae9b!important;}
    .current-menu-item-active a { border-left:solid 2px #00ae9b; }
    .mobile-menu {background:#e5f3f3!important; }
  </style>  
<?php  endif?> 
  <header id="masthead" class="header navbar bg-<?= $bg_color?>" style="position:<?= $position ?> ">
    <div class="header__container">
      <div class="header__row"> 
        <div class="header__brand">
          <a href="<?= get_home_url() ?>">
            <div class=" header__brand__logo">
              <img width="auto" height="64px" class=""  src="<?= $logotype ?>" alt="<?= get_bloginfo() ?>">
            </div>
          </a>
        </div>
        <div class="header__menu">
          <?php
          wp_nav_menu( array(
          'theme_location'  => 'header-menu',
          'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
          'container'       => 'nav',
          'container_class' => '',
          'container_id'    => 'navMenu',
          'menu_class'      => 'header__menu ',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
          ));
 
          ?>  
        </div>
        <?php get_template_part('partials/nav/cta','header')?>
      </div>
    </div>    
  </header>
  <header id="masthead" class="header-mobile bg-<?= $bg_color_mobile?>" >
    <div class="header-mobile__container"> 
      <div class="header-mobile__row "> 
        <div class="header-mobile__brand mr-auto">
          <a href="<?= get_home_url() ?>" onclick="closeMenu()" >
            <div class=" header-mobile__brand__logo">
              <img    class=""  src="<?= $logotypeMobile ?>" alt="<?= get_bloginfo() ?>">
            </div>
          </a>
        </div>
        <div class="d-flex p-0 ml-auto">
          <?php get_template_part('partials/nav/cta','headerMobile')?>
          <span class="p-1"></span>
          <div onclick="openMenu()" title="toggle menu" id="burger" class="header-mobile__burger  header-mobile__burger--visible"  aria-expanded="false">
            <?php if (is_page_template('healthcare-page.php') ):?>
              <?php  get_template_part('partials/nav/burger','light'); ?>
            <?php  elseif (is_page_template('formations-page.php') ):?>
              <?php get_template_part('partials/nav/burger','light'); ?>
            <?php else : ?>
              <?php get_template_part('partials/nav/burger','dark'); ?>
            <?php  endif?>
          </div>

          <div onclick="closeMenu()" title="close menu" id="close" class="header-mobile__burger  header-mobile__burger--hidden"  aria-expanded="false"> 
            <?php if (is_page_template('healthcare-page.php') ):?>
              <?php  get_template_part('partials/nav/close','light'); ?>
            <?php  elseif (is_page_template('formations-page.php') ):?>
              <?php get_template_part('partials/nav/close','light'); ?>
            <?php else : ?>
              <?php get_template_part('partials/nav/close','dark'); ?>
            <?php  endif?>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div id="overlayMenu" class="mobile-menu mobile-menu--hidden " style=" ">
    <div class="mobile-menu__menu">        
      <?php wp_nav_menu( array(
      'theme_location'  => 'header-menu',
      'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
      'container'       => ' ',
      'container_class' => ' ',
      'container_id'    => 'navMenu',
      'menu_class'      => ' ',
      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
      'walker'          => new WP_Bootstrap_Navwalker(),
      ));?>  
    </div>
  </div>
  <script>
/*
    $('.dropdown').mouseenter(function(){ $(this).find('.dropdown-menu').show();}) 
    $('.dropdown').mouseleave(function(){ 
      $(this).find('.dropdown-menu').hide();
    }) ; 
//*/
  </script>
        <?php get_template_part('partials/elements/popup','appointment')?>


  <?php get_template_part('partials/nav/btn','scollToTop')?>
<?php 
