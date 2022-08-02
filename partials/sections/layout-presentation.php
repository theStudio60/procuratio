
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
      <div class="row section__row">
        <div class="col-12 col-lg-6 block" id="quisommesnous" data-aos="fade-down">
          <div class="section__img section__img--wrap"> 
           <img 
            src=" <?php echo $image['url']; ?> ">
          </div>
          <div class="section-text">
            <?php if ($title) :  ?>
            <h2 class="section__title">
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

        <div class="col-12 col-lg-6 block" id="fiduciaire" data-aos="fade-in">
          <div class="section-text">
            <?php if ($title_2nd) :  ?>
            <h2 class="section__title">
              <?= $title_2nd ?>
            </h2>
            <?php endif;?>
            <?php if ($content_2nd) :  ?>
              <?= $content_2nd ?>
            <?php endif;?>
          </div>
          <div class="section__img col-4"> 
           <img 
            src=" <?php echo $image_2nd['url']; ?> ">
          </div>
        </div>
      </div>
    </div>
    <br>
  </section>
<?php endwhile; ?>
<?php endif; ?>