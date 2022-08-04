<?php  

if( have_rows('group_presentation') ):
  while( have_rows('group_presentation') ): the_row();
  $title = get_sub_field('title');
  $subtitle = get_sub_field('subtitle');
  $content = get_sub_field('wysiwyg');
  $title_2nd = get_sub_field('title_2nd');
  $content_2nd = get_sub_field('wysiwyg_2nd');

  $link = get_sub_field('link');
  $image = get_sub_field('image');
  $image_2nd = get_sub_field('image_2nd');

?>
  <section  
    id="presentation"
    class="section presentation"
    data-aos="fade-in"
  >  
    <br>
    <div class="container-fluid section__container">
      <div class="row mb-3">
        <div class="col-12 col-lg-6 block" id="quisommesnous" data-aos="fade-down">
          <div class="section-text m-auto">
            <?php if ($title) :  ?>
            <h2 class="section__title mb-3">
              <?= $title ?>
            </h2>
             <?php endif;?>
            <?php if ($subtitle) :  ?>
              <h3 class="section__subtitle"  > 
                <?= $subtitle ?>
              </h3>
            <?php endif;?>
            <?php if ($content) :  ?>
                <?= $content?>
            <?php endif;?>
          </div>   
        </div> 
        <div class="col-12 col-lg-6 d-flex"  data-aos="fade-down"> 
          <div class="my-3 my-lg-auto mx-auto w-100 d-flex"> 
           <img class="w-75 m-auto"
            src=" <?php echo $image['url']; ?> ">
          </div>  
        </div>
      </div>
      <div class="d-none d-lg-block p-4 w-25 mx-auto"><hr/></div>
      <div class="row mt-3">
        <div class="col-12 col-lg-6 d-flex order-2 order-lg-1"  data-aos="fade-down"> 
          <div class="my-3 my-lg-auto mx-auto w-100 d-flex"> 
           <img class="w-75 m-auto"
            src=" <?php echo $image_2nd['url']; ?> ">
          </div>
        </div>
        <div class="col-12 col-lg-6 block order-1 order-lg-2" id="fiduciaire" data-aos="fade-in">
          <div class="section-text  m-auto">
            <?php if ($title_2nd) :  ?>
            <h2 class="section__title">
              <?= $title_2nd ?>
            </h2>
            <?php endif;?>
            <?php if ($content_2nd) :  ?>
              <?= $content_2nd ?>
            <?php endif;?>
          </div>
        </div>
      </div>
    </div>
    <br>
  </section>
<?php endwhile; ?>
<?php endif; ?>
