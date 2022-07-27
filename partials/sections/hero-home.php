
<?php  

if( have_rows('group_hero') ):
  while( have_rows('group_hero') ): the_row();
  $title = get_sub_field('title');
  $subtitle = get_sub_field('subtitle');
?>
<?php 
if ( has_post_thumbnail() ) { 
  $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
 ?>
<?php } ;?>  

    <?php if ($title) :  ?>
    <h1>
      PROCURATIO FINANCES
    </h1>
     <?php endif;?>
    <?php if ($subtitle) :  ?>
      <h3 class="tagline"  > 
        <?= $subtitle ?>
      </h3>
    <?php endif;?>
<?php endwhile; ?>
<?php endif; ?>