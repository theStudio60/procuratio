<?php 
wp_reset_postdata(  );
if( have_rows('group_hero') ): 
  while( have_rows('group_hero') ): the_row();   
    $content = get_sub_field('wysiwyg');

    $thisLink = get_sub_field('link'); 
  endwhile;
endif;
?>  
<?php if ( has_post_thumbnail() ) { 
  $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
  } ; ?>
<section class="  hero--page" style="background: url('<?php echo $backgroundImg[0]; ?>');"> 
  <div class="hero--page__overlay hero--page__overlay--default h-100">
    <div class="container p-2 p-lg-5 w-100" >
      <div class="row h-100">
        <div class="col-12 col-lg-8 h-100 d-flex p-0" >
        <div class="d-flex w-100 mx-auto  " style=" "> 
            <div class="p-2 my-auto">
          <h1 class="hero__title"  > 
              <?php the_title(); ?> 
          </h1>
          <?php if ($content) :  ?>
              <style > .hero-content p{color:white!important;}</style>
              <div class="hero__content my-2"> 
                <?= $content?>
              </div>
          <?php endif;?>
          <?php if ($thisLink) :
            $link_url = $thisLink['url'];
            $link_title = $thisLink['title'];
            $link_target = $thisLink['target'] ? $thisLink['target'] : '_self';
          ?>
            <div class="w-100 d-md-flex  text-center">
              <button
              type="button" 
              style="" 
              onclick="location.href='<?php echo $link_url ?>'"
              class="button" 
              > 
                  <?= $link_title ?>
              </button>  
            </div> 
          <?php endif;?>   
        </div>
        </div>
        </div>
      </div>
    </div>
    <?php /*
    <div class="col-12 col-lg-4 p-0 h-100 d-flex">
        <?php if( have_rows('website_settings', 'option') ) : ?>
          <?php while( have_rows('website_settings', 'option') ): the_row(); ?>
            <?php if( have_rows('contact_infos' ) ): ?>
              <?php while( have_rows('contact_infos' ) ): the_row(); ?>
                <?php 
                $post_address_cabinet = get_sub_field('post_address_cabinet');
                $post_address = get_sub_field('post_address');
                $phone = get_sub_field('phone');
                $email = get_sub_field('email'); 
                ?>
                <div class="mt-auto ml-auto mr-0 mb-0 text-white   d-none d-lg-flex w-100 py-2">
                  <div class="d-block d-xl-flex w-100 my-auto">
                    <i class="fa fa-phone my-auto mr-2 text-secondary" aria-hidden="true"></i><span class="my-auto font-serif text-white"><b><?= $phone ?></b></span>
                    <div class="mx-3"></div>
                    <i class="fa fa-envelope my-auto mr-2 text-secondary" aria-hidden="true"></i><span class="my-auto font-serif  text-white"><b><?= $email ?></b></span>
                    <div class="dash ml-auto mr-0 d-none d-xl-block"></div> 
                  </div>
                </div> 
              <?php endwhile ?>
            <?php endif ?>
          <?php endwhile ?>
        <?php endif ?> 
      </div> 
      //*/ ?>
  </div>
</section> 
