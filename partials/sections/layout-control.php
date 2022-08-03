
<?php  

if( have_rows('group_control') ):
  while( have_rows('group_control') ): the_row();
  $title = get_sub_field('title');
  $content = get_sub_field('wysiwyg');
?>
<section id="control" class="section controle" data-aos="fade-up">
    <div class="container py-3">
      <div class="row section__row">
        <div class="col-12 col-lg-9">
            <?php if ($title) :  ?>
            <h2 class="text-white">
              <?= $title ?>
            </h2>
            <?php endif;?>
            <?php if ($content) :  ?>
              <div class="section__content--dark"> 
                <?= $content?>
              </div>
            <?php endif;?>
          </div>   
        </div> 
      </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
