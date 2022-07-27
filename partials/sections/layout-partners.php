<?php  
  if( have_rows('group_partners') ):
  while( have_rows('group_partners') ): the_row();
    $title = get_sub_field('title');
?>
 
   <section class="section quotations" id"partners">
    <div class="container section__container container-l">
      <?php if ($title) :  ?>
        <h2 class="section__title">
          <?= $title ?>
        </h2>
      <?php endif;?>
      <div class="row section__row">
      <?php  

        $group = get_field('subgroup_partners');
        print_r($group);

        if( have_rows('subgroup_partners') ):
          while( have_rows('subgroup_partners') ): the_row();
            $name = get_sub_field('name');
            $citation = get_sub_field('citation');
            $image = get_sub_field('image');


      ?> 
        <div class="col-sm section__col quote" class="quoter">
    <!--      <div class="row">-->
            <div class="row quote-title">
              <?php if ($name) :  ?>
              <h3 class="section__subtitle col-4">
                <?= $name ?>
              </h3>
              <?php endif;?>
              <?php if ($image) :  ?>
              <div class="img-container col-4">
              <img class="img-circle section__col" 
              src=" <?php echo $image['url']; ?> ">
              <?php endif;?>
              </div>
            </div>
    <!--      </div>-->
          <div class="col-sm section__col">
            <?php if ($citation) :  ?>
            <p class="quote-text">
              <span class="quote-sign-left">«</span>
              <?= $citation ?>
              <span class="quote-sign-right">»</span>
            </p>
            <?php endif;?>
          </div>
        </div>
        <?php endwhile ?>
      <?php endif ?> 
      </div>
    </div>
  </section>
  
  <?php endwhile ?>
<?php endif ?> 