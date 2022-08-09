<?php  

if( have_rows('group_presentation') ):
  while( have_rows('group_presentation') ): the_row();
  $title = get_sub_field('title');
  $subtitle = get_sub_field('subtitle');
  $content = get_sub_field('wysiwyg');
  $title_2 = get_sub_field('title_2nd');
  $content_2 = get_sub_field('wysiwyg_2nd');

  $link = get_sub_field('link');
  $image = get_sub_field('image');
  $image_2 = get_sub_field('image_2nd');

?>
  <section  
    id="presentation"
    class="   " 
  >  
    <br>
    <div class="container-fluid section__container my-3">
      <div class="row my-3">
        <div class="col-12 col-lg-6 p-4 p-lg-2" id=" "  data-aos="slide-up" data-aos-duration="800"   >
          <div class="section-text m-auto">
            <?php if ($title) :  ?>
              <h2 class="section__title d-flex mb-3" >
            <div class="dash mr-2 ml-n4"></div>
              <?= $title ?>
            </h2>  
             <?php endif;?>
            <?php if ($subtitle) :  ?>
              <h3 class="section__subtitle" > 
                <?= $subtitle ?>
              </h3>
            <?php endif;?>
            <?php if ($content) :  ?>
              <div class="mt-2" >
                <?= $content?>

              </div>
            <?php endif;?>
          </div>   
        </div> 

        <div class="col-12 col-lg-6 d-flex" data-aos="zoom-in" data-aos-duration="800"> 
          <div class="my-3 my-lg-auto mx-auto w-100 d-flex"> 
           <img class="w-75 m-auto"
            src=" <?php echo $image['url']; ?> ">
          </div>  
        </div>
      </div>
      <div class="d-none d-lg-block p-4 w-25 mx-auto"> </div>
      <div class="row mt-3">
        <div class="col-12 col-lg-6 d-flex order-2 order-lg-1" data-aos="zoom-in" data-aos-duration="800"> 
          <div class="my-3 my-lg-auto mx-auto w-100 d-flex"> 
           <img class="w-75 m-auto"
            src=" <?php echo $image_2['url']; ?> ">
          </div>
        </div>
        <div class="col-12 col-lg-6 p-4 p-lg-2 order-1 order-lg-2" id="fiduciaire"  data-aos="slide-up" data-aos-duration="800"   >
          <div class="section-text  m-auto">
            <?php if ($title_2) :  ?>
            <h2 class="section__title d-flex mb-3">
            <div class="dash mr-2 ml-n4"></div>
              <?= $title_2 ?>
            </h2> 
            <?php endif;?>
            <?php if ($content_2) :  ?>
              <?= $content_2 ?>
            <?php endif;?>
          </div>
        </div>
      </div>
    </div>
    <br>
  </section>
<?php endwhile; ?>
<?php endif; ?>
