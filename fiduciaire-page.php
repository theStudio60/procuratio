<?php
/**
 * Template Name: fiduciaire-page
 *
 * @package studio_soixante
 */
get_header(); 

if( have_rows('page-fiduciaire_acf_group') ): 
  while( have_rows('page-fiduciaire_acf_group') ): the_row(); 
    get_template_part( 'partials/sections/hero', 'page' );

  endwhile;
endif;
?>
<style>body.page-wrapper{background-color:#fff!important;}</style>
<div class=" mx-0 bg-white  " >
  <div class="container-fluid w-100">
    <div class="row" style=" ">
      <?php if( have_rows('option-group_fiduciaire','option') ): 
        while( have_rows('option-group_fiduciaire','option') ): the_row();  
          if( have_rows('repeater_packs') ): 
            while( have_rows('repeater_packs') ): the_row(); 
            ?>

              <?php if( have_rows('group_pack') ): ?>
                <?php while( have_rows('group_pack') ): the_row();
                  $thisTitle = get_sub_field('title');
                  $icon = get_sub_field('icon');
                  $ID = get_sub_field('id');
                ?>
                  <div class="col-10 col-md-4 col-lg-4 mx-auto text-center p-0 mt-n3"  data-aos="flip-up" data-aos-duration="800"  >
                      <button class="button m-2 m-lg-auto  p-3 w-75   bg-dark">
                        <h4 class="font-sans text-white ">
                          <?= $thisTitle ?>
                        </h4>
                      </button>
                  </div>
                  <?php endwhile?>
              <?php endif ?>
            <?php endwhile; ?>
          <?php endif; ?> 
        <?php endwhile; ?>
      <?php endif; ?>
    </div>  
  </div>
</div> 


<?php if( have_rows('option-group_fiduciaire','option') ): 
  while( have_rows('option-group_fiduciaire','option') ): the_row();  
    if( have_rows('repeater_packs') ): 
      while( have_rows('repeater_packs') ): the_row(); 
      ?>

        <?php if( have_rows('group_pack') ): ?>
          <?php while( have_rows('group_pack') ): the_row();
            $title = get_sub_field('title');
            $subtitle = get_sub_field('subtitle');
      
          ?>
            <section  
              id=" "
              class=" h-100 bg-white text-dark" 
           
            >  
              <div class="container  py-3 py-lg-5 ">
                <div class="row my-3">
                  <div class="col-12 col-lg-9 p-0 p-lg-2" id=" "    data-aos="fade-right" data-aos-duration="800" >
                    <div class="section-text m-auto">
                      <?php if ($title) :  ?>
                        <h3 class="text-dark d-flex mb-3">
                          <div class="dash mr-2 ml-0 ml-lg-n4 my-auto"></div>
                          <?= $title ?>
                        </h3> 
                      <?php endif;?>
                      <?php if ($subtitle) :  ?>
                        <div class="mt-2 ml-2 ml-lg-0 lead text-dark mb-3 "  >
                          <?= $subtitle?>
                        </div>
                      <?php endif;?>
                    </div>
                  </div>
                </div>
                <div class="row w-100 h-100 py-2">
                  <?php if( have_rows('repeater_services') ): ?>
                    <?php while( have_rows('repeater_services') ): the_row(); ?>
                      <?php if( have_rows('service') ): ?>
                        <?php while( have_rows('service') ): the_row();
                          //$title = get_sub_field('title');
                          $icon = get_sub_field('name');
                          $icon = get_sub_field('icon');
                          $content = get_sub_field('content');
                        ?>
                          <div class="col-12 col-lg-3  text-center ">
                            <div class="text-center p-2">
                              <i class="fa fa-5x  text-white <?= $icon ?> "> </i>
                              <br>
                              <p class="text-white my-4">
                                <?= $content ?>
                              </p>
                            </div>
                          </div>
                        <?php endwhile; ?>
                      <?php endif; ?> 
                    <?php endwhile; ?>
                  <?php endif; ?> 
                </div>
              </div>
            </section>
          <?php endwhile?>
        <?php endif ?>
      <?php endwhile; ?>
    <?php endif; ?> 
  <?php endwhile; ?>
<?php endif; ?> 
      



<?php
    get_template_part( 'partials/sections/layout','contact' );
 
?>
<?php
get_footer();
