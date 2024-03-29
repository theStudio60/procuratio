<style>
div#desc p
{
  font-size:15px;
  margin-top:8px;
  text-align:center;
  color:#002369;
}
</style>
<section
 style="border-bottom:1px solid #002369;border-top:1px solid #002369; overflow-y:visible"
 class="bg-light"
 id="partners"
>

  <div class="container  py-3 py-lg-5 " data-aos="fade-up" data-aos-duration="400" >
    <?php if( have_rows('option-group_fiduciaire','option') ): ?>
      <?php while( have_rows('option-group_fiduciaire','option') ): the_row();
        $title = get_sub_field('title');
        $content = get_sub_field('content');

      ?>
        <div class="row my-3">
          <div class="col-12 p-4 p-lg-2" id=" " >
             
          <div class="section-text m-auto">
          <?php if ($title) :  ?>
              <div class="d-flex w-100">
                <div class="dash mr-2 ml-n4 my-auto d-none d-lg-block"></div>
                <h3 class="text-dark d-flex my-3" >

                  <?= $title ?>
                </h3>  
              </div>

            <?php endif;?>
 
 
            <?php if ($content) :  ?>
              <div class="mt-2 ml-lg-2"  >
                <?= $content?>

              </div>
            <?php endif;?>
          </div>   
             
          </div>
        </div>
        <div class="row my-3 p-2 p-lg-0">
          <?php if( have_rows('pack_startups') ): ?>
            <?php while( have_rows('pack_startups') ): the_row();
              $title = get_sub_field('title');
              //$content = get_sub_field('content');
              //$enterprisesSubtitle = get_sub_field('subtitle');
              //$thisId = get_sub_field('pack_title');
            ?>
              <div class="col-10 col-lg-3 p-0 p-lg-2 my-2 my-lg-2 d-flex " id=" " >
                <div class="w-100 p-1 ">
                  <?php if ($title) :  ?>
                    <h4 class="text-dark mb-lg-3 mx-auto text-left d-none d-lg-block">

                      <?= $title ?>
                    </h4>
                    <h4 class="text-dark my-1 ml-0 text-left d-block d-lg-none">

                    <?= $title ?>
                    </h4>
                  <?php endif;?>
                  <?php if( have_rows('repeater_services') ): ?>
                    <?php while( have_rows('repeater_services') ): the_row(); ?>
                      <?php if( have_rows('service') ): ?>
                        <?php while( have_rows('service') ): the_row();
                          $name = get_sub_field('name');

                        ?>
                          <div class="d-flex">
                            <span class=" my-auto ml-0 mr-2 d-flex">
                              <i class="fa fa-md far fa-chevron-right ml-auto mr-0 my-auto text-secondary"> </i>
                            </span>
                            <h6 class="text-dark text-left ml-1 my-2">
                              <?= $name ?>
                            </h6>
                          </div> 
                        <?php endwhile; ?>
                      <?php endif; ?>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </div>
              </div>
              <br>
            <?php endwhile?>
          <?php endif; ?>
          <?php if( have_rows('pack_compta') ): ?>
            <?php while( have_rows('pack_compta') ): the_row();
              $title = get_sub_field('title');
              $thisLink = get_sub_field('link');
              //$content = get_sub_field('content');
              //$enterprisesSubtitle = get_sub_field('subtitle');
              //$thisId = get_sub_field('pack_title');
            ?>
              <div class="col-10 col-lg-3 p-0 p-lg-2 my-2 my-lg-2 d-flex " id=" " >
                <div class="w-100 p-1 ">
                  <?php if ($title) :  ?>
                    <h4 class="text-dark mb-lg-3 mx-auto text-left d-none d-lg-block">

                      <?= $title ?>
                    </h4>
                    <h4 class="text-dark my-1 ml-0 text-left d-block d-lg-none">

                    <?= $title ?>
                    </h4>
                  <?php endif;?>
                  <?php if( have_rows('repeater_services') ): ?>
                    <?php while( have_rows('repeater_services') ): the_row(); ?>
                      <?php if( have_rows('service') ): ?>
                        <?php while( have_rows('service') ): the_row();
                          $name = get_sub_field('name');

                        ?>
                          <div class="d-flex">
                            <span class=" my-auto ml-0 mr-2 d-flex">
                              <i class="fa fa-md far fa-chevron-right ml-auto mr-0 my-auto text-secondary"> </i>
                            </span>
                            <h6 class="text-dark text-left ml-1 my-2">
                              <?= $name ?>
                            </h6>
                          </div> 
                        <?php endwhile; ?>
                      <?php endif; ?>
                    <?php endwhile; ?>
                  <?php endif; ?>


                </div>
              </div>
              <br>
            <?php endwhile?>
          <?php endif; ?>
          <?php if( have_rows('pack_ana') ): ?>
            <?php while( have_rows('pack_ana') ): the_row();
              $title = get_sub_field('title');
              //$content = get_sub_field('content');
              //$enterprisesSubtitle = get_sub_field('subtitle');
              //$thisId = get_sub_field('pack_title');
            ?>
              <div class="col-10 col-lg-3 p-0 p-lg-2 my-2 my-lg-2 d-flex " id=" " >
                <div class="w-100 p-1 ">
                  <?php if ($title) :  ?>
                    <h4 class="text-dark mb-lg-3 mx-auto text-left d-none d-lg-block">

                      <?= $title ?>
                    </h4>
                    <h4 class="text-dark my-1 ml-0 text-left d-block d-lg-none">

                    <?= $title ?>
                    </h4>
                  <?php endif;?>
                  <?php if( have_rows('repeater_services') ): ?>
                    <?php while( have_rows('repeater_services') ): the_row(); ?>
                      <?php if( have_rows('service') ): ?>
                        <?php while( have_rows('service') ): the_row();
                          $name = get_sub_field('name');

                        ?>
                          <div class="d-flex">
                            <span class=" my-auto ml-0 mr-2 d-flex">
                              <i class="fa fa-md far fa-chevron-right ml-auto mr-0 my-auto text-secondary"> </i>
                            </span>
                            <h6 class="text-dark text-left ml-1 my-2">
                              <?= $name ?>
                            </h6>
                          </div> 
                        <?php endwhile; ?>
                      <?php endif; ?>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </div>
              </div>
              <br>
            <?php endwhile?>
          <?php endif; ?>
          <?php if( have_rows('pack_mandats') ): ?>
            <?php while( have_rows('pack_mandats') ): the_row();
              $title = get_sub_field('title');
              //$content = get_sub_field('content');
              //$enterprisesSubtitle = get_sub_field('subtitle');
              //$thisId = get_sub_field('pack_title');
            ?>
              <div class="col-10 col-lg-3 p-0 p-lg-2 my-2 my-lg-2 d-flex " id=" " >
                <div class="w-100 p-1 ">
                  <?php if ($title) :  ?>
                    <h4 class="text-dark mb-lg-3 mx-auto text-left d-none d-lg-block">

                      <?= $title ?>
                    </h4>
                    <h4 class="text-dark my-1 ml-0 text-left d-block d-lg-none">

                    <?= $title ?>
                    </h4>
                  <?php endif;?>
                  <?php if( have_rows('repeater_services') ): ?>
                    <?php while( have_rows('repeater_services') ): the_row(); ?>
                      <?php if( have_rows('service') ): ?>
                        <?php while( have_rows('service') ): the_row();
                          $name = get_sub_field('name');

                        ?>
                          <div class="d-flex">
                            <span class=" my-auto ml-0 mr-2 d-flex">
                              <i class="fa fa-md far fa-chevron-right ml-auto mr-0 my-auto text-secondary"> </i>
                            </span>
                            <h6 class="text-dark text-left ml-1 my-2">
                              <?= $name ?>
                            </h6>
                          </div> 
                        <?php endwhile; ?>
                      <?php endif; ?>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </div>
              </div>
              <br>
            <?php endwhile?>
          <?php endif; ?>
        </div> 
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
      <?php endwhile?>
    <?php endif; ?>
  </div>
</section>
