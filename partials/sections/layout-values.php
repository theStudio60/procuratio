<?php   
if( have_rows('group_values') ):
  while( have_rows('group_values') ): the_row();
    $title = get_sub_field('title');
?>    
    <section
     id="values" class="section mt-5 py-3 py-lg-4 bg-light "
  
    
    style="border-top: solid 1px #002369;border-bottom: solid 1px #002369; width: 100%;"
    >
	    <div class="container my-3">
        <div class="row"> 
      	  <div class="col-12 col-lg-9 ">
            <?php if ($title) :  ?>
              <h3 class="text-dark d-flex">
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
                      <div class="col-12 col-lg-4 mx-0 mx-lg-auto" data-aos="flip-left">
                        <div class="d-flex mb-3" >
                          <img class="my-auto ml-n5 mr-3 img-fluid"  width="64px" src=" <?php echo $image['url']; ?> ">

                          <?php if ($subtitle) :  ?>
                            <h4 class="text-dark my-auto">
                              <?= $subtitle ?>
                            </h4>
                          <?php endif; ?>
                        </div>

                          <?php if ($content) :  ?>
                              <?= $content ?>
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
