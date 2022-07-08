<?php if( have_rows('section-center') ): ?>
  <?php while( have_rows('section-center') ): the_row(); ?>
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
        <section class="section  p-0 m-0 bg-<?= $color ?>">
      <div class="section__container container d-flex h-100" data-aos="fade-up" data-aos-duration="1200">
        <div class="row p-0 m-auto d-flex"style="min-height:50vh">
          <div class="section__col  m-auto text-center h-100">
              <div class="p-0">
                <?php if ($title) :  ?> 
                      <h3 class="section__title text-center text-<?= $text_color ?> mt-4" ><?= $title ?></h3>
                <?php endif;?>
                    
                <?php //  if ($content) :  ?>
                  <div class="section__content lead text-<?= $text_color ?>  mt-4"  >
                    <p class="  text-<?= $text_color ?> " style="  ">
                    <?= $content ?>
                    </p>
                  </div>
                <?php //  endif;?> 
           
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
      </div> 
    </section>   
  <?php endwhile; ?>
<?php endif; ?>
