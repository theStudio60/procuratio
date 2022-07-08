<?php 
 
if( have_rows('group_hero') ):
  while( have_rows('group_hero') ): the_row();
  $title = get_sub_field('title');
  $content = get_sub_field('wysiwyg'); 
?>

  <?php endwhile; ?>
<?php endif; ?>
<?php 
if ( has_post_thumbnail() ) { 
  $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
 ?>
<?php } ;?>  
  <?php $overlay_color= "";?>
  <?php $col_color= "";?>
  <?php if (is_page_template('healthcare-page.php') ):?>
    <?php $overlay_color = "primary"; ?> 
    <?php $col_color = ""; ?> 
  <?php  elseif (is_page_template('formations-page.php') ):?>
    <?php $overlay_color =  "secondary" ;?> 
    <?php $col_color = " "; ?> 

  <?php elseif ( is_front_page() ) : ?> 
    <?php $overlay_color =  "default"?> 
    <?php $col_color = " "; ?> 

  <?php else : ?>
    <?php $overlay_color =  "default"?> 
    <?php $col_color = " "; ?> 

  <?php  endif?>
  <section class="hero hero--page" style="background: url('<?php echo $backgroundImg[0]; ?>');">
    <div class="hero--page__overlay hero--page__overlay--<?= $overlay_color?>">
      <div class="hero--page__container " >
        <div class="hero__row">
          <div class="hero__col bg-<?= $col_color ?>" >
            <div class="p-2" <?php /* style="  border-left: 8px solid #00AE9B ;" */ ?> >
              <?php if ($title) :  ?> 
                <h1 class="hero__title" ><?= $title ?></h1>
              <?php else : ?>
                <h1 class="hero__title"> 
                  <?php the_title(); ?> 
                </h1>
              <?php endif;?>
              <?php if ($content) :  ?>
                <div class="hero__content mt-5"> 
                  <?= $content?>
                </div>
                <br>
              <?php endif;?>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </section> 
