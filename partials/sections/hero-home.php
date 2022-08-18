<?php
if( have_rows('acf_group_homepage') ): 
  while( have_rows('acf_group_homepage') ): the_row(); 
    if( have_rows('group_hero') ):
      while( have_rows('group_hero') ): the_row();
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $content = get_sub_field('wysiwyg'); 
      endwhile; 
    endif; 
  endwhile; 
endif; 
?>
<?php
if( have_rows('page-fiduciaire_acf_group') ): 
  while( have_rows('page-fiduciaire_acf_group') ): the_row(); 
 
    if( have_rows('group_hero') ):
      while( have_rows('group_hero') ): the_row();
  
        $subtitleF = get_sub_field('subtitle');
        $contentF = get_sub_field('wysiwyg'); 
      endwhile; 
    endif; 
  endwhile; 
endif; 
// LOCAL
//$titleF =  get_the_title(102); // id of page fiduciaire 
//$titleC =  get_the_title(175); // id of page conseil

// Staging
$titleF =  get_the_title(29106); // id of page fiduciaire 
$titleC =  get_the_title(29111); // id of page conseil
?> 

<style>
  .slick-list.draggable{margin:auto!important}
</style>

<?php 
if ( has_post_thumbnail() ) { 
  $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); 
} ;?>  

<section  
 id="hero "
 class="hero d-flex  "
 style="background: url('<?= $backgroundImg[0]; ?>');"
>  
  <div class="hero__overlay hero__overlay--default h-100 " >
    <div class="container-fluid m-0 w-100">
      <div class="row h-100">
        <div class="col-12 col-lg-8 h-100 d-flex p-2"  >
          <?php //<div class="my-auto " style="  border-left:16px solid #00AE9B ;"> ?>
          <div class="d-flex w-75 mx-auto hero-slider  " style=" "> 
            <div class="p-0 my-auto"  >
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
               
                <style > .hero-content p{color:white!important;}</style>
                <div class="hero__content my-2"> 
                  <?= $content?>
                </div>
               
              <?php endif;?>
              <?php if( have_rows('website_settings', 'option') ): ?>
                <div class="w-100 d-md-flex  text-center">
                  <?php if (have_rows('website_settings','option')):
                    while (have_rows('website_settings','option')):the_row();
                      if (have_rows('global_settings')):
                        while (have_rows('global_settings')):the_row();
                          $thisLink = get_sub_field('main_cta');
                        ?> 
                        <?php endwhile; ?>
                      <?php endif; ?>
                    <?php endwhile;?>
                  <?php endif;?> 

                  <?php if ($thisLink) :
                    $link_url = $thisLink['url'];
                    $link_title = $thisLink['title'];
                    $link_target = $thisLink['target'] ? $thisLink['target'] : '_self';
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
              <?php endif;?>   
            </div>
            <div class="p-0 my-auto" onclick="location.href='<?php echo site_url(); ?>/fiduciaire'">
              <h1 class="hero__title mb-2 mt-5 mt-lg-auto"> 
                <?= $titleF ?>
                <?php if( have_rows('page-fiduciaire_acf_group') ): 
                  while( have_rows('page-fiduciaire_acf_group') ): the_row(); 
                    if( have_rows('group_hero') ):
                      while( have_rows('group_hero') ): the_row();
                       
                        // $subtitleF = get_sub_field('subtitle');
                        get_sub_field('intro'); 
                      endwhile; 
                    endif; 
                  endwhile; 
                endif; ?>
                 
              </h1> 
            </div>
            <div class="p-0 my-auto" onclick="location.href='<?php echo site_url(); ?>/conseil'">
              <h1 class="hero__title mb-2 mt-5 mt-lg-auto"> 
                  <?= $titleC ?>
              </h1> 
            </div>
          </div>
        </div>
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
      </div>
    </div>
  </div> 
</section> 