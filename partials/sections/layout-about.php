<?php  
if( have_rows('group_about') ):
  while( have_rows('group_about') ): the_row();
    $title = get_sub_field('title');
    $content = get_sub_field('wysiwyg');
    $link = get_sub_field('link');

    $image = get_sub_field('image');
    $imageSize='2048x2048';
    $imageUrl=$image['sizes'][$imageSize]; 
  ?> 
    <section class="section p-0 m-0 bg-light"  >
      <div class="halfhalf p-0 m-0">
        <div class=" row p-0 m-0">
          <div class="halfhalf__col halfhalf__col--img halfhalf__col--img--left m-0 p-0 d-none d-lg-flex" >
            <?php get_template_part( 'partials/elements/this_image','halfhalf' ); ?>
          </div>
          <div <?php /* style=" border-left: 32px solid #00AE9B ;  " //*/ ?> class="halfhalf__col halfhalf__col--content halfhalf__col--content--right d-flex  p-3 mt-0 m-lg-0">
          <div class="my-auto p-3 ">
            <div class="p-0 m-2 text-lg-left w-100 w-lg-75">
              <?php if ($title) :  ?>
                <h3 class="section__title my-2" ><?= $title ?></h3>
                <br>
              <?php endif;?>
              <div class="p-0 my-5 mx-0 text-center">
                <div class="d-block d-lg-none h-50">
                  <?php get_template_part( 'partials/elements/this_image','fluid' ); ?>
                </div> 
              </div>
              <?php if ($content) :  ?>
                <div class="section__content my-4">
                  <?= $content?>
                  <br>
                </div>
              <?php endif;?>
              <?php if ($link) :
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <div class="">
                  <button
                    type="button" 
                    style="" 
                    onclick="location.href='<?php echo $link_url ?>'"
                    class="button button--primary " 
                  > 
                      <?= $link_title ?>
                
                  </button> 
                </div> 
              <?php endif;?>
            </div>
            
          </div>
        </div>
      </div> 
    </section>
  <?php endwhile ?>
<?php endif ?> 