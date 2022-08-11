<?php
get_header();
?>
<?php 
if ( has_post_thumbnail() ) { 
  $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
  <section class="hero hero--page" style="background: url('<?php echo $backgroundImg[0]; ?>');">
    <div class="hero--page__overlay hero--page__overlay--default">
      <div class="hero--page__container " >
        <div class="hero__row">
          <div class="hero__col" >
          <h1 class="hero__title"  > 
            <?php the_title(); ?>
          </h1>
        </div>
      </div>
    </div>
  </div>
</section>

<?php } ;?> 
<section class="section my-3" > 
      <div class=" section__container">
        <div class="section__row">
          <div class="section__col">
<?php 
if( have_rows('defaultpage_acf_group') ): 
  while( have_rows('defaultpage_acf_group') ): the_row();  
    $content = get_sub_field('wysiwyg');
 ?>

            <?= $content ?>   
            <br>  
            <?php
            /* Start the Loop */
            while ( have_posts() ) :
              the_post(); the_content();
            endwhile;
            ?>
<?php
  endwhile;
endif;
?>
          </div>
        </div>
      </div>
    </section>

<?php
get_footer();