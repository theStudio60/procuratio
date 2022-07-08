<?php 
if( have_rows('picto-card') ):
  while ( have_rows('picto-card') ) : the_row();
    $name = get_sub_field('title');
    $content = get_sub_field('content');
    $image = get_sub_field('image');
    $imageSize='medium';
    $imageUrl=$image['sizes'][$imageSize];  
?>  
    <div class="section__col--card-healthcare">
      <div class="card-healthcare" data-aos="flip-left">
        <div class="card-body text-center mx-auto">
          <img src="<?= $imageUrl ?>" alt="" class="card-img-top" >
         <h5 class="card-healthcare__title "><?= $name ?></h5>
         <p class="card-healthcare__§"><?= $content ?></p>
        </div>
      </div>
    </div>
  <?php
  endwhile;
endif;
?>