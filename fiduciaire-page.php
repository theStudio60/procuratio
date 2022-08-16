<?php
/**
 * Template Name: Page fiduciaire
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
<div class=" mx-0 bg-dark  " >
  <div class="container-fluid w-100">
    <div class="row" style=" ">
      <?php if( have_rows('option-group_fiduciaire','option') ): ?>
        <?php while( have_rows('option-group_fiduciaire','option') ): the_row();?>
          <?php if( have_rows('pack_startups') ): ?>
            <?php while( have_rows('pack_startups') ): the_row(); ?>
              <?php
              $startupsTitle = get_sub_field('title'); 
              ?>
              <div class="col-10 col-md-4 col-lg-4 mx-auto text-center p-0 mt-n3"  data-aos="flip-up" data-aos-duration="800"  >
                  <button class="button m-2 m-lg-auto d-flex p-3 w-75   bg-dark">
                    <h4 class="font-sans text-white m-auto">
                      <?= $startupsTitle ?>
                    </h4>
                  </button>
              </div> 
            <?php endwhile; ?>
          <?php endif; ?>
          <?php if( have_rows('pack_enterprises') ): ?>
            <?php while( have_rows('pack_enterprises') ): the_row(); ?>
              <?php
              $enterprisesTitle = get_sub_field('title'); 
              ?>
              <div class="col-10 col-md-4 col-lg-4 mx-auto text-center p-0 mt-n3"  data-aos="flip-up" data-aos-duration="800"  >
                  <button class="button m-2 m-lg-auto d-flex p-3 w-75   bg-dark">
                    <h4 class="font-sans text-white m-auto">
                      <?= $enterprisesTitle ?>
                    </h4>
                  </button>
              </div> 
            <?php endwhile; ?>
          <?php endif; ?> 
          <?php if( have_rows('pack_persons') ): ?>
            <?php while( have_rows('pack_persons') ): the_row(); ?>
              <?php
              $personsTitle = get_sub_field('title'); 
              ?>
              <div class="col-10 col-md-4 col-lg-4 mx-auto text-center p-0 mt-n3"  data-aos="flip-up" data-aos-duration="800"  >
                  <button class="button m-2 m-lg-auto d-flex p-3 w-75   bg-dark">
                    <h4 class="font-sans text-white m-auto">
                      <?= $personsTitle ?>
                    </h4>
                  </button>
              </div> 
            <?php endwhile; ?>
          <?php endif; ?> 
        <?php endwhile; ?>
      <?php endif; ?> 
    </div>  
  </div>
</div>
<?php if( have_rows('option-group_fiduciaire','option') ): ?>
  <?php while( have_rows('option-group_fiduciaire','option') ): the_row(); ?>
    <?php if( have_rows('pack_startups') ): ?>
      <?php while( have_rows('pack_startups') ): the_row();
        $title = get_sub_field('title');
        $content = get_sub_field('content');
        $subtitle = get_sub_field('subtitle');
        //$thisId = get_sub_field('pack_title');
      ?>
        <section  
          id="startups"
          class="  bg-dark text-white" 
          data-aos="slide-up" data-aos-duration="800" 
        >  
          <div class="container  py-3 py-lg-5 ">
            <div class="row my-3">
              <div class="col-12 col-lg-9 p-0 p-lg-2" id=" " >
                <div class="section-text m-auto">
                  <?php if ($subtitle) :  ?>
                    <h3 class="text-white d-flex mb-3">
                      <div class="dash mr-2 ml-0 ml-lg-n4 my-auto"></div>
                      <?= $subtitle ?>
                    </h3> 
                  <?php endif;?>
                  <?php if ($content) :  ?>
                    <div class="mt-2 ml-2 ml-lg-0 text-white div-white"  >
                      <?= $content?>
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
                      $name = get_sub_field('name');
                      $icon = get_sub_field('icon');
                      $description = get_sub_field('description');
                    ?>
                    <div class="col-12 col-lg-3  text-center ">
                      <div class="text-center p-2 m-auto">
                        <i class="fa fa-5x  text-white <?= $icon ?> "> </i>
             
                        <h4 class="text-white text-uppercase mx-auto my-3 ">
                          <?= $name ?>
                        </h4>
                        <style>
                          .div-white p {color:white!important;}
                        </style>
                        <style>
                          .div-centered p {text-align:center!important;}
                        </style>
                        <div class="text-white my-2 mx-auto div-white div-centered" >
                          <?= $description ?>
                        </div>
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
    <?php endif; ?>
    <?php if( have_rows('pack_enterprises') ): ?>
      <?php while( have_rows('pack_enterprises') ): the_row();
        $title = get_sub_field('title');
        $content = get_sub_field('content');
        $subtitle = get_sub_field('subtitle');
        //$thisId = get_sub_field('pack_title');
      ?>
        <section  
          id="enterprises"
          class="  bg-white text-dark" 
          data-aos="slide-up" data-aos-duration="800" 
          style="border-top: solid 1px #002369;border-bottom: solid 1px #002369; width: 100%;"
        >  
          <div class="container  py-3 py-lg-5 ">
            <div class="row my-3">
              <div class="col-12 col-lg-9 p-0 p-lg-2" id=" " >
                <div class="section-text m-auto">
                  <?php if ($subtitle) :  ?>
                    <h3 class="text-dark d-flex mb-3">
                      <div class="dash mr-2 ml-0 ml-lg-n4 my-auto"></div>
                      <?= $subtitle ?>
                    </h3> 
                  <?php endif;?>
                  <?php if ($content) :  ?>
                    <div class="mt-2 ml-2 ml-lg-0 text-dark">
                      <?= $content?>
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
                      $name = get_sub_field('name');
                      $icon = get_sub_field('icon');
                      $description = get_sub_field('description');
                    ?>
                    <div class="col-12 col-lg-3  text-center ">
                      <div class="text-center p-2 m-auto"> 
             
                        <h4 class="text-dark text-uppercase mx-auto my-3 ">
                          <?= $name ?>
                        </h4>
 
                        <div class="text-dark my-2 mx-auto div-centered" >
                          <?= $description ?>
                        </div>
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
    <?php endif; ?> 
    <?php if( have_rows('pack_persons') ): ?>
      <?php while( have_rows('pack_persons') ): the_row();
        $title = get_sub_field('title');
        $content = get_sub_field('content');
        $subtitle = get_sub_field('subtitle');
        //$thisId = get_sub_field('pack_title');
      ?>
        <section  
          id="persons"
          class="  bg-light text-dark" 
          data-aos="slide-up" data-aos-duration="800" 
          style="border-top: solid 1px #002369;border-bottom: solid 1px #002369; width: 100%;"
        >  
          <div class="container  py-3 py-lg-5 ">
            <div class="row my-3">
              <div class="col-12 col-lg-9 p-0 p-lg-2" id=" " >
                <div class="section-text m-auto">
                  <?php if ($subtitle) :  ?>
                    <h3 class="text-dark d-flex mb-3">
                      <div class="dash mr-2 ml-0 ml-lg-n4 my-auto"></div>
                      <?= $subtitle ?>
                    </h3> 
                  <?php endif;?>
                  <?php if ($content) :  ?>
                    <div class="mt-2 ml-2 ml-lg-0 text-dark"  >
                      <?= $content?>
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
                      $name = get_sub_field('name');
                      $icon = get_sub_field('icon');
                      $description = get_sub_field('description');
                    ?>
                    <div class="col-12 col-lg-3  text-center ">
                      <div class="text-center p-2 m-auto">
                        <i class="fa fa-5x  text-white <?= $icon ?> "> </i>
             
                        <h4 class="text-dark text-uppercase mx-auto my-3 ">
                          <?= $name ?>
                        </h4>
                 
                        <style>
                          .div-centered p {text-align:center!important;}
                        </style>
                        <div class="text-dark my-2 mx-auto div-centered" >
                          <?= $description ?>
                        </div>
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
    <?php endif; ?>  
  <?php endwhile; ?>
<?php endif; ?> 
<?php get_template_part( 'partials/sections/layout','contact' ); ?>
<?php
get_footer();
