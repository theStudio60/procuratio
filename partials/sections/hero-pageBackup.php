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
<section class="hero--page" style="background: url('<?php echo $backgroundImg[0]; ?>');"> 
  <div class="hero--page__overlay hero--page__overlay--default h-100">
    <div class="container p-4 w-100" >
      <div class="row h-100">
        <div class="col-12 col-lg-8 h-100 d-flex p-0" >
            <div class="div-white div-left p-3 my-auto">
              <h1 class="hero__title"  > 
                <?php the_title(); ?> 
              </h1>
              <?php if ($content) :  ?>
                  <style > .hero-content p{color:white!important;}</style>
                  <div class="div-left div-white my-2"> 
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
</section> 