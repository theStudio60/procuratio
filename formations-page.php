<?php
/**
 * Template Name: formations-page
 *
 * @package studio_soixante
 */
get_header();
if( have_rows('page-formations_acf_group') ): 
  while( have_rows('page-formations_acf_group') ): the_row(); 
    get_template_part( 'partials/sections/hero', 'page' );
    /* 
    //*/
  endwhile;
endif;

if( have_rows('options-group_formations','option') ): 
  while( have_rows('options-group_formations','option') ): the_row(); 
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
    <section class="section  p-4 m-0 bg-<?= $bg_color ?>">
      <div class="section__container container h-100">
        <div class="row p-0 my-auto d-flex" style=" ">
          <div class="section__col  m-auto text-center ">
            <div class="p-2">
              <?php if ($title) :  ?> 
                    <h3 class="section__subtitle text-center  text-<?= $text_color ?> my-4"><?= $title ?></h3>
              <?php endif;?>
              <?php  if ($intro) :  ?>
                <div class="section__content lead text-<?= $text_color ?>">
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
<hr class="bg-white">
<div class="row"> 
  <?php if( have_rows('options-group_formations','option') ): ?>
    <?php while( have_rows('options-group_formations','option') ): the_row();?>
      <?php if( have_rows('options-group_formations_repeater') ): ?>
        <?php while( have_rows('options-group_formations_repeater') ): the_row(); ?>
          <?php if( have_rows('options-group_formations_repeater-object') ): ?>
            <?php while( have_rows('options-group_formations_repeater-object') ): the_row();
              $title = get_sub_field('name');
              $icon = get_sub_field('icon');
              $ID = get_sub_field('id');
            ?>
              <div class="col-10 col-md-4 col-lg-3 p-lg-4 my-2">
                  <div class="m-auto  p-1 w-100">
                    <a class="d-flex text-<?= $text_color ?>  " href="#<?= $ID ?>" style="border-bottom:none!important;">
                    <?php if( $icon ):
                        $url = $icon['url']; 
                        $alt = $icon['alt'];
                        $size = 'thumbnail';
                        $thumb = $icon['sizes'][ $size ];
                        $width = $icon['sizes'][ $size . '-width' ];
                        $height = $icon['sizes'][ $size . '-height' ];
                      ?>
                        <div class="d-block my-auto">
                          <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" height="32" width="32" />
                        </div>
                      <?php endif; ?>
                      <span class="p-1 my-auto ">
                        <?= $title ?>  
                    </span> 
                    </a>
                  </div>
              </div>
            <?php endwhile?>
          <?php endif ?>
        <?php endwhile; ?>
      <?php endif;?>
</div>
      </div>
    </div>
  </section>
  <div class="w-100 bg-light">
    <div class="container p-4">
      <div class="row  ">
        <div class="d-flex">
          <div class="prev d-flex"><i class="prev fa fa-2x fa-arrow-left text-secondary my-auto"></i> </div>
          <h4 class="p-2 text-secondary my-auto"><?= the_title(); ?></h4>
          <div class="next d-flex"><i class="next fa fa-2x fa-arrow-right text-secondary my-auto"></i></div>
        </div>
      </div>    
    </div>
  </div>
  
  <div class="slick-slider bg-secondary p-0 m-0">
  
    <?php if( have_rows('options-group_formations_repeater') ): ?>
      <?php while( have_rows('options-group_formations_repeater') ): the_row(); ?>
        <?php if( have_rows('options-group_formations_repeater-object') ): ?>
          <?php while( have_rows('options-group_formations_repeater-object') ): the_row(); ?>
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
            <section  class="section  m-0 bg-secondary" style="min-height:50vh">
              <div class="container" id="<?= $ID ?>" >
                <div class="row">
                  <div class="col-12 col-md-8 order-<?= $position ?>  my-auto  text-left bg-secondary" style="padding-bottom:64px">
                    <div class="p-2 my-md-auto">
                      <?php if ($title) :  ?> 
                        <h3 class="section__subtitle text-light  my-4" ><?= $title ?></h3>
                      <?php endif;?>
                      <?php  if ($content) :  ?>
                        <div class="section__content text-light"  >
                          <p class="" style="  ">
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

</div>
<script>
    $('.slick-slider').slick({
        slidesToShow: 1,
        autoplay: false,
        autoplaySpeed: 0,
        speed: 800,
        cssEase:'linear',
        infinite: true,
        focusOnSelect: false, 
        arrows:true,
        //dots:true,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
    });
    </script>
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
        
<?php // get_template_part( 'partials/sections/layout','calltoaction' );
get_footer();
