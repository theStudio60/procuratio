
<?php  

if( have_rows('group_control') ):
  while( have_rows('group_control') ): the_row();
  $title = get_sub_field('title');
  $content = get_sub_field('wysiwyg');

?>
<section class="section controle">
  <div class="container-fluid section__container--fluid">
    <div class="container-l">
      <div class="row section__row">
        <div class="col-sm section__col">
            <?php if ($title) :  ?>
            <h2 class="section__title section__title--dark">
              <?= $title ?>
            </h2>
             <?php endif;?>
            <?php if ($content) :  ?>
              <p> 
                <?= $content?>
              </p>
            <?php endif;?>
          </div>   
        </div> 
      </div>
    </div>
    
  </section>
<?php endwhile; ?>
<?php endif; ?>