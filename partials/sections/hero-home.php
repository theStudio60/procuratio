
<?php  

if( have_rows('group_hero') ):
  while( have_rows('group_hero') ): the_row();
  $title = get_sub_field('title');
  $subtitle = get_sub_field('subtitle');
  $content = get_sub_field('wysiwyg');

  $link = get_sub_field('link');
/*
  $image = get_sub_field('image');
  $imageSize='2048x2048';
  $imageUrl=$image['sizes'][$imageSize]; 
//*/
?>
<?php 
if ( has_post_thumbnail() ) { 
  $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
 ?>
<?php } ;?>  
  <section  
    id="hero "
    class="hero d-flex  "
    style="
 
    background: url('<?= $backgroundImg[0]; ?>');
    "
  >  
  <div class="hero__overlay hero__overlay--default h-100 " >
    <div class="hero__container m-auto">
      <div class="hero__row">
        <div class="hero__col hero__col-- "  >
          <?php //<div class="my-auto " style="  border-left:16px solid #00AE9B ;"> ?>
          <div class="my-auto " style=" "> 
            <div class="p-0 " data-aos="fade-right" data-aos-duration="800">
              <?php if ($title) :  ?>
                <h1 class="hero__title mb-2 mt-5 mt-lg-auto"> 
                  <?= $title ?> 
                </h1> 
              <?php endif;?>
              <?php if ($subtitle) :  ?>

                <h3 class="hero__subtitle mb-2"  > 
                  <?= $subtitle ?>
                </h3>
               
              <?php endif;?>
              <?php if ($content) :  ?>
                <br>
                <div class="hero__content mb-2"> 
                  <?= $content?>
                </div>
                <br>
              <?php endif;?>
              <div class="w-100 d-md-flex  text-center">
                <?php if (have_rows('website_settings','option')):
                  while (have_rows('website_settings','option')):the_row();
                    if (have_rows('global_settings')):
                      while (have_rows('global_settings')):the_row();
                        $thislink = get_sub_field('main_cta');
                ?> 
                      <?php endwhile; ?>
                    <?php endif; ?>
                  <?php endwhile;?>
                <?php endif;?> 

                <?php if ($link) :
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                  <button
                    type="button" 
                    style="" 
                    onclick="location.href='<?php echo $link_url ?>'"
                    class="button" 
                  > 
                      <?= $link_title ?>
                  </button> 
                <?php endif;?>  
              </div> 
            </div>
          </div>
        </div> <!--col -->
      </div>
    </div>
  </div>
    <?php  /*
    $images = get_sub_field('slider');
    if( $images ): ?>
      <div class="hero__slider">
        <?php foreach( $images as $image ): ?>
          <div class="hero__slider__img" style="opacity:0.5;background-image:url(<?= esc_url($image['url']);?>)"></div>
        <?php endforeach; ?>
      </div>
    <?php endif; //*/ ?>  
    
   
  </section>
<?php endwhile; ?>
<?php endif; ?>
<?php
// get_template_part('partials/nav/underhero');
?>
