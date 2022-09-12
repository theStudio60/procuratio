<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logotype_d = THEME_URI . "/images/logo-procuratio-black.png";
$logotype_w = THEME_URI . "/images/logo-procuratio-black.png";
$logotype_b = THEME_URI . "/images/logo-procuratio-blue.png";
$logotype = $logotype_d ;
$logotypeMobile = $logotype;
$txt_color="";
$link_color="";
$bg_color="dark";
$bg_color_mobile="";
$position="";
?>
<?php if ( is_front_page() ) : ?>
  <?php $bg_color =  "dark"?>
  <?php $txt_color= "light"; ?>
  <?php $txt_color_mobile="light"; ?>
  <?php $link_color="light"; ?>
  <?php $bg_color_mobile =  "dark"?>
  <?php $position =  "absolute;z-index:40" ?>
  <?php $logotype = $logotype_w; ?>
  <?php $logotypeMobile = $logotype_d; ?>

<?php  endif?>

<?php
if( have_rows('website_settings', 'option') ):
  while( have_rows('website_settings', 'option') ):
//  print_r(the_row());
  the_row();
if( have_rows('contact_infos') ):
  while( have_rows('contact_infos') ): the_row();
  $adress = get_sub_field('post_address');
  $adress1 = get_sub_field('post_address1');
  $phone = get_sub_field('phone');
  $email = get_sub_field('email');
  $gmap = get_sub_field('gmap_url');
?>
<footer class="footer bg-<?= $bg_color ?> text-<?= $txt_color ?>">

  <div class="py-3">

  <?php
      wp_nav_menu( array(
      'theme_location'  => 'header-menu',
      'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
      'container'       => 'nav',
      'container_class' => 'd-none d-lg-flex container mt-5 mb-2',
      'container_id'    => 'footerMenu',
      'menu_class'      => 'footer__menu d-none d-lg-flex w-100 justify-content-around',
      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
      'walker'          => new WP_Bootstrap_Navwalker(),
      ));

  ?>
        <div class="my-2 mx-2  w-100 bg-white  d-flex d-lg-none  " style="height:2px">
        </div>
  <?php
      wp_nav_menu( array(
      'theme_location'  => 'header-menu',
      'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
      'container'       => 'nav',
      'container_class' => 'd-flex d-lg-none w-100',
      'container_id'    => 'footerMenu-mobile',
      'menu_class'      => 'footer__menu d-block d-lg-none mx-auto w-100',
      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
      'walker'          => new WP_Bootstrap_Navwalker(),
      ));

  ?>
  </div>


  <div class="container-fluid">
    <div class="row">
      <div class="col-12 my-1 text-center " style="font-size:13px;">
        <span class="text-white">  © <?= date('Y');?> - <?= get_bloginfo(); ?> - <a class="ml-1 mr-2 text-<?= $link_color ?>"href="<?= get_home_url() ?>/login"><i class="text-<?= $link_color ?> fa fa-lock"></i></a> - </span>

        <?php /*  <span> <a class="ml-1 text-<?php // echo $link_color ?>" href="<?php // echo get_home_url() ?>/mention-legales">Mentions Légales</a> - </span> //*/ ?>
        <?php /*  <span> <a class="ml-1 text-<?php // echo $link_color ?>" href="<?php // echo get_home_url() ?>/rgpd">Politique de Confidentialité</a></span> //*/ ?>
      </div>
        <div class="col-12 my-1 text-center " style="font-size:13px">
        <span class="text-<?= $link_color ?>">
          Site Web : <a href="https://studio60.ch" class="text-<?= $link_color ?>">STUDIO60</a>
        </span>
      </div>
    </div><!-- end row -->
  </div><!-- end container -->
</footer>

<?php
        endwhile;
    endif;
  endwhile;
endif;
?>

<?php wp_footer(); ?>
</body>
</html>
