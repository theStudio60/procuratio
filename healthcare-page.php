<?php
/**
 * Template Name: healthcare-page
 *
 * @package studio_soixante
 */
get_header();
if( have_rows('page-healthcare_acf_group') ): 
  while( have_rows('page-healthcare_acf_group') ): the_row(); 
    get_template_part( 'partials/sections/hero', 'page' );
  endwhile;
endif;

if( have_rows('options-group_healthcare','option') ): 
  while( have_rows('options-group_healthcare','option') ): the_row(); 
    $title = get_sub_field('title');
    $intro = get_sub_field('introduction');
    $bg_color = get_sub_field('background-color');
    $text_color = "";
    if ( $bg_color == "white") : $text_color="dark"; $button_type="primary"  ; 
    elseif ( $bg_color == "light") : $text_color="dark"; $button_type="primary"  ; 
    elseif  ( $bg_color == "primary") : $text_color="white"; $button_type="primary"   ;
    elseif  ( $bg_color == "dark") : $text_color="white"; $button_type="primary"   ;
    elseif  ( $bg_color == "secondary") : $text_color="white";  $button_type="secondary" ; 
    endif;
    ?>
    <section class="section  p-0 m-0 bg-<?= $bg_color ?>">
      <div class="section__container container ">
        <div class="row p-0 my-auto d-flex" style=" ">
          <div class="section__col  m-auto text-center ">
            <div class="p-2">
              <?php if ($title) :  ?> 
                <h3 class="section__subtitle text-center  text-<?= $text_color ?> my-4"><?= $title ?></h3>
              <?php endif;?>
              <?php if ($intro) :  ?>
                <div class="section__content lead text-<?= $text_color ?>  "  >
                  <p class="  " style="  ">
                    <?= $intro ?>
                  </p>
                </div>
              <?php  endif;?>
            </div>
          </div>
        </div>
  <?php endwhile; ?>
<?php endif; ?> 
<?php if( have_rows('options-group_healthcare','option') ): ?>
  <?php while( have_rows('options-group_healthcare','option') ): the_row();?>
    <div class="row">
      <div class="section__col m-0">
        <ul class="row p-2 my-5">
          <?php if( have_rows('options-group_healthcare_repeater') ): ?>
            <?php while( have_rows('options-group_healthcare_repeater') ): the_row(); ?>
              <?php if( have_rows('options-group_healthcare_repeater-object') ): ?>
                <?php while( have_rows('options-group_healthcare_repeater-object') ): the_row();
                  $title = get_sub_field('name');
                  $icon = get_sub_field('icon');
                  $ID = get_sub_field('id');
                ?>
                  <li class="mx-auto my-5 col-12 col-lg-4  text-center  ">
                    <?php if( $icon ):
                      // Image variables.
                      $url = $icon['url']; 
                      $alt = $icon['alt'];
                      // Thumbnail size attributes.
                      $size = 'thumbnail';
                      $thumb = $icon['sizes'][ $size ];
                      $width = $icon['sizes'][ $size . '-width' ];
                      $height = $icon['sizes'][ $size . '-height' ];
                    ?>
                      <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" />
                    <?php endif; ?>
                    <a class="text-<?= $text_color ?>  " href="#<?= $ID ?>">
                      <h4 class="m-3">
                        <?= $title ?>  
                      </h4> 
                    </a>
                  </li>
                <?php endwhile?>
              <?php endif ?>
            <?php endwhile; ?>
          <?php endif;?>
        </ul>
      </div>
    </div>
  <?php endwhile; ?>
<?php endif; ?> 

  </div>
</section>
<?php if( have_rows('options-group_healthcare','option') ): ?>
  <?php while( have_rows('options-group_healthcare','option') ): the_row();?>
<?php if( have_rows('options-group_healthcare_repeater') ): ?>
  <?php while( have_rows('options-group_healthcare_repeater') ): the_row(); ?>
    <?php if( have_rows('options-group_healthcare_repeater-object') ): ?>
      <?php while( have_rows('options-group_healthcare_repeater-object') ): the_row(); ?>
      <?php
        $title = get_sub_field('name');
        $content = get_sub_field('wysiwyg');
        $ID = get_sub_field('id');
        $image = get_sub_field('image');
        $imageSize='2048x2048';
        $imageUrl=$image['sizes'][$imageSize]; 
        $color = get_sub_field('background-color');
        $button_type="";
        $text_color = "";
        $position = get_sub_field('position');
        $other_position = "";
        if ( $position == "1") : $other_position="2";  
        elseif ( $position == "2") : $other_position="1";  
        endif;
        if ( $color == "white") : $text_color="dark"; $button_type="primary"  ; 
        elseif ( $color == "light") : $text_color="dark"; $button_type="primary"  ; 
        elseif  ( $color == "primary") : $text_color="white"; $button_type="primary"   ;
        elseif  ( $color == "dark") : $text_color="white"; $button_type="primary"   ;
        elseif  ( $color == "secondary") : $text_color="white";  $button_type="secondary" ; 
        endif;
      ?>
        <section id="<?= $ID ?>" class="section    m-0 bg-<?= $color ?>" style="min-height:80vh;">
          <div class="container" data-aos="fade-right" data-aos-duration="1200">
            <div class="row">
              <div class="col-10 col-md-8 order-<?= $position ?>  my-auto  text-left bg-<?= $color ?> " style="padding-bottom:64px">
                <div class="p-2 my-md-auto">
                  <?php if ($title) :  ?> 
                    <h1 class="section__title text-<?= $text_color ?>   my-4" ><?= $title ?></h1>
                  <?php endif;?>
                  <?php  if ($content) :  ?>
                    <div class="section__content text-<?= $text_color ?>"  >
                      <p class="  text-dark" style="  ">
                        <?= $content ?>
                      </p>
                    </div>
                  <?php  endif;?> 
                </div>
              </div>
              <div class="d-none d-md-block col-10 col-md-4 my-5 my-md-auto d-flex order-<?= $other_position ?>">
                <?php if ($image) :  ?> 
                  <?php get_template_part( 'partials/elements/this_image','360p' ); ?>
                <?php endif;?>
              </div>
            </div>
          </div>
        </section>
      <?php endwhile?>
    <?php endif ?>
  <?php endwhile; ?>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?> 
<?php if( have_rows('group_flex-content') ): ?>
  <?php while( have_rows('group_flex-content') ): the_row(); ?>
    <?php if( have_rows('flex-content') ): ?>
      <?php while( have_rows('flex-content') ): the_row(); ?>
        <?php get_template_part( 'partials/flex/layout','default' ); ?>
        <?php get_template_part( 'partials/flex/layout','center' ); ?>
        <?php get_template_part( 'partials/flex/layout','halfhalf' ); ?>
      <?php endwhile; ?>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>
<?php get_template_part( 'partials/sections/layout','calltoaction' ); ?>
<?php get_footer();
