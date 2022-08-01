
 <section class="section quotations" id="partners">
  <?php  
    if( have_rows('group_partners') ):
    while( have_rows('group_partners') ): the_row();
      $title = get_sub_field('title');
  ?>
    <div class="container section__container container-l">
      <?php if ($title) :  ?>
        <h2 class="section__title" id="<?= $title ?>">
          <?= $title ?>
        </h2>
      <?php endif;?>
      <div class="row section__row">
      <?php  

        if( have_rows('subgroup_partners') ):
          while( have_rows('subgroup_partners') ): the_row();
            $subtitle = get_sub_field('sous-titre');
            $description = get_sub_field('wysiwyg');
            $image = get_sub_field('image');


        ?> 
        <div class="col-sm section__col quote" class="quoter" data-aos="slide-left">

            <div class="row quote-title">
              <?php if ($subtitle) :  ?>
              <h3 class="section__subtitle col-9 col-md-6">
                <?= $subtitle ?>
              </h3>
              <?php endif;?>
              <?php if ($image) :  ?>
              <div class="img-container col-4">
              <img class="img-circle section__col" 
              src=" <?php echo $image['url']; ?> ">
              </div>
              <?php endif;?>
              <div class="line col-3 col-md-6"></div>
            </div>

            <div class="col-sm section__col">
              <?php if ($description) :  ?>
              <p class="quote-text">
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
</section>