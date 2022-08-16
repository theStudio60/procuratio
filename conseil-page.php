<?php
/**
 * Template Name: Page conseil
 *
 * @package studio_soixante
 */
get_header(); 
if( have_rows('page-conseil_acf_group') ): 
  while( have_rows('page-conseil_acf_group') ): the_row(); 
    get_template_part( 'partials/sections/hero', 'page' );
  endwhile;
endif;
?>
<style>body.page-wrapper{background-color:#002369!important;}</style>
<div class=" mx-0 bg-dark  " >
  <div class="container-fluid w-100">
    <div class="row" style=" ">

      <?php if( have_rows('option-group_conseil','option') ): ?>
        <?php while( have_rows('option-group_conseil','option') ): the_row(); ?>  
          <?php if( have_rows('group_control') ): ?>
            <?php while( have_rows('group_control') ): the_row();
              $thisTitle = get_sub_field('title');
 
            ?>
            
              <div class="col-10 col-md-4 col-lg-4 mx-auto text-center p-0 mt-n3"  data-aos="flip-up" data-aos-duration="800"  >
                  <button class="button m-2 m-lg-auto  p-3 w-100 d-flex bg-dark">
                    <h5 class="font-sans text-white text-uppercase m-auto ">
                      <?= $thisTitle ?>
                    </h5>
                  </button>
              </div>
            <?php endwhile?>
          <?php endif ?>
        <?php endwhile; ?>
      <?php endif; ?>

      <?php if( have_rows('option-group_conseil','option') ): ?>
        <?php while( have_rows('option-group_conseil','option') ): the_row(); ?>  
          <?php if( have_rows('group_mandats') ): ?>
            <?php while( have_rows('group_mandats') ): the_row();
              $thisTitle = get_sub_field('title');
 
            ?>
            
              <div class="col-10 col-md-4 col-lg-4 mx-auto text-center p-0 mt-n3"  data-aos="flip-up" data-aos-duration="800"  >
                <button class="button m-2 m-lg-auto  p-3 w-100 d-flex bg-dark">
                    <h5 class="font-sans text-white text-uppercase m-auto ">
                      <?= $thisTitle ?>
                    </h5>
                </button>
              </div>
            <?php endwhile?>
          <?php endif ?>
        <?php endwhile; ?>
      <?php endif; ?>

    </div>  
  </div>
</div>
<?php if( have_rows('option-group_conseil','option') ): 
  while( have_rows('option-group_conseil','option') ): the_row();  
    if( have_rows('group_control') ): 
      while( have_rows('group_control') ): the_row(); 
      $title = get_sub_field('name');
      $subtitle = get_sub_field('subtitle');
      $content = get_sub_field('content'); 
      ?>
        <section id="control" class="section d-flex   py-3 py-lg-5 bg-dark"  data-aos="slide-up" >
            <div class="container m-auto   " >
              <div class="row my-3  ">
                <div class="col-12 col-lg-9 mx-auto mx-lg-0 ">
                  <?php if ($title) :  ?>
                    <div class="d-flex w-100 ">
                      <div class="dash mr-2 ml-n4 my-auto"></div>
                      <h3 class="text-white d-flex mb-3" >
                          <?= $title ?>
                      </h3>  
                    </div>
                  <?php endif;?>
                  <?php if ($content) :  ?>
                    <div class="text-white d-block d-lg-none px-2"  >
                        <?= $content?>
                    </div>
                    <div class="text-white d-none d-lg-block"> 
                      <style>
                      #summary { line-height: 1.5; }
                      .text-white p {
                        font-size: 18px;
                        color:#fff;
                      }
                      #summary p {
                        font-size: 20px;
                        color:#fff;
                      }
                      #summary div.collapse:not(.show) {
                          height:64px;
                          overflow: hidden;
                          display: -webkit-box;
                          -webkit-line-clamp: 3;
                          -webkit-box-orient: vertical;  
                            /* Safari 10.1 */
                            @media not all and (min-resolution:.001dpcm){ 
                            @supports (-webkit-appearance:none) and (not (stroke-color:transparent)) {
                            height:auto; 
                            }}
                      }
                      #summary div.collapsing {
                          min-height: 192px;
                      }
                      #summary a.collapsed:after  {
                          content: 'Lire la suite'; 
                          width: 100%;
                          font-size:18px; 
                          margin-left:auto ; margin-right:auto;
                          text-align:center;
                          font-weight:600;
                          font-family:"Raleway";
                      }
                    
                      #summary a:not(.collapsed):after {
                          content: '- Réduire';
                          font-size:18px;
                          padding-top:16px;
                          margin-left:auto ; margin-right:auto;
                          text-align:center;
                          font-weight:600;
                          font-family:"Raleway";
                      }
                      </style>
                      <div class="d-none d-lg-block" id="summary">
                        <div class="collapse mb-2" id="collapseSummary">
                          <?= $content?>
                        </div>
                        <a class="collapsed text-secondary" data-toggle="collapse" href="#collapseSummary" aria-expanded="false" aria-controls="collapseSummary"></a>
                      </div>
                    </div>   
                  <?php endif;?>
                </div> 
                <div class="col-12 col-lg-3 d-flex">
                  <i class=" m-auto fa fa-5x fa-pie-chart text-white"   ></i>
                </div>
              </div>
            </div>
        </section>
      <?php endwhile; ?>
      <?php wp_reset_postdata(  ) ;?>
    <?php endif; ?> 
  <?php endwhile; ?>
  <?php wp_reset_postdata(  ) ;?>
<?php endif; ?> 

<?php if( have_rows('option-group_conseil','option') ): 
  while( have_rows('option-group_conseil','option') ): the_row();  
    if( have_rows('group_mandats') ): 
      while( have_rows('group_mandats') ): the_row(); 
      $title = get_sub_field('title');
      $description = get_sub_field('description'); 
      $conclusion = get_sub_field('conclusion'); 
      ?>
        <section id=" " class="section bg-white  py-3 py-lg-5"   data-aos="slide-up">
          <div class="container m-auto  services"    >
            <div class="row">
              <?php if ($title) :  ?>
                <div class="col-12 col-lg-9  ">
                  <h3 class="text-dark d-flex mb-3" >
                    <div class="dash mr-2 ml-n4 my-auto"></div>
                    <?= $title ?>
                  </h3>   
                </div>
              <?php endif;?>
              <?php if ($description) :  ?>
                <div class="col-12 col-lg-9  ">
                  <p>
                    <?= $description ?>
                  </p>
                </div>
              <?php endif;?>
              <div class="col-12 col-lg-9">
                <div class="container">
 
                  <div class="row">

                    <?php
                    if( have_rows('repeater_mandats') ):
                      while( have_rows('repeater_mandats') ): the_row();
                        if( have_rows('mandat') ):
                          while( have_rows('mandat') ): the_row();
                            $subtitle = get_sub_field('service');
                            $price = get_sub_field('price');
                            $content = get_sub_field('wysiwyg'); 
                    ?>
                        <div class="col-12 col-lg-6 col-xl-4 "     data-aos="flip-up" data-aos-duration="1000"   >
                          <div class="card w-100 mx-0 mx-md-auto px-3 d-flex"   >
                            <div class="hide-arc"></div>
                            <div class="arc"></div>
                            <?php if ($subtitle) :  ?>
                              <span class="text-dark font-sans my-auto ml-auto w-100 ">
                                <?= $subtitle ?>
                              </span>
                            <?php endif;?>
                            <?php /*
                            <?php if ($content) :  ?>
                                <?= $content ?>
                            <?php endif;?>
                            <?php if ($price) :  ?>
                              <div class="price">
                                <?= $price ?>
                              </div>
                            <?php endif;?>
                            //*/ ?>
                          </div> <?php //end  card  ?>
                        </div>
                      <?php endwhile; ?>
                    <?php endif; ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php //end subgroup_services ?>
      
            </div>
          </div>



              <?php if ($conclusion) :  ?>
                <div class="col-12 col-lg-9  ">
                  <p>
                    <?= $conclusion ?>
                  </p>
                </div>
              <?php endif;?>
            </div>
          </div>
        </section>
      <?php endwhile; ?>
      <?php wp_reset_postdata(  ) ;?>
    <?php endif; ?> 
  <?php endwhile; ?>
  <?php wp_reset_postdata(  ) ;?>
<?php endif; ?> 

<?php get_template_part( 'partials/sections/layout','contact' ); ?>
<?php
get_footer();
