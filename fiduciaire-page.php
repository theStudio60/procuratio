<?php
/**
 * Template Name: Page fiduciaire new
 *
 * @package studio_soixante
 */
get_header();
if( have_rows('page-fiduciaire_acf_group') ):
  while( have_rows('page-fiduciaire_acf_group') ): the_row();
    get_template_part( 'partials/sections/hero', 'page' );

?>
    <style>
      .div-white p {color:white!important;}

      .div-centered p {text-align:center!important;}
      .div-left p {text-align:left!important;}
      body.page-wrapper{background-color:#002369!important;}
    </style>
    <div class=" mx-0 bg-dark  " >
      <div class="container-fluid w-100">
        <div class="row" style=" ">
 
          <?php if( have_rows('pack_startups') ): ?>
            <?php while( have_rows('pack_startups') ): the_row(); ?>
              <?php
              $startupsTitle = get_sub_field('title');
              ?>
              <div class="col-10 col-md-4 col-lg-4 mx-auto text-center p-1 mt-3 mt-lg-n3"  data-aos="flip-up" data-aos-duration="800"  >
                <button
                onclick="location.href='#startups'"
                class="button m-2 my-lg-auto mx-lg-auto d-flex p-3 w-100 bg-dark">
                    <h5 class="font-sans text-white text-uppercase m-auto ">
                      <?= $startupsTitle ?>
                    </h5>
                </button>
              </div>
            <?php endwhile; ?>
          <?php endif; ?> 
          <?php if( have_rows('pack_persons') ): ?>
            <?php while( have_rows('pack_persons') ): the_row(); ?>
              <?php
              $personsTitle = get_sub_field('title');
              ?>
              <div class="col-10 col-md-4 col-lg-4 mx-auto text-center p-1 mt-3 mt-lg-n3 "  data-aos="flip-up" data-aos-duration="800"  >
                <button
                onclick="location.href='#persons'"
                class="button m-2 my-lg-auto mx-lg-auto d-flex p-3 w-100 bg-dark">
                    <h5 class="font-sans text-white text-uppercase m-auto ">
                      <?= $personsTitle ?>
                    </h5>
                  </button>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>

        </div>
      </div>
    </div>
    <?php
    if( have_rows('group_startups') ):
      while( have_rows('group_startups') ): the_row();
        $title = get_sub_field('title');
        $description = get_sub_field('wysiwyg');
        $conclusion = get_sub_field('conclusion');
        $startupimage = get_sub_field('image');
    ?>
        <section id="startups" class="section bg-white  py-3 py-lg-5">
          <div class="container m-auto services"  data-aos="fade-up" data-aos-duration="800">
            <div class="row">
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
                data-aos="flip-right"
                class="col-lg-4 d-none d-lg-flex h-100 my-auto"
                style="background: url('<?php echo $startupimage['url']; ?>');
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
                style="background: url('<?php echo $startupimage['url']; ?>');
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


    <?php if( have_rows('group_compta') ):
      while( have_rows('group_compta') ): the_row();
        $title = get_sub_field('title');
        $description = get_sub_field('wysiwyg');
        $conclusion = get_sub_field('conclusion');
        //$image = get_sub_field('image');
    ?>
        <section id="compta" class="section bg-white  py-3 py-lg-5">
          <div class="container m-auto services"  data-aos="fade-up" data-aos-duration="800">
            <div class="row">
              <div class="col-12 col-lg-9 mx-auto">
                <?php if ($title) :  ?>
                  <h3 class="text-dark d-flex mb-3" >
                    <div class="dash mr-2 ml-n4 my-auto"></div>
                    <?= $title ?>
                  </h3>
                <?php endif;?>
                <?php if ($description) :  ?>
                  <div class="div-centered">
                    <?= $description ?>
                  </div>
                <?php endif;?>
                <div class="container mx-auto">
                  <div class="row">
                    <?php 
                    if( have_rows('repeater_services') ):
                      while( have_rows('repeater_services') ): the_row();
                        if( have_rows('service') ):
                          while( have_rows('service') ): the_row();
                            $name = get_sub_field('name'); 
                            $picto = get_sub_field('picto'); 
                    ?>
                            <div class="col-12 col-md-6 col-lg-3">
                              <?php if ($picto) :  ?>
                                <span class="text-dark font-sans my-auto ml-auto w-75 ">
                                  <img src="<?php echo $picto['url']; ?>" alt="">
                                </span>
                              <?php endif;?> 
                              <?php if ($name) :  ?>
                                <span class="text-dark font-sans my-auto ml-auto w-75 ">
                                  <?= $name ?>
                                </span>
                              <?php endif;?> 
                            </div>
                          <?php endwhile; ?>
                        <?php endif; ?>
                      <?php endwhile; ?>
                    <?php endif; ?>
                  </div>
                </div>
                <?php if ($conclusion) :  ?>
                  <div class="div-centered">
                    <p>
                      <?= $conclusion ?>
                    </p>
                  </div>
                <?php endif;?>
              </div>
              
            </div>
          </div>
        </section>
      <?php endwhile; ?>
      <?php wp_reset_postdata(  ) ;?>
    <?php endif; ?>
    <?php if( have_rows('group_ana') ):
      while( have_rows('group_ana') ): the_row();
        $title = get_sub_field('title');
        $description = get_sub_field('wysiwyg');
        $conclusion = get_sub_field('conclusion');
        $image = get_sub_field('image');
    ?>
        <section id="analyses" class="section bg-white  py-3 py-lg-5">
          <div class="container m-auto services"  data-aos="fade-up" data-aos-duration="800">
            <div class="row">
              <div
                data-aos="flip-right"
                class="col-lg-4 d-none d-lg-flex h-100 my-auto"
                style="background: url('<?php echo $image['url']; ?>');
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
    <?php if( have_rows('group_mandats') ): ?>
      <?php while( have_rows('group_mandats') ): the_row();?>
        <?php
        $title = get_sub_field('title');
        $description = get_sub_field('wysiwyg');
        $conclusion = get_sub_field('conclusion');
         // $image = get_sub_field('image');
        ?>
        <section id="mandats" class="section bg-white  py-3 py-lg-5">
          <div class="container m-auto services" >
            <div class="row">


              <div class="col-12 col-lg-g">
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
                <?php endif;?>


                <?php if ($conclusion) :  ?>
                  <div class="w-100">
                    <p>
                      <?= $conclusion ?>
                    </p>
                  </div>
                <?php endif;?>
              </div>
              <div class="col-lg-6   col-12 d-lg-flex h-100 my-auto">
                <ul class="">
                <?php if( have_rows('repeater_services') ):
                  while( have_rows('repeater_services') ): the_row(); 
                ?>

                      <?php if( have_rows('service') ):
                        while( have_rows('service') ): the_row();
                      ?>
                          <?php $name = get_sub_field('name'); ?>
                          <li class="w-100 d-flex">
                            <?php if ($name) :  ?>
                                <i class="fa fa-2x far fa-chevron-right my-auto ml-0 mr-2 "> </i>
                                <span class="text-dark font-sans my-auto ml-0 w-75 ">
                                  <?= $name ?>
                                </span>
                            <?php endif;?>  
                          </li>
                        <?php endwhile; ?>
                      <?php endif; ?>


                  <?php endwhile; ?>
                <?php endif; ?>
                </ul>
              </div>
            </div>
          </div>
        </section>
      <?php endwhile; ?>
      <?php wp_reset_postdata(  ) ;?>
    <?php endif; ?>
    <?php /*
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

        >
          <div class="container  py-3 py-lg-5 "  data-aos="fade-up" data-aos-duration="800">
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
                    <div class="col-12 col-lg-4 text-center mx-auto">
                      <div class="text-center p-2 m-auto">
                        <i class="fa fa-3x  text-white <?= $icon ?> "> </i>

                        <h5 class="text-white mx-auto my-3 ">
                          <?= $name ?>
                        </h5>

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

          style="border-top: solid 1px #002369;border-bottom: solid 1px #002369; width: 100%;"
        >
          <div class="container  py-3 py-lg-5 "           data-aos="fade-up" data-aos-duration="800" >
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
                    <div class="col-12 col-lg-6 text-left ">
                      <div class="text-left p-2 m-auto">

                        <h4 class="text-dark text-uppercase mx-auto my-1 ">
                          <?= $name ?>
                        </h4>

                        <div class="text-dark my-1 mx-auto div-left" >
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

          style="border-top: solid 1px #002369;border-bottom: solid 1px #002369; width: 100%;"
        >
          <div class="container  py-3 py-lg-5 "  data-aos="fade-up" data-aos-duration="800" >
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
                    <div class="col-12 col-lg-4  text-center ">
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
                    //*/ ?>

  <?php endwhile; ?>
<?php endif; ?>
 

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
<section id=" " class="section bg-dark h-25 d-flex   py-3 py-lg-5 " >
  <div class="container m-auto   " data-aos="fade-up" data-aos-mirror="false" >
    <div class="row my-3  ">
      <div class="col-12 col-lg-9">

        <h3 class="text-white d-flex">
          <div class="dash mr-2 ml-n4 my-auto"></div>
          Contact
        </h3>
      </div>
      <div class="col-12 col-lg-12 mx-auto ">

        <p class="text-white mx-auto ">

          <?= $cta_call ?>
        </p>
      </div>
      <div class="col-12 col-lg-9 mx-auto d-flex">
            <button class="mx-auto button mt-3"  onclick="location.href='<?php echo site_url(); ?>#contact'">Contact</button>
      </div>

    </div>
  </div>

</section>
<?php
get_footer();

