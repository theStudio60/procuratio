<?php   if( have_rows('group_values') ):
  while( have_rows('group_values') ): the_row();
    $title = get_sub_field('title'); 
    $content = get_sub_field('wysiwyg'); 
    $image = get_sub_field('image'); 
?>
    <section  
      id="presentation"
      class=" bg-white" 
    >  
      <div class="container  py-3 py-lg-5 ">
        <div class="row my-3">
          <div class="col-12 col-lg-6 d-flex" data-aos="zoom-in" data-aos-duration="800"> 
            <div class="my-3 my-lg-auto mx-auto w-100 d-flex"> 
             <img class="w-75 m-auto"
              src=" <?php echo $image['url']; ?> ">
            </div>  
          </div>
          <div class="col-12 col-lg-6 p-4 p-lg-2" id="values" data-aos="slide-right" data-aos-duration="800"  >
            <div class="section-text m-auto">
              <?php if ($title) :  ?>
                <h3 class="text-dark d-flex mb-3" >
                  <div class="dash mr-2 ml-n4 my-auto"></div>
                  <?= $title ?>
                </h3>  
              <?php endif;?>
              <?php if ($content) :  ?>
                <div class="mt-2"  >
                  <?= $content?>
                </div>
              <?php endif;?>
            </div>   
          </div> 

        </div>
      </div>
    </section>
  <?php endwhile; ?>
<?php endif; ?>
