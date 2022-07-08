<section class="section p-0 m-0 bg-secondary">
  <div class="section__container-fluid"   >
    <?php 
    if( have_rows('options-group_formations','option') ): 
      while( have_rows('options-group_formations','option') ): the_row(); 
        $title = get_sub_field('title');
        $intro = get_sub_field('introduction');
    ?>
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
    <?php  /*
    <?php endwhile; ?>
<?php endif; ?>
<?php if( have_rows('options-group_formations','option') ): ?>
  <?php while( have_rows('options-group_formations','option') ): the_row();?>
  //*/?>
    <div class="section__row">
      <div class="section__col m-0">
        <div class="row ">
          <?php if( have_rows('options-group_formations_repeater') ): ?>
            <?php while( have_rows('options-group_formations_repeater') ): the_row(); ?>
              <?php if( have_rows('options-group_formations_repeater-object') ): ?>
                <?php while( have_rows('options-group_formations_repeater-object') ): the_row();
                  $title = get_sub_field('name');
                  $description = get_sub_field('description');
                  $icon = get_sub_field('icon');
                  $ID = get_sub_field('id');
                ?>
                  <div class="col-10 col-lg-6 p-md-4 my-5 my-md-2 mx-auto">
                    <div class="m-auto d-flex p-2 p-md-0 ">
                      <div class="d-none d-md-block mb-auto p-2">
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
                          <img width="48" height="48"src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" />
                        <?php endif; ?>
                      </div> 
                      <div class="d-block my-auto ">
                        <?php if ($title) :  ?>
                          <h4 class="text-white"> <?= $title ?> </h4> 
                        <?php endif;?>
                        <?php if ($description) :  ?>
                          <hr class="bg-white">
                          <span class="text-white text-justify">
                            <?= $description ?>  
                          </span>
                        <?php endif;?> 
                      </div>
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
if( have_rows('group_formations') ):
  while( have_rows('group_formations') ): the_row();
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
