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
<html <?php language_attributes(); ?> style="scroll-behavior: smooth;">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?= THEME_URI ?>/inc/fa/css/font-awesome.min.css">
	<style>
		#menu-main-nav {
			padding-top: 2% !important;
		}

		#language_list {
			padding-top: 1%;
		}

	</style>

</head>
<?php get_template_part('partials/preloader/preloader','style'); ?>
<?php get_template_part('partials/preloader/preloader','script'); ?>
<body class="page-wrapper">
  <?php wp_body_open(); ?>
  <?php
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  //$logotype_d = wp_get_attachment_image_src( $custom_logo_id , 'full' );
  $logotype_d = THEME_URI . "/images/logo-procuratio-black.png";
 // $logotype_w = THEME_URI . "/images/logo-procuratio-white.png";
  $logotype_w = THEME_URI . "/images/Procuratio-Finance-blanc.svg";
  $logotype_b = THEME_URI . "/images/logo-procuratio-blue.png";
  $logotype = $logotype_b;
  $logotypeMobile = $logotype_b;
  $bg_color="";
  $bg_color_mobile="";
  $position="";
  ?>


  <header id="masthead" class="header px-0 m-0 " style="height:128px">
    <script>

$(document).ready(function() {
    $(window).scroll(function() {
        /*
        var scroll = $(window).scrollTop();
        if (scroll > 300) {
            $(".header").css("background", "rgba(0, 35, 105, 1)");
        } else {
            $(".header").css("background", "rgba(0, 35, 105, 0);");
        }
        //*/
        var scroll = $(window).scrollTop();
        if (scroll == $(window).height()) {
            $(".header").css({ "background-color": "rgba(0, 35, 105, 0)" });
            $(".header").css({ "height": "128px" });
            $(".header").css({ "border-bottom": "1px solid rgba(255, 255, 255, 0)" });
            $("#headerBrand").css({ "height": "72px" });
            $("#headerBrand").css({ "margin-left": "0px" });
            //
            //$("#headerBrand").css({})
            //
        }
        if (scroll > 300) {
            $(".header").css({ "background-color": "rgba(0, 35, 105, 1)" });
            $(".header").css({ "height": "80px" });
            $(".header").css({ "border-bottom": "1px solid rgba(255, 255, 255, 1)" });
            $("#headerBrand").css({ "height": "48px" });
            $("#headerBrand").css({ "margin-left": "0px" });



        } else {
            $(".header").css({ "background-color": "rgba(0, 35, 105, 0)" });
            $(".header").css({ "height": "128px" });
            $(".header").css({ "border-bottom": "1px solid rgba(255, 255, 255, 0)" });
            $("#headerBrand").css({ "height": "72px" });
            $("#headerBrand").css({ "margin-left": "0px" });



        }


    })
})

    </script>
    <div class="container-fluid   d-flex  my-auto">
        <a class="my-auto " href="<?= get_home_url() ?>">
            <img width="auto"  class="ml-2" id="headerBrand" style="height:72px;margin-left:16px;transition:400ms" src="<?= $logotype_w ?>" alt="<?= get_bloginfo() ?>">
        </a>
        <?php
          wp_nav_menu( array(
          'theme_location'  => 'header-menu',
          'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
          'container'       => 'div',
          'container_class' => 'm-auto',
          'container_id'    => ' ',
          'menu_class'      => 'm-0 p-0',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
          ));

          ?>

          <div id="language_list" class="my-auto mr-2 d-flex">
              <?php  languages_list_navbar();?>
          </div>

          <?php if( have_rows('website_settings', 'option') ): ?>
              <?php if (have_rows('website_settings','option')):
                while (have_rows('website_settings','option')):the_row();
                  if (have_rows('global_settings')):
                    while (have_rows('global_settings')):the_row();
                      $thisLink = get_sub_field('main_cta');
                    ?>
                    <?php endwhile; ?>
                  <?php endif; ?>
                <?php endwhile;?>
              <?php endif;?>
                  
              <?php if ($thisLink) :
                $link_url = $thisLink['url'];
                $link_title = $thisLink['title'];
                $link_target = $thisLink['target'] ? $thisLink['target'] : '_self';
              ?>
                <button
                type="button"
                style=""
                onclick="location.href='<?php echo $link_url ?>'"
                class="button mr-2"
                >
                    <?= $link_title ?>
                </button>
              <?php endif;?>

              <?php /*
              <button  onclick="location.href='<?php echo site_url(); ?>#contact'" class="mr-2 button">Contact</button>
              //*/?>
            <?php endif;?>

    </div>

  </header>


  <header id="masthead" class="header-mobile border-bottom " >
    <div class="header-mobile__container">
      <div class="header-mobile__row ">
        <div class="header-mobile__brand mr-auto ml-2 ">
          <a href="<?= get_home_url() ?>" onclick="closeMenu()" >
            <div class=" header-mobile__brand__logo">
              <img style="height:auto;width:150px" src="<?= $logotype_w ?>" alt="<?= get_bloginfo() ?>">
            </div>
          </a>
        </div>
        <button
         onclick="location.href='<?php echo site_url(); ?>#contact'"
         class="ml-auto mr-4 button"
        >
         Contact
        </button>

        <div class="d-flex p-0 mr-2">
          <div onclick="openMenu()" title="toggle menu" id="burger" class="header-mobile__burger  header-mobile__burger--visible"  aria-expanded="false">
            <?php // if ( is_front_page() ):?>
              <?php get_template_part('partials/nav/burger','light'); ?>
            <?php // endif?>
          </div>

          <div onclick="closeMenu()" title="close menu" id="close" class="header-mobile__burger  header-mobile__burger--hidden"  aria-expanded="false">
            <?php // if ( is_front_page() ):?>
              <?php get_template_part('partials/nav/close','light'); ?>
            <?php // endif?>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="mx-0 p-2  w-100 d-flex d-lg-none" style="position:absolute;z-index:9999;margin-top:96px;">
    <div class="ml-auto mr-0">
      <?php languages_list_navbar_mobile();?>
    </div>

  </div>
  <div id="overlayMenu" class="mobile-menu mobile-menu--hidden " style=" ">

    <div class="mobile-menu__menu">

      <?php wp_nav_menu( array(
      'theme_location'  => 'header-menu',
      'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
      'container'       => ' ',
      'container_class' => ' ',
      'container_id'    => 'navMenu',
      'menu_class'      => 'm-auto p-0',
      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
      'walker'          => new WP_Bootstrap_Navwalker(),
      ));
      ?>

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
        <?php get_template_part('partials/elements/popup') ?>


  <?php get_template_part('partials/nav/btn','scollToTop')?>
<?php
