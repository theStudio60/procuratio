<?php   
if( have_rows('group_values') ):
  while( have_rows('group_values') ): the_row();
    $title = get_sub_field('title');
?>    
    <section
     id="values" class="section py-3 py-lg-4 bg-light d-flex "
  
    
    style="border-top: solid 1px #002369;border-bottom: solid 1px #002369; width: 100%;"
    >
	    <div class="container m-auto " data-aos="fade-up" data-aos-duration="400" >
        <div class="row"> 
      	  <div class="col-12 col-lg-6 p-4 p-lg-2">
            <?php if ($title) :  ?>
              <h3 class="text-dark d-flex my-3">
                <div class="dash mr-2 ml-n4 my-auto"></div>
                <?= $title ?>
              </h3>
            <?php endif;?>  
            </div>

            <div class="col-12 mx-auto mt-3">

              <div class="container ">
                <div class="row">
                  <?php if( have_rows('subgroup_values') ): ?>
                    <?php   while( have_rows('subgroup_values') ): the_row(); ?>
                      <?php 
                      $subtitle = get_sub_field('subtitle');
                      $image = get_sub_field('picto');
                      $content = get_sub_field('wysiwyg');
                      ?>
                      <div class="col-12 col-lg-4 mx-0 mx-lg-auto p-3" data-aos-mirror="false" data-aos="flip-left" data-aos-duration="600" >
                        <div class="d-flex mb-3" >
                          <img class="my-auto ml-n3 mr-2 img-fluid"  width="64px" src=" <?php echo $image['url']; ?> ">

                          <?php if ($subtitle) :  ?>
                            <h4 class="text-dark my-lg-auto my-2">
                              <?= $subtitle ?>
                            </h4>
                          <?php endif; ?>
                        </div>

                          <?php if ($content) :  ?>
                            <div class="my-lg-auto my-2">
                              <?= $content ?>
                            </div>
                          <?php endif;?>
                      </div>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </div>
              </div>
 	          </div>
          </div>
        </div>
      </div>
    </section>
  <?php endwhile; ?>
<?php endif; ?>
