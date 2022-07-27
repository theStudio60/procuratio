<section class="section">
  <div class="container section__container section">
    <h2 class="section__title">Valeurs</h2>
    <div class="row section__row">  
      <?php  

        if( have_rows('group_values') ):
        while( have_rows('group_values') ): the_row();
        $subtitle = get_sub_field('subtitle');
        $image = get_sub_field('picto');
        $content = get_sub_field('wysiwyg');

      ?>
      <div class="col-sm section__col card-value">
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