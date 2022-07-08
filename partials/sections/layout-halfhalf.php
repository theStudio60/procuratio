<?php if( have_rows('section-halfhalf') ): ?>
  <?php while( have_rows('section-halfhalf') ): the_row(); ?>
    <?php 
    $title = get_sub_field('title');
    $content = get_sub_field('wysiwyg');
    $link = get_sub_field('link');
    $color = get_sub_field('background-color');
    $text_color = "";

    if ( $color == "white") : $text_color="dark"; 
    
    elseif  ( $color == "primary") : $text_color="white"; 
    elseif  ( $color == "secondary") : $text_color="white"; 

    endif;

    $image = get_sub_field('image');
    $imageSize='2048x2048';
    $imageUrl=$image['sizes'][$imageSize]; 
    ?>
    <section class="section p-0 m-0 bg-<?= $color ?>"  >
      <div class="halfhalf p-0 m-0">
        <div class=" row p-0 m-0">
          <div  style="<?php /*border-right: 32px solid #00AE9B ;*/?>" class="halfhalf__col halfhalf__col--content halfhalf__col--content--left d-flex  p-3 mt-5 m-lg-0" data-aos="fade-left" data-aos-duration="800">
            <div class="m-auto p-2 col-12 col-lg-10 ">
              <div class="p-3 text-center">
                <?php if ($title) :  ?> 
                      <h3 class="section__title text-<?= $text_color ?> mt-4" ><?= $title ?></h3>
                <?php endif;?>
                    
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
                      class="button button--transparent-primary " 
                    > 
                      <?= $link_title ?>
                    </button> 
                  </div> 
                <?php endif;?>  

              </div>
            </div>
          </div>
          <div class="d-none d-md-block halfhalf__col halfhalf__col--img m-0 p-0" >
            <?php get_template_part( 'partials/elements/this_image','halfhalf' ); ?>
          </div>
        </div>
      </div> 
    </section>    
  <?php endwhile; ?>
<?php endif; ?>