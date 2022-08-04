<?php  

  if( have_rows('group_values') ):
  while( have_rows('group_values') ): the_row();
  $title = get_sub_field('title');

?>    

<section id="values" class="section mt-5">
	  <div class="container">
    <div class="row"> 
      	<div class="col-12 col-lg-9 mx-auto">
      <?php if ($title) :  ?>

      	<h2 class="section__title">
        <?= $title ?>
      	</h2>

      <?php endif;?>  
      <div class="container">
        <div class="row">
       <?php  

        if( have_rows('subgroup_values') ):
        while( have_rows('subgroup_values') ): the_row();
        $subtitle = get_sub_field('subtitle');
        $image = get_sub_field('picto');
        $content = get_sub_field('wysiwyg');

      ?>
        <div class="col-12 col-md-6 mx-0 mx-lg-auto">
          <div class="card-value" data-aos="fade-left">
          <div class="img-container">
            <img class="section__img picto" 
            src=" <?php echo $image['url']; ?> ">
          </div>
          <?php if ($subtitle) :  ?>
            <h3 class="section__subtitle">
              <?= $subtitle ?>
            </h3>
          <?php endif;?>
          <?php if ($content) :  ?>
              <?= $content ?>
          <?php endif;?>
          </div>
        </div>
          <?php endwhile; ?>
      <?php endif; ?>
        </div>
      </div>
 	</div>
    </div>
  </div>
</section>


<?php endwhile; ?>
<?php endif; ?>
