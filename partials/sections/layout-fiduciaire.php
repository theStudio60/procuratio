<?php  

if( have_rows('group_fiduciaire') ):
  while( have_rows('group_fiduciaire') ): the_row();
  $title = get_sub_field('title');
  $subtitle = get_sub_field('subtitle');
  $content = get_sub_field('wysiwyg');
  
  $link = get_sub_field('link');
  $image = get_sub_field('image'); 
?>
  <section  
    id="fiduciaire"
    class="section bg-dark text-white  py-3 py-lg-5" 
    data-aos="slide-up" data-aos-duration="800" 
  >  
   
    <div class="container  py-3 py-lg-5 ">
      <div class="row my-3">
        <div class="col-12 col-lg-9 p-4 p-lg-2" id=" " >
              <?php if ($title) :  ?>
                <h3 class="text-white d-flex mb-3">
                  <div class="dash mr-2 ml-n4 my-auto"></div>
                  <?= $title ?>
                </h3> 
              <?php endif;?>
              
              <?php if ($content) :  ?>
                <?= $content ?>
              <?php endif;?>
              

        </div>
      
         
      </div>
      <div class="row w-100 h-100">
                <?php if( have_rows('repeater_columns') ): ?>
                  <?php while( have_rows('repeater_columns') ): the_row(); ?>
         

                    <?php if( have_rows('group_column') ): ?>
                      <?php while( have_rows('group_column') ): the_row();
                        //$title = get_sub_field('title');
                        $icon = get_sub_field('icon');
                        $content = get_sub_field('content');
                      ?>
                      <div class="col-12 col-lg-3 text-center ">
                        <div class="text-center p-2">
                          <i class="fa fa-2x text-white <?= $icon ?> "> </i>
                          <br>
                          <p class="text-white my-4">
                            <?= $content ?>
                          </p>
                        </div>

                      </div>
                      <?php endwhile; ?>
                    <?php endif; ?> 
                  <?php endwhile; ?>
                <?php endif; ?> 
        </div>
    </div>
 
  </section>
<?php endwhile; ?>
<?php endif; ?>
