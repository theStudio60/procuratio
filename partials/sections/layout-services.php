<?php if( have_rows('group_services') ):
  while( have_rows('group_services') ): the_row();
    $title = get_sub_field('title');
    $content = get_sub_field('description'); 
    $conclusion = get_sub_field('conclusion'); 
?>
 
  <section id="services" class="section section  py-3 py-lg-5">
    <div class="container m-auto  services">
      <div class="row">
        <div class="col-12 col-lg-9  ">

        <?php if ($title) :  ?>
                <div class="h-25" style="min-height:96px" >
                <h3 class=" mx-auto p-4 my-auto text-dark"  >
                  <?= $title ?>
                </h3>
                </div>
                
              <?php endif;?>
          <?php if ($content) :  ?>
            <p>
              <?= $content ?>
            </p>

          <?php endif;?>
	      </div>
        <div class="col-12 m-auto ">
          <div class="container">
 
            <div class="row">

                <?php
                if( have_rows('subgroup_services') ):
                  while( have_rows('subgroup_services') ): the_row();
                    $subtitle = get_sub_field('service');
                    $price = get_sub_field('price');
                    $content = get_sub_field('wysiwyg'); 
                  ?>
                    <div class="col-12 col-md-6 col-lg-4"  >
                      <div class="card w-100 mx-0 mx-md-auto px-3"   >
                        <div class="hide-arc"></div>
                        <div class="arc"></div>
                        <?php if ($subtitle) :  ?>
                          <span class="lead my-auto">
                            <?= $subtitle ?>
                          </span>
                        <?php endif;?>
                        <?php if ($content) :  ?>
                            <?= $content ?>
                        <?php endif;?>
                        <?php if ($price) :  ?>
                          <div class="price">
                            <?= $price ?>
                          </div>
                        <?php endif;?>
                      </div> <?php //end  card  ?>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?><?php //end subgroup_services ?>
      
            </div>
          </div>
          <?php if ($conclusion) :  ?>
            <p class="mt-3" >
              <?= $conclusion ?>
            </p>
          <?php endif;?>
        </div>
      </div>
    </div>
  </section>
  <?php endwhile; ?>
<?php endif; ?>
