<?php 
wp_reset_postdata(  );
if( have_rows('group_hero') ): 
  while( have_rows('group_hero') ): the_row();   
    $content = get_sub_field('wysiwyg');
    $thisLink = get_sub_field('link'); 
  endwhile;
endif;
?>  
<?php 
//*
if ( has_post_thumbnail() ) { 
  $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
} ; 
//*/  
?>
<section class="hero" style="background: url('<?php echo $backgroundImg[0];?>');"> 
  <div class="hero__overlay h-100">
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
  <?php  
  if( have_rows('group_hero') ): 
    while( have_rows('group_hero') ): the_row();
      if( have_rows('group_slider') ): 
        while( have_rows('group_slider') ): the_row();?>
          <div class="hero__slider slick-slider">

            <?php if( have_rows('repeater') ): ?>
              <?php while( have_rows('repeater') ): the_row();  
 
                          $img = get_sub_field('image');

                        ?>
       <?php if ($img) :  ?>
              <div class="hero__slider__img" style="background-size:cover;background-repeat:no-repeat;background-position:center;
    background: url('<?php echo $img['url']; ?>');">

    </div>
<?php endif; ?>

    <?php
            endwhile;
          endif;
          ?>
          </div>

        <?php
        endwhile;
      endif;
    endwhile;
  endif;
  ?>  

  <div class="hero__slider slick-slider">




    <div class="hero__slider__img" style="background-size:cover;background-repeat:no-repeat;background-position:center;
    background: url('<?php echo $backgroundImg[0]; ?>');">

    </div>
    <div class="hero__slider__img" style="background-size:cover;background-repeat:no-repeat;background-position:center;
    background: url('<?php echo $backgroundImg[0]; ?>');">

  </div>
  

  </div>

<style>

.hero__overlay{
  position:absolute;
  height: 80vh;
      //calc(100vh - 36px) !important;;
  width:100vw!important;z-index:20!important; 
    background: -webkit-gradient(linear, left bottom, right top, from(rgba(0, 35, 105, 0.8)), to(rgba(0, 35, 105, 0.99))) !important;
 

}
.hero__slider {
    margin: 0 0 0 0 !important;
    padding: 0 !important;
    position: absolute;
    width: 100vw;
    height: 80vh;
      //calc(100vh - 36px) !important;
    z-index: 1;
}


.hero__slider__img {
    height: 80vh;
      //calc(100vh - 36px) !important;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<script>
     $('.hero__slider').slick({
        slidesToShow: 1,
        autoplay: true, 
        speed: 4000, 
        infinite: true,
        focusOnSelect: false, 
        arrows:false,
        dots:false,
    });
</script>
</section> 