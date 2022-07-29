<?php  

  if( have_rows('group_values') ):
  while( have_rows('group_values') ): the_row();
  $title = get_sub_field('title');

?>    

<section id="values" class="section">
  <div class="section__container container">
    <?php if ($title) :  ?>
    <h2 class="section__title">
      <?= $title ?>
    </h2>
    <?php endif;?>
    <div class="row section__row">  
      <?php  

        if( have_rows('subgroup_values') ):
        while( have_rows('subgroup_values') ): the_row();
        $subtitle = get_sub_field('subtitle');
        $image = get_sub_field('picto');
        $content = get_sub_field('wysiwyg');

      ?>
      <div class="section__half card-value" data-aos="slide-left">
        <img class="section__img picto" 
          src=" <?php echo $image['url']; ?> ">
        <?php if ($subtitle) :  ?>
          <h3 class="section__subtitle">
            <?= $subtitle ?>
          </h3>
        <?php endif;?>
        <?php if ($content) :  ?>
            <?= $content ?>
        <?php endif;?>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>


<?php endwhile; ?>
<?php endif; ?>