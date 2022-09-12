<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logotype_d = THEME_URI . "/images/logo-procuratio-black.png";
$logotype_w = THEME_URI . "/images/logo-procuratio-black.png";
$logotype_b = THEME_URI . "/images/logo-procuratio-blue.png";
$logotype = $logotype_d ;
$logotypeMobile = $logotype;
//$txt_color="";
//$link_color="";
//$bg_color="";
//$bg_color_mobile="";
//$position="";
?>
<?php //if ( is_front_page() ) : ?>
  <?php $bg_color =  "dark"?>
  <?php $txt_color= "white"; ?>
  <?php $txt_color_mobile="white"; ?>
  <?php $link_color="white"; ?>
  <?php $bg_color_mobile =  "dark"?>
  <?php $logotype = $logotype_w; ?>
  <?php $logotypeMobile = $logotype_w; ?>

<?php // endif ; ?>

<?php
if( have_rows('website_settings', 'option') ):
  while( have_rows('website_settings', 'option') ):
//  print_r(the_row());
  the_row();
if( have_rows('contact_infos') ):
  while( have_rows('contact_infos') ): the_row();
  $name = get_sub_field('name');
  $details = get_sub_field('details');
  $adress = get_sub_field('post_address');
  $adress1 = get_sub_field('post_address1');
  $phone = get_sub_field('phone');
  $email = get_sub_field('email');
  $gmap = get_sub_field('gmap_url');
?>
 <?php
        endwhile;
    endif;
  endwhile;
endif;
?>
<section  id="contact"  class="section  py-3 py-lg-4  bg-<?= $bg_color ?> text-<?= $txt_color ?>">
  <div class="container mx-auto my-3">
    <div class="row">
      <div class="col-12 col-lg-9 ">

              <h3 class="text-white d-flex">
                <div class="dash mr-2 ml-n4 my-auto"></div>
                Contact
              </h3>

      </div>


         <div class="container  w-100 py-3 py-lg-5">
           <div class="row mx-0 mx-lg-auto ">

             <div class="col-12 col-lg-6 order-2 order-lg-1 py-0 pr-0 pr-lg-5 pl-0">
                <div class="my-2 mx-0 p-0  w-100 bg-dark  d-flex d-lg-none  " style="height:4px">
                </div>
              <?= do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]')?>
             </div>
            <div class="col-12 col-lg-6 order-1 order-lg-2">
              <div class="row">
                <div class="contact-text col-12">
                  <h4 class="my-3 text-white">
                    <?= $name ?>
                  </h4>
                  <h6 class="mt-3 mb-5 text-white">
                    <?= $details ?>
                  </h6>
                  <p class="my-3 text-white">
                    <i class="text-secondary fa fa-phone mr-1"></i> <?= $phone ?>
                  </p>
                  <p class="my-3 text-white">
                    <i class="text-secondary fa fa-envelope mr-1"></i> <?= $email ?>
                  </p>
                  <p class="my-3 text-white">
                    <i class="text-secondary fa fa-map-marker mr-1"></i> <?= $adress ?>
                  </p>
					        <p class="my-3 text-white">
					        	<i class="text-secondary fa fa-map-marker mr-1"></i> <?= $adress1 ?>
					        </p>
                </div>

                <iframe class="contact-map w-100 my-3"  src="<?= $gmap ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>

    </div>
  </div>

