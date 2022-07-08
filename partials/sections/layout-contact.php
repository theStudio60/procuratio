<?php
if( have_rows('page-contact_acf_group') ): 
  while( have_rows('page-contact_acf_group') ): the_row();
  $title = get_sub_field('title');
  $content = get_sub_field('wysiwyg');
  //  get_template_part( 'partials/sections/hero', 'page'); 
  endwhile;
endif;
?>
<?php if( have_rows('website_settings', 'option') ): ?>
  <?php while( have_rows('website_settings', 'option') ): the_row(); ?>
    <?php if( have_rows('contact_infos' ) ): ?>
      <?php while( have_rows('contact_infos' ) ): the_row(); ?>
        <?php 
        $post_address_cabinet = get_sub_field('post_address_cabinet');
        $post_address = get_sub_field('post_address');
        $phone = get_sub_field('phone');
        $email = get_sub_field('email');
        $gmap_url = get_sub_field('gmap_url');
        ?>
        <section class="section p-0 m-0 bg-light " >
          <div class="halfhalf p-0 m-0 " style="min-height:calc(100vh)!important"  >
            <div class=" row p-0 m-0">
              <div  style="<?php /*border-right: 32px solid #00AE9B ;*/?>" class="halfhalf__col halfhalf__col--content halfhalf__col--content--left d-flex " data-aos="fade-up" data-aos-duration="1200">
                <div class="w-100 m-auto row" >
                  <div class="mx-auto ">
                    <div class="p-5"></div>
                      <h3 class="section__title text-dark my-5" >
                      <?php if ($title) :  ?> 
                        <?= $title ?> 
                      <?php else :  ?> 
                        <?= the_title() ?>
                      <?php endif;?> 
                    </h3>
                    <br class="p-1">
                    <div class="col-12">
                      <?php if ($post_address_cabinet) :  ?>
                        <div class="d-flex my-2">
                          <i class="fa far fa-map-marker fa-sm my-auto p-2"></i>
                          <div class="d-block my-auto" style=" ">
                            <span class="my-auto text-strong">Cabinet : </span>
                            <span class="my-auto"><?= $post_address_cabinet ?></span>
                          </div>
                       </div>
                      <?php endif;?> 
                      <div class="d-block my-2" style="  ">
                        <div class=" text-dark d-flex " style="  ">
                          <i class="fa far fa-phone fa-sm my-auto p-2"></i><?= $phone ?>
                          <span class="d-none d-md-flex my-auto my-auto px-2"></span>
                          <i class="fa far fa-paper-plane fa-sm my-auto p-2"></i> <?= $email ?>
                        </div>
                        <?php if ($post_address) :  ?>
       
                     
       <div class=" text-dark my-2" style= "">
         <i class="fa far fa-pen fa-sm my-auto p-2"></i>
<?php /*  <span class="my-auto text-strong">Nous écrire : </span> //*/ ?>
         <span class="my-auto"><?= $post_address ?></span>
       </div> 
   <?php endif;?> 
                        <div class="my-2 p-0 d-block d-md-flex">

                          <?php if( have_rows('social_networks_repeater') ): ?>
                            <?php while( have_rows('social_networks_repeater') ): the_row(); ?>   
                              <?php if( have_rows('social_network') ): ?>
                                <?php while( have_rows('social_network') ): the_row(); ?> 
                                           
                                            <a class="m-2 " href="<?php the_sub_field('network_link'); ?>" title="<?php the_sub_field('network_name'); ?>">
                                              <i class="fa-2x <?php the_sub_field('icon'); ?>"></i>
                                            </a>                          
                                          
                                <?php endwhile; ?>
                              <?php endif; ?>      
                            <?php endwhile; ?>
                          <?php endif; ?>      
    
                        </div>

                    </div> 
                    
                    <br class="p-1">
                  </div><!-- end -->
                  <div id="g_form" class="contact-form">
                    <h3 class="my-3">Formulaire de contact</h3>
                    <?= do_shortcode('[gravityform id="1" title="false" description="true" ajax="true"]')?>
                  </div><!-- end contact-form  -->
                </div>
              </div>
            </div>
              <div class=" halfhalf__col halfhalf__col--img m-0 p-0 bg-light h-100"  style="min-height:100vh!important" >
                <div  class="m-0 p-0 bg-primary" ></div>
                <div id="gMap" class="m-0 p-0" style="width:100%;height:100vh; border:0;  ">
                    <iframe src="<?= $gmap_url ?>" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
              </div>
            </div>
          </div> 
        </section>

<?php endwhile ?>
<?php endif ?>
<?php endwhile ?>
<?php endif ?> 
