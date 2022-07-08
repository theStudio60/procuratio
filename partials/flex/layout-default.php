<?php if( have_rows('section-default') ): ?>
  <?php while( have_rows('section-default') ): the_row(); ?>
    <?php 
    $title = get_sub_field('title');
    $content = get_sub_field('wysiwyg');
    $link = get_sub_field('link');
    $color = get_sub_field('background-color');
    $button_type="";
    $text_color = "";
    $disposition = get_sub_field('disposition'); 
    if ( $color == "white") : $text_color="dark"; $button_type="primary"  ; 
    
    elseif  ( $color == "primary") : $text_color="white"; $button_type="primary"   ; 

    elseif  ( $color == "secondary") : $text_color="white";  $button_type="secondary" ; 
 
    endif;

    $image = get_sub_field('image');
    $imageSize='2048x2048';
    $imageUrl=$image['sizes'][$imageSize]; 
    ?>
    <section class="section p-0 m-0 bg-<?= $color ?>">
      <div class="section__container " data-aos="fade-up" data-aos-duration="1200">
        <div class="section__row">
          <div class="section__col mt-5">
            <?php if ($title) :  ?> 
                      <h3 class="section__title text-<?= $text_color ?> mt-4" ><?= $title ?></h3>
            <?php endif;?>
            <div class="p-0 my-5 mx-0 text-center">
              <div class="d-block  h-25">
                <?php get_template_part( 'partials/elements/this_image','fluid' ); ?>
              </div> 
            </div>
            <?php // if ($content) :  ?>
 

                <div class="section__content lead text-<?= $text_color ?>  mt-4" style="  color:#fff!important; ">
                    <p class="  text-<?= $text_color ?> " style="  ">
                    <?= $content ?>
                    </p>
                  </div>
              <?php // endif;?>


                <?php
                if ($link) :
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                  <div class="w-100 text-center my-5 ">
                    <button
                      type="button" 
                      style="" 
                      onclick="location.href='<?php echo $link_url ?>'"
                      class="button button--<?= $button_type ?> " 
                    > 
                      <?= $link_title ?>
                    </button> 
                  </div> 
                <?php endif;?>  



          </div>
        </div>
      </div> 
    </section>   
  <?php endwhile; ?>
<?php endif; ?>
