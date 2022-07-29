<?php  
  if( have_rows('group_services') ):
  while( have_rows('group_services') ): the_row();
    $title = get_sub_field('title');
?>
 
   <section id="services" class="section">
    <div class="container section__container services">
      <?php if ($title) :  ?>
        <h2 class="section__title">
          <?= $title ?>
        </h2>
      <?php endif;?>
      <div class="row section__row">   
        <?php  

          if( have_rows('subgroup_services') ):
          while( have_rows('subgroup_services') ): the_row();
          $subtitle = get_sub_field('service');
          $price = get_sub_field('price');
          $content = get_sub_field('wysiwyg');

        ?>
        <div class="section__half card" data-aos="slide-right">
          <div class="hide-arc"></div>
          <div class="arc"></div>
          <?php if ($subtitle) :  ?>
            <h3 class="section__subtitle">
              <?= $subtitle ?>
            </h3>
          <?php endif;?>
          <?php if ($content) :  ?>
              <?= $content ?>
          <?php endif;?>
          <?php if ($price) :  ?>
            <div class="price">
              <?= $price ?>
            </div>
          <?php endif;?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <?php endwhile; ?>
<?php endif; ?>