<?php  
  if( have_rows('group_services') ):
  while( have_rows('group_services') ): the_row();
    $title = get_sub_field('title');
    $content = get_sub_field('description'); 
    $conclusion = get_sub_field('conclusion'); 
?>
 
   <section id="services" class="section">
    <div class="container py-3 section__container services">
    <div class="row">
      <div class="col-12 col-lg-9 ">

      <?php if ($title) :  ?>
        <h2 class="section__title">
          <?= $title ?>
        </h2>
      <?php endif;?>
      <?php if ($content) :  ?>
        <p>
          <?= $content ?>
        </p>
      <?php endif;?>
 
        <div class="container">
          <div class="row">
            <?php  

              if( have_rows('subgroup_services') ):
              while( have_rows('subgroup_services') ): the_row();
              $subtitle = get_sub_field('service');
              $price = get_sub_field('price');
              $content = get_sub_field('wysiwyg');

            ?>
	<div class="col-12   col-lg-3">
            <div class="card px-3" data-aos="fade-right">
              <div class="hide-arc"></div>
              <div class="arc"></div>
              <?php if ($subtitle) :  ?>
                <span class="lead my-auto">
                  <?= $subtitle ?>
                </span>
              <?php endif;?>
              <?php if ($content) :  ?>
                  <?= $content ?>
              <?php endif;?>
              <?php if ($price) :  ?>
                <div class="price">
                  <?= $price ?>
                </div>
              <?php endif;?>
            </div><?php //end  card  ?>
	</div>
            <?php endwhile; ?>
            <?php endif; ?><?php //end subgroup_services ?>
		  
		
        <?php if ($conclusion) :  ?>
		    <div class="col-12 col-lg-9 ">
          <p>
            <?= $conclusion ?>
          </p>
		  </div>
        <?php endif;?>
		  
          </div>
        </div>

      </div>
      
      </div>
    </div>
  </section>
  <?php endwhile; ?>
<?php endif; ?>
