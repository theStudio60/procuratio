<?php  
if (have_rows('website_settings','option')):
  while (have_rows('website_settings','option')):the_row();
    if (have_rows('global_settings')):
      while (have_rows('global_settings')):the_row();
        $link = get_sub_field('main_cta');
        if (have_rows('section_cta')):
          while (have_rows('section_cta')):the_row();
            $title = get_sub_field('title');
            $content = get_sub_field('content');
            // $link = get_sub_field('main_cta');
            $image = get_sub_field('image');
            $imageSize='2048x2048';
            $imageUrl=$image['sizes'][$imageSize]; 
?>

            <section class="section p-0 m-0 bg-primary" style="min-height:75vh" >
              <div class="container w-100 d-flex  p-0 m-auto">
                <div class=" row p-0 m-auto d-flex" style="min-height:75vh">
                  <div class="section--centered__col   m-auto text-center h-100">
   
                    <div class="m-auto p-3 " style="  ">
                        <div class="p-3 text-center" data-aos="fade-up" data-aos-duration="800" >
                          <?php if ($content) :  ?>
                            <h1 class="section__title text-white mb-4" ><?= $content ?></h1>
                            <br>
                          <?php endif;?>
                          <?php
                          if ($link) :
                             // $link_url = $link['url'];
                              $link_title = $link['title'];
                             // $link_target = $link['target'] ? $link['target'] : '_self';
                          ?>
                              <button class="button" type="button" data-toggle="modal" data-target="#rdvModal"   >
                                <?= $link_title ?>
                              </button>
                          <?php
                          endif ;
                          ?>
                        </div>
                      </div>
                    </div>
                  </div> 
                </div>
              </div> 
                          </section>
          <?php endwhile ?>
        <?php endif ?>
      <?php endwhile ?>
    <?php endif ?>
  <?php endwhile ?>
<?php endif ?>    
