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
    if( have_rows('group_conseil') ):
      while( have_rows('group_conseil') ): the_row();
        $title = get_sub_field('title');
        $description = get_sub_field('wysiwyg');
        $conclusion = get_sub_field('conclusion');
        $group_conseil_image = get_sub_field('image');
        //$imageUrl = $image['url'];
    ?>

        <section id="conseil" class="section bg-white  py-3 py-lg-5">
          <div class="container m-auto services"  data-aos="fade-up" data-aos-duration="800">
            <div class="row">
              <div
                data-aos="flip-right"
                class="col-lg-4 d-none d-lg-flex h-100 my-auto"
                style="background: url('<?php echo $group_conseil_image['url']; ?>');
                background-repeat:no-repeat;
                background-size:cover;
                background-position:center ;
                min-height:480px;
                max-height:100%;
                "
              >
              </div>
             
              <div class="col-12 col-lg-8">
                <?php if ($title) :  ?>
                  <h3 class="text-dark d-flex mb-3" >
                    <div class="dash mr-2 ml-n4 my-auto"></div>
                    <?= $title ?>
                  </h3>
                <?php endif;?>
                <?php if ($description) :  ?>
                  <div>
                    <?= $description ?>
                  </div>
              <?php var_dump($group_conseil_image);?>

                <?php endif;?>
                <div class="container">
                  <div class="row">
                    <?php 
                    if( have_rows('repeater_services') ):
                      while( have_rows('repeater_services') ): the_row();
                        if( have_rows('service') ):
                          while( have_rows('service') ): the_row();
                            $name = get_sub_field('name'); 
                    ?>
                            <div class="col-12 col-lg-6 col-xl-4">
                              <div class="card w-100 mx-0 mx-md-auto px-3 d-flex"   >
                                <div class="hide-arc"></div>
                                <div class="arc"></div>
                                <?php if ($name) :  ?>
                                  <span class="text-dark font-sans my-auto ml-auto w-75 ">
                                    <?= $name ?>
                                  </span>
                                <?php endif;?> 
                              </div> <?php //end  card  ?>
                            </div>
                          <?php endwhile; ?>
                        <?php endif; ?>
                      <?php endwhile; ?>
                    <?php endif; ?>
                  </div>
                </div>
                <?php if ($conclusion) :  ?>
                  <div class="w-100">
                    <p>
                      <?= $conclusion ?>
                    </p>
                  </div>
                <?php endif;?>
              </div>
              <div
                data-aos="flip-up"
                class="col-12 d-block d-lg-none"
                style="background: url('<?php echo $image['url']; ?>');
                background-repeat:no-repeat;
                background-size:cover;
                background-position:center ;
                min-height:280px;
                "
              >
              </div>
            </div>
          </div>
        </section>
      <?php endwhile; ?>
      <?php wp_reset_postdata(  ) ;?>
    <?php endif; ?>
    <?php /*
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
              <div class="col-10 col-md-4 col-lg-4 mx-auto text-center p-1 mt-3 mt-lg-n3"  data-aos="flip-up" data-aos-duration="800"  >
                <button
                onclick="location.href='#control'"
                class="button m-2 my-lg-auto mx-lg-auto d-flex p-3 w-100 bg-dark">
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
              <div class="col-10 col-md-4 col-lg-4 mx-auto text-center p-1 mt-3 mt-lg-n3"  data-aos="flip-up" data-aos-duration="800"  >
                <button
                onclick="location.href='#mandats'"
                class="button m-2 my-lg-auto mx-lg-auto d-flex p-3 w-100 bg-dark">
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
//*/ ?>

    <?php if( have_rows('group_control') ):
      while( have_rows('group_control') ): the_row();
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $content = get_sub_field('content');
        $image = get_sub_field('image');
      ?>
        <section id="control" class="section d-flex   py-3 py-lg-5 bg-light"  
        style="border-top: solid 1px #002369;border-bottom: solid 1px #002369; width: 100%;"
        >
          <div class="container m-auto   " data-aos="fade-up" data-aos-mirror="false"  >
            <div class="row my-3  ">
              <div class="col-12 col-lg-9 mx-auto mx-lg-0 ">
                <?php if ($title) :  ?>
                  <div class="d-flex w-100 text-dark">
                    <div class="dash mr-2 ml-n4 my-auto"></div>
                    <h3 class="text-dark d-flex mb-3" >
                        <?= $title ?>
                    </h3>
                  </div>
                <?php endif;?>
                <?php if ($content) :  ?>
                  <div class="text-dark d-block px-2"  >
                      <?= $content?>
                  </div>
                  <?php /*
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
                            // Safari 10.1
                            @media not all and (min-resolution:.001dpcm){
                            @supports (-webkit-appearance:none) and (not (stroke-color:transparent)) {
                               height:auto;
                            }}
                      }
                      #summary div.collapsing {
                          min-height: 192px;
                      }
                      #summary a.reduction.collapsed:after  {
                          content: 'Lire la suite';
                          width: 100%;
                          font-size:18px;
                          margin-left:auto ; margin-right:auto;
                          text-align:center;
                          font-weight:600;
                          font-family:"Raleway";
                      }
                      #summary a.reduction:not(.collapsed):after {
                          content: '- Réduire';
                          font-size:18px;
                          padding-top:16px;
                          margin-left:auto ; margin-right:auto;
                          text-align:center;
                          font-weight:600;
                          font-family:"Raleway";
                      }
                      .wrapper-c {
                          position: relative;
                          margin: 40px auto;
                          background: rgba(255,255,255,0);
                      }
                      .wrapper-c,
                      .wrapper-c * {
                          -moz-box-sizing: border-box;
                          -webkit-box-sizing: border-box;
                          box-sizing: border-box;
                      }
                      .wrapper-c {
                          width: 196px;
                          height: 196px;
                      }
                      .wrapper-c .pie {
                          width: 50%;
                          height: 100%;
                          transform-origin: 100% 50%;
                          position: absolute;
                          background: rgba(255,255,255,1);
                          border: 5px solid #29FFFF;
                      }
                      .wrapper-c .spinner {
                          border-radius: 100% 0 0 100% / 50% 0 0 50%;
                          z-index: 200;
                          border-right: none;
                          animation: rota 5s linear infinite;
                      }
                      .wrapper-c:hover .spinner,
                      .wrapper-c:hover .filler,
                      .wrapper-c:hover .mask {
                          animation-play-state: running;
                      }

                      .wrapper-c .filler {
                          border-radius: 0 100% 100% 0 / 0 50% 50% 0;
                          left: 50%;
                          opacity: 0;
                          z-index: 100;
                          animation: opa 5s steps(1, end) infinite reverse;
                          border-left: none;
                      }

                      .wrapper-c .mask {
                          width: 50%;
                          height: 100%;
                          position: absolute;
                          background: inherit;
                          opacity: 1;
                          z-index: 300;
                          animation: opa 5s steps(1, end) infinite;
                      }

                      @keyframes rota {
                          0% {
                              transform: rotate(0deg);
                          }
                          100% {
                              transform: rotate(360deg);
                          }
                      }

                      @keyframes opa {
                          0% {
                              opacity: 1;
                          }
                          50%,
                          100% {
                              opacity: 0;
                          }
                      }
                    </style>




                    <div class="d-none d-lg-block" id="summary">
                      <div class="collapse mb-2" id="collapseSummary">
                        <?= $content?>
                      </div>
                      <a class="collapsed text-secondary reduction" data-toggle="collapse" href="#collapseSummary" aria-expanded="false" aria-controls="collapseSummary"></a>
                    </div>
                  
                  </div>
                  //*/?>
                  <?php endif;?>
              </div>
              <div class="col-12 col-lg-3 d-flex">
                <img height="128" width="128" class="mx-auto" src="<?= $image['url']?>" alt="">
              </div>
            </div>
          </div>
        </section>
      <?php endwhile; ?>
      <?php wp_reset_postdata(  ) ;?>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif;?>

<?php /* if( have_rows('group_control') ): ?>
  <?php  while( have_rows('group_control') ): the_row(); ?>
    <?php
      $title = get_sub_field('name');
      $subtitle = get_sub_field('subtitle');
      $content = get_sub_field('content');
    ?>
      <section id="control" class="section d-flex   py-3 py-lg-5 bg-dark"  >
          <div class="container m-auto   " data-aos="fade-up" data-aos-mirror="false"  >
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
                  <div class="text-white px-2"  >
                      <?= $content?>
                  </div>

                <?php endif;?>
              </div>
              <div class="col-12 col-lg-3 d-flex">

              </div>
            </div>
          </div>
        </section>
      <?php endwhile; ?>
      <?php wp_reset_postdata(  ) ;?>
    <?php endif; 
    //*/ 
?>

<?php /*
if( have_rows('option-group_conseil','option') ):
  while( have_rows('option-group_conseil','option') ): the_row();
    if( have_rows('group_mandats') ):
      while( have_rows('group_mandats') ): the_row();
        $title = get_sub_field('title');
        $description = get_sub_field('description');
        $conclusion = get_sub_field('conclusion');
        $image = get_sub_field('image');
      ?>
        <section id="mandats" class="section bg-white  py-3 py-lg-5">
          <div class="container m-auto  services"  data-aos="fade-up" data-aos-duration="800">
            <div class="row">
              <div class="col-12 col-lg-8">
                <?php if ($title) :  ?>

                  <h3 class="text-dark d-flex mb-3" >
                    <div class="dash mr-2 ml-n4 my-auto"></div>
                    <?= $title ?>
                  </h3>

                <?php endif;?>
                <?php if ($description) :  ?>

                  <p>
                    <?= $description ?>
                  </p>

                <?php endif;?>

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
                            <div class="col-12 col-lg-6 col-xl-4">
                              <div class="card w-100 mx-0 mx-md-auto px-3 d-flex"   >
                                <div class="hide-arc"></div>
                                <div class="arc"></div>
                                <?php if ($subtitle) :  ?>
                                  <span class="text-dark font-sans my-auto ml-auto w-75 ">
                                    <?= $subtitle ?>
                                  </span>
                                <?php endif;?>
 
                              </div> <?php //end  card  ?>
                            </div>
                          <?php endwhile; ?>
                        <?php endif; ?>
                      <?php endwhile; ?>
                    <?php endif; ?>
                  </div>
                </div>
                <?php if ($conclusion) :  ?>
                  <div class="w-100">
                    <p>
                      <?= $conclusion ?>
                    </p>
                  </div>
                <?php endif;?>

              </div>

              <div
                data-aos="flip-right"
                class="col-lg-4 d-none d-lg-flex h-100 my-auto"
                style="background: url('<?php echo $image['url']; ?>');
                background-repeat:no-repeat;
                background-size:cover;
                background-position:center ;
                min-height:100vh;
                "
              >
              </div>
              <div
                data-aos="flip-up"
                class="col-12 d-block d-lg-none"
                style="background: url('<?php echo $image['url']; ?>');
                background-repeat:no-repeat;
                background-size:cover;
                background-position:center ;
                min-height:380px;
                "
              >
              </div>
            </div>
          </div>
        </section>
      <?php endwhile; ?>
      <?php wp_reset_postdata(  ) ;?>
    <?php endif; ?>
  <?php endwhile; ?>
  <?php wp_reset_postdata(  ) ;?>
<?php endif; //*/?>
<?php
if( have_rows('website_settings', 'option') ):
  while( have_rows('website_settings', 'option') ):
//  print_r(the_row());
  the_row();
if( have_rows('contact_infos') ):
  while( have_rows('contact_infos') ): the_row();
  $cta_call = get_sub_field('contact_call');
  $adress = get_sub_field('post_address');
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
<section id="ccontact" class="section bg-dark h-25 d-flex   py-3 py-lg-5 " >
  <div class="container m-auto   " data-aos="fade-up" data-aos-mirror="false" >
    <div class="row my-3  ">
      <div class="col-12 col-lg-9 mx-auto">

        <div class="mx-auto d-flex w-100">
          <h3 class="text-white d-flex mb-3 mx-auto text-center" >
            <div class="dash mr-2 ml-n4 my-auto"></div>
            Contact
          </h3>
        </div>
        <?php if ($cta_call) :  ?>
          <div class="div-centered font-sans div-white text-white">
            <p>
              <?= $cta_call ?>
            </p>
          </div>
        <?php endif;?>
 
      </div>
      <br>
      <div class="col-12 col-lg-9 mx-auto mt-3 d-flex">
            <button class="mx-auto button mt-3"  onclick="location.href='<?php echo site_url(); ?>#contact'">Contact</button>
      </div>

    </div>
  </div>

</section>
<?php
get_footer();

