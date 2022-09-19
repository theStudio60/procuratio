<?php
if( have_rows('acf_group_homepage') ):
  while( have_rows('acf_group_homepage') ): the_row();
    if( have_rows('group_hero') ):
      while( have_rows('group_hero') ): the_row();
        if( have_rows('group_slider1') ):
          while( have_rows('group_slider1') ): the_row();
            $title1 = get_sub_field('title');
            $subtitle1 = get_sub_field('subtitle');
            $content1 = get_sub_field('wysiwyg');
            $link1 = get_sub_field('link');
          endwhile;
        endif;
        if( have_rows('group_slider2') ):
          while( have_rows('group_slider2') ): the_row();
            $title2 = get_sub_field('title');
            $subtitle2 = get_sub_field('subtitle');
            $content2 = get_sub_field('wysiwyg');
            $link2 = get_sub_field('link');

          endwhile;
        endif;
        if( have_rows('group_slider3') ):
          while( have_rows('group_slider3') ): the_row();
            $title3 = get_sub_field('title');
            $subtitle3 = get_sub_field('subtitle');
            $content3 = get_sub_field('wysiwyg');
            $link3 = get_sub_field('link');

          endwhile;
        endif;
      endwhile;
    endif;
  endwhile;
endif;
// LOCAL
//$titleF =  get_the_title(102); // id of page fiduciaire
//$titleC =  get_the_title(175); // id of page conseil

// Staging
//$titleF =  get_the_title(29106); // id of page fiduciaire
//$titleC =  get_the_title(29111); // id of page conseil
?>

<style>
//  .slick-list.draggable{margin:auto!important}
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
    <div class="container-fluid m-0 w-100 pt-5 px-0">
      <div class="row h-100 pt-5 px-0">
        <style>
            a.prev,a.next{cursor:pointer; }

            a.prev:hover,a.next:hover{cursor:pointer; i{color:#29FFFF!important;}}
            a.prev i, a.next i{color:white}
            a.prev:hover i, a.next:hover i{color:white}
            .slick-prev.slick-arrow{display:none!important;}
            .slick-next.slick-arrow{display:none!important;}
        </style>
        <div class="col-12 col-lg-8 h-100 d-flex px-0 px-lg-2 pt-5 "  >
          <?php //<div class="my-auto " style="  border-left:16px solid #00AE9B ;"> ?>

          <div class="d-block w-75 m-auto" style=" ">
            <div class="hero-slider w-100 d-flex ">
              <div class="bg-dark p-3 my-auto "  >

                <h1 class="hero__title mb-2 mt-3 mt-lg-auto">
                  <?= $title1  ?>
                </h1>
                <h3 class="text-white mb-2"  >
                  <?= $subtitle1  ?>
                </h3>


                <style > .hero-content p{color:white!important;}</style>
                <div class="div-left hero__content my-2">
                  <?= $content1 ?>
                </div>
  
                  <div class="w-100 d-md-flex  text-center">


                    <?php if ($link1) :
                      $link_url1 = $link1['url'];
                      $link_title1 = $link1['title'];
                      $link_target1 = $link1['target'] ? $link1['target'] : '_self';
                    ?>
                      <button
                      type="button"
                      style=""
                      onclick="location.href='<?php echo $link_url2 ?>'"
                      class="button"
                      >
                          <?= $link_title1 ?>
                      </button>
                    <?php endif;?>
                  </div>
                    
              </div>

              <div class="bg-dark p-3 my-auto "  >

                <h1 class="hero__title mb-2 mt-3 mt-lg-auto">
                  <?= $title2  ?>
                </h1>
                <h3 class="text-white mb-2"  >
                  <?= $subtitle2  ?>
                </h3>


                <style > .hero-content p{color:white!important;}</style>
                <div class="div-left hero__content my-2">
                  <?= $content2 ?>
                </div>
 
                <div class="w-100 d-md-flex  text-center">


                  <?php if ($link2) :
                    $link_url2 = $link2['url'];
                    $link_title2 = $link2['title'];
                    $link_target2 = $link2['target'] ? $link2['target'] : '_self';
                  ?>
                    <button
                    type="button"
                    style=""
                    onclick="location.href='<?php echo $link_url2 ?>'"
                    class="button"
                    >
                        <?= $link_title2 ?>
                    </button>
                  <?php endif;?>
                </div>
       
              </div>
              <div class="bg-dark p-3 my-auto "  >

                <h1 class="hero__title mb-2 mt-3 mt-lg-auto">
                  <?= $title3  ?>
                </h1>
                <h3 class="text-white mb-2"  >
                  <?= $subtitle3  ?>
                </h3>


                <style > .hero-content p{color:white!important;}</style>
                <div class="div-left hero__content my-2">
                  <?= $content3 ?>
                </div>
 
                  <div class="w-100 d-md-flex  text-center">


                    <?php if ($link3) :
                      $link_url3 = $link3['url'];
                      $link_title3 = $link3['title'];
                      $link_target3 = $link3['target'] ? $link3['target'] : '_self';
                    ?>
                      <button
                      type="button"
                      style=""
                      onclick="location.href='<?php echo $link_url3 ?>'"
                      class="button"
                      >
                          <?= $link_title3 ?>
                      </button>
                    <?php endif;?>
                  </div>
       
                    
              </div>
 
            </div>

            <div class="w-100 d-flex  p-3">
              <a class="prev"><i class=" fa fa-lg fa-arrow-left text-white my-auto mr-3"></i> </a>
              <a class="next"><i class=" fa fa-lg fa-arrow-right text-white my-auto ml-3"></i></a>
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

<script>
    //*
    centerMode: true,
    centerPadding: '30px',
    slidesToShow: 1,
    useTransform: false,
    speed: 1500,
    infinite: true,
    arrows: true,
    dots: true,
    slidesToShow: 1,
    autoplay: false,
    //autoplaySpeed: 3500,
    cssEase: 'linear',

    focusOnSelect: false,

     prevArrow: $('.prev'),
     nextArrow: $('.next'),


    responsive: [{
        breakpoint: 768,
        settings: {
            centerMode: true,
            //centerPadding: '30px',
            //centerPadding: '0px',
            dots: false,
            arrows: true,
            slidesToShow: 1,
            speed: 2500,
    infinite: true,
  
    slidesToShow: 1,
    autoplay: false,
  //  autoplaySpeed: 0,
        }
    }],
    //*/

    //    nextArrow: '<button class="button"><i class="fa fa-lg text-white arrow-right"></button>',
    //  prevArrow: '<button class="button"> <i class= "fa fa-lg text-white arrow-left"></button>'

});
</script>
