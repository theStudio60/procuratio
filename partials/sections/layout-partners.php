<section class="section quotations" id="partners">
  <?php  
    if( have_rows('group_partners') ):
    $counterA = 0;
    while( have_rows('group_partners') ): the_row();
      $title = get_sub_field('title');
      $counterA++;
  ?>
    <div class="container section__container container-l my-3">
      <?php if ($title) :  ?>
        <h2 class="section__title" id="<?= $title ?>">
          <?= $title ?>
        </h2>
      <?php endif;?>
      <div class="row section__row">
      <?php  

        if( have_rows('subgroup_partners') ):
          $counterB = 0;
          while( have_rows('subgroup_partners') ): the_row();
            $subtitle = get_sub_field('sous-titre');
            $description = get_sub_field('wysiwyg');
            $image = get_sub_field('image');
            $counterB++;

        ?> 
        <div class="col-sm section__col quote my-2" class="quoter" data-aos="fade-left">

            <div class="row quote-title">
              <?php if ($subtitle) :  ?>
              <h3 
									style="cursor:pointer;"
									class="section__subtitle col-5 my-0 dropper" id="dropper-<?= $counterA; echo $counterB ?>">
                
                <?= $subtitle ?>
              </h3>
              <i class="fa fa-carret-down col-1 arrow" id="arrow-<?= $counterA; echo $counterB ?>"></i>
              <?php endif;?>
              
              <?php if ($image) :  ?>
              <div class="img-container col-4">
              <img class="img-circle section__col" 
              src=" <?php echo $image['url']; ?> ">
              </div>
              <?php endif;?>
              <div class="line col-6"></div>
            </div>

            <div class="col target d-none" id="target-<?= $counterA; echo $counterB ?>">
              <?php if ($description) :  ?>
              <p>
                <?= $description ?>
              </p>
              <?php endif;?>
            </div>
            
        </div>
        
        <?php endwhile ?>
      <?php endif ?> 

    <?php endwhile ?>
  <?php endif ?>
  </div>
</div> 
<br>
</section>
