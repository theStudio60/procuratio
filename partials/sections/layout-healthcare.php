
<?php 
if( have_rows('options-group_healthcare','option') ): 
  while( have_rows('options-group_healthcare','option') ): the_row(); 
    $title = get_sub_field('title');
    $intro = get_sub_field('introduction'); 
    ?>
    <section class="section p-0 m-0 bg-primary">
      <div class="section__container-fluid"   >
        <div class="section__row p-0 d-flex"   >
        <div class="m-auto col-12 col-md-10 col-lg-9 col-xl-8 mt-5">
            <div class="my-auto p-3">
              <?php if ($title) :  ?> 
                    <h3 class="section__title text-center  text-white " ><?= $title ?></h3>
              <?php endif;?>
              <?php  if ($intro) :  ?>
                <div class="section__content lead text-center text-white  "  >
                  <p class="  " style="  ">
                    <?= $intro ?>
                  </p>
                </div>
              <?php  endif;?>
            </div>
            <hr class="bg-white p-1 w-50 mx-auto mb-4">
          </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?> 
<?php if( have_rows('options-group_healthcare','option') ): ?>
  <?php while( have_rows('options-group_healthcare','option') ): the_row();?>
    <div class="section__row">
      <div class="section__col m-0">
        <div class="row ">
          <?php if( have_rows('options-group_healthcare_repeater') ): ?>
            <?php while( have_rows('options-group_healthcare_repeater') ): the_row(); ?>
              <?php if( have_rows('options-group_healthcare_repeater-object') ): ?>
                <?php while( have_rows('options-group_healthcare_repeater-object') ): the_row();
                  $title = get_sub_field('name');
                  $description = get_sub_field('description');
                  $icon = get_sub_field('icon');
                  $ID = get_sub_field('id');
                ?>
                  <div class="mx-auto my-5 col-12 col-lg-4 text-center">
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
                      <img class="" src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>"
                      width="100%" class="img-circle my-2" style="border-radius:50%;width:200px;height:200px"
                      />
                    <?php endif; ?>
                    <div class="my-4">
                      <h4 class="text-white">
                          <?= $title ?>  
                        </h4> 
                        <span class="text-white text-justify">
                          <?= $description ?>  
                        </span>

                    </div>
                     
                  </div>
                <?php endwhile?>
              <?php endif ?>
            <?php endwhile; ?>
          <?php endif;?>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
<?php endif; ?> 
 
<?php
if( have_rows('group_healthcare') ):
  while( have_rows('group_healthcare') ): the_row();
    $link = get_sub_field('link');
  ?> 
    <div class="section__row row  p-5 m-auto" >
      <?php
      if ($link) :
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
      ?>
        <div class="w-100 text-center ">
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
  <?php endwhile ?>
<?php endif ?>
  </div> 
    </section>


<?php  
/*
if( have_rows('group_healthcare') ):
  while( have_rows('group_healthcare') ): the_row();
    $title = get_sub_field('title');
    $content = get_sub_field('wysiwyg');
?>
    <section class="section section--centered "  >
      <div class="section__container">
        <div class="section__row row ">
          <div class="section__col text-center my-auto " data-aos="fade-left" data-aos-duration="800">
            <?php  
            if( have_rows('options-group_healthcare','options') ):
              while( have_rows('options-group_healthcare','options') ): the_row();
                $optionsGroup_title = get_sub_field('title');
                $optionsGroup_introduction = get_sub_field('introduction');
            ?>  
                <?php if( $optionsGroup_title ): ?>
                  <h3 class="section__title" ><?= $optionsGroup_title ?></h3>
                <?php endif; ?>
                <?php if( $optionsGroup_introduction ): ?>
                  <div class="section__content">
                    <?= $optionsGroup_introduction ?>       
                  </div>
                <?php endif; ?>

              <?php endwhile ?>
            <?php endif ?>
          </div>
        </div>
      </div>
    </section>
    <?php 
 
    endwhile ?>
<?php endif 
//*/
?>
