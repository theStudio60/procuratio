<?php if( have_rows('option-group_conseil','option') ): 
  while( have_rows('option-group_conseil','option') ): the_row();  
    if( have_rows('group_mandats') ): 
      while( have_rows('group_mandats') ): the_row(); 
        $title = get_sub_field('title');
        $description = get_sub_field('description'); 
        $conclusion = get_sub_field('conclusion');
        $image = get_sub_field('image');
      ?>
        <section id=" " class="section bg-white h-25 py-3 py-lg-5" >
          <div class="container m-auto  services h-100"    data-aos="slide-up"  >
            <div class="row">
              <div class="col-12">
                <?php if ($title) :  ?>
                  <h3 class="text-dark d-flex mb-3" >
                    <div class="dash mr-2 ml-n4 my-auto"></div>
                    <?= $title ?>
                  </h3>   
                <?php endif;?>
              </div>
              <div
                data-aos="flip-right" 
                class="col-lg-4 d-none d-lg-flex h-100 my-auto bg-primary"
                style="background: url('<?php echo $image['url']; ?>');
                background-repeat:no-repeat;
                background-size:cover;
                background-position:center ;
                min-height:260px;
                "
              >
              </div>
              <div class="col-12 col-lg-8 my-auto p-2">

                <?php if ($description) :  
                  $this_excerpt = wp_trim_words( $description, 35, ' ...  '); 
                ?>
                  <p>
                    <?= $this_excerpt ?>
                  </p>
                <?php endif;?>
              </div>
              
              <div
                data-aos="flip-up" 
                class="col-12 d-block d-lg-none bg-primary"
                style="background: url('<?php echo $image['url']; ?>');
                background-repeat:no-repeat;
                background-size:cover;
                background-position:center ;
                min-height:180px;
                "
              >
              </div>
              <div class="row w-100 d-flex mt-5">
                  <button  onclick="location.href='<?php echo site_url(); ?>/fiduciaire#mandats'" class="m-auto button">En savoir plus</button>
              </div>
            </div>
          </div>
        </section>
      <?php endwhile; ?>
      <?php wp_reset_postdata(  ) ;?>
    <?php endif; ?> 
  <?php endwhile; ?>
  <?php wp_reset_postdata(  ) ;?>
<?php endif; ?> 