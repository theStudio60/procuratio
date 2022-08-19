<?php if( have_rows('option-group_conseil','option') ): 
  while( have_rows('option-group_conseil','option') ): the_row();  
    if( have_rows('group_mandats') ): 
      while( have_rows('group_mandats') ): the_row(); 
        $title = get_sub_field('title');
        $description = get_sub_field('description'); 
        $conclusion = get_sub_field('conclusion');
        $image = get_sub_field('image');
      ?>
        <section id=" " class="section bg-white  py-3 py-lg-5"   data-aos="slide-up">
          <div class="container m-auto  services"    >
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
<?php endif; ?> 