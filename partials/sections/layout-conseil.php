<?php if( have_rows('group_conseil') ):
      while( have_rows('group_conseil') ): the_row();
        $title = get_sub_field('title');
        $description = get_sub_field('wysiwyg');
        $conclusion = get_sub_field('conclusion');
        //$image = get_sub_field('image');
    ?>
        <section id="conseil" class="section bg-white  py-3 py-lg-5">
          <div class="container m-auto services"  data-aos="fade-up" data-aos-duration="400">
            <div class="row">
              <div class="col-12 col-lg-9 mx-auto">
                <?php if ($title) :  ?>
                  <div class="mx-auto d-flex w-100">
                    <h3 class="text-dark d-flex my-3 mx-auto text-center" >
                      <div class="dash mr-2 ml-n4 my-auto"></div>
                      <?= $title ?>
                    </h3>
                  </div>

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
                            <div class="col-12 col-md-6 col-lg-4 d-flex py-4">
                              <div class="container">
                                <div class="row">
                                  
                                  <?php if ($picto) :  ?>
                                    <div class="col-12 d-flex">
                                      <span class=" mt-auto mx-auto w-100 d-flex">
                                        <img class="mx-auto" width="64px" height="64px" src="<?php echo $picto['url']; ?>" alt="">
                                      </span>
                                    </div>

                                  <?php endif;?> 
                                  <?php if ($name) :  ?>
                                    <div class="col-12 d-flex">

                                      <span class="w-100 text-center text-dark font-sans mx-auto mt-2 mb-auto">
                                        <?= $name ?>
                                      </span>
                                    </div>
                                  <?php endif;?> 
                                </div>
                              </div>
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
                <?php
                $thisLink = get_sub_field('link');
                  
                // var_dump( $thisLink ); ?>
                <?php if ($thisLink) :
                  $link_url = $thisLink['url'];
                  $link_title = $thisLink['title'];
                  $link_target = $thisLink['target'] ? $thisLink['target'] : '_self';
                ?>
                  <div class="row w-100 my-3">
                    <button
                     type="button"
                     style=""
                     onclick="location.href='<?php echo $link_url ?>'"
                     class="mx-auto button"
                     >
                      <?= $link_title ?>
                    </button>
                  </div>
                <?php endif;?>
              </div>
             
            </div>
          </div>
        </section>
      <?php endwhile; ?>
      <?php wp_reset_postdata(  ) ;?>
    <?php endif; ?>