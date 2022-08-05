<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logotype_d = THEME_URI . "/images/logo-procuratio-black.png"; 
$logotype_w = THEME_URI . "/images/logo-procuratio-black.png"; 
$logotype_b = THEME_URI . "/images/logo-procuratio-blue.png"; 
$logotype = $logotype_d ; 
$logotypeMobile = $logotype;
$txt_color="";
$link_color="";
$bg_color="";
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
  $phone = get_sub_field('phone');
  $email = get_sub_field('email');
  $gmap = get_sub_field('gmap_url');
?>
<footer class="footer bg-<?= $bg_color ?> text-<?= $txt_color ?>">
  <div id="contact" class="container mx-auto">
    <div class="row">
 
 

         <div class="container d-flex w-100">
           <div class="row mx-0 mx-lg-auto ">
            <div class="col-12 col-lg-9">
              <h2 class="mb-3 text-uppercase p-0">contact</h2>
            </div>
             <div class="col-12 col-lg-6 order-2 order-lg-1 py-0 pr-0 pr-lg-5 pl-0">
                <div class="my-2 mx-0 p-0  w-100 bg-white  d-flex d-lg-none  " style="height:4px">
                </div>
              <?= do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]')?>
             </div>
            <div class="col-12 col-lg-6 order-1 order-lg-2">
              <div class="row">
                <div class="contact-text col-12">
                  <p class="my-3">
                    <i class="fa fa-phone mr-1"></i> <?= $phone ?>
                  </p>
                  <p class="my-3">
                    <i class="fa fa-envelope mr-1"></i> <?= $email ?>
                  </p>
                  <p class="my-3">
                    <i class="fa fa-map-marker mr-1"></i> <?= $adress ?>
                  </p>
                </div>
        
                <iframe class="contact-map w-100 my-3"  src="<?= $gmap ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
   
    </div>
  </div>
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
        <div class="my-2 mx-2  w-100 bg-primary  d-flex d-lg-none  " style="height:4px">
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
      <div class="col-12 my-2 text-center " style="font-size:13px;">
        <span>  © <?= date('Y');?> - <?= get_bloginfo(); ?> - <a class="ml-1 mr-2 text-<?= $link_color ?>"href="<?= get_home_url() ?>/login"><i class="text-<?= $link_color ?> fa fa-lock"></i></a> - </span>
          <span> <a class="ml-1 text-<?= $link_color ?>" href="<?= get_home_url() ?>/mention-legales">Mentions Légales</a> - </span>
          <span> <a class="ml-1 text-<?= $link_color ?>" href="<?= get_home_url() ?>/rgpd">Politique de Confidentialité</a></span>
        </div>
        <div class="col-12 my-2 text-center " style="font-size:13px">
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
