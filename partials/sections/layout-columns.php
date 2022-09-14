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
 class="w-100 section  py-3 py-lg-5 bg-light"
 id="partners"
>

  <div class="container  h-100 px-0   " data-aos="fade-up" data-aos-duration="400" >
    <?php if( have_rows('option-group_fiduciaire','option') ): ?>
      <?php while( have_rows('option-group_fiduciaire','option') ): the_row();
        $title = get_sub_field('title');
        $content = get_sub_field('content');
      ?>
        <div class="row p-0 h-100 w-100">
          <div class="col-12 col-lg-9 p-0 p-lg-2" id=" " >
            <div class="section-text m-auto">
              <?php if ($title) :  ?>
                <h3 class="text-dark d-flex my-3">
                  <div class="dash mr-2 ml-0 ml-lg-n4 my-auto"></div>
                  <?= $title ?>
                </h3>
              <?php endif;?>
              <?php if ($content) :  ?>
                <p class="text-dark d-flex mb-3">
                  <div class="dash mr-2 ml-0 ml-lg-n4 my-auto"></div>
                  <?= $content ?>
                </p>
              <?php endif;?>
            </div>
          </div>
        </div>
        <div class="row my-3">
          <?php if( have_rows('pack_startups') ): ?>
            <?php while( have_rows('pack_startups') ): the_row();
              $title = get_sub_field('title');
              //$content = get_sub_field('content');
              //$enterprisesSubtitle = get_sub_field('subtitle');
              //$thisId = get_sub_field('pack_title');
            ?>
              <div class="col-12 col-lg-3 p-0 p-lg-2 my-5 my-lg-2 d-flex border-left border-right" id=" " >
                <div class="w-100 p-1 ">
                  <?php if ($title) :  ?>
                    <h4 class="text-dark mb-3 mx-auto text-center">

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
              //$content = get_sub_field('content');
              //$enterprisesSubtitle = get_sub_field('subtitle');
              //$thisId = get_sub_field('pack_title');
            ?>
              <div class="col-12 col-lg-3 p-0 p-lg-2 my-5 my-lg-2 d-flex border-left border-right" id=" " >
                <div class="w-100 p-1 ">
                  <?php if ($title) :  ?>
                    <h4 class="text-dark mb-3 mx-auto text-center">

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
              <div class="col-12 col-lg-3 p-0 p-lg-2 my-5 my-lg-2 d-flex border-left border-right" id=" " >
                <div class="w-100 p-1 ">
                  <?php if ($title) :  ?>
                    <h4 class="text-dark mb-3 mx-auto text-center">

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
              <div class="col-12 col-lg-3 p-0 p-lg-2 my-5 my-lg-2 d-flex border-left border-right" id=" " >
                <div class="w-100 p-1 ">
                  <?php if ($title) :  ?>
                    <h4 class="text-dark mb-3 mx-auto text-center">

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
      <?php endwhile?>
    <?php endif; ?>
    <div class="row w-100">
      <button  onclick="location.href='<?php echo site_url(); ?>/fiduciaire'" class="mx-auto button">En savoir plus</button>
    </div>
  </div>
</section>
