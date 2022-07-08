<?php
/**
 * Template part for displaying concerts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme_studio_soixante
 */
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
   <!-- En-tête de l'événement -->
   <header class="entry-header has-text-align-center<?php echo esc_attr( $entry_header_classes ); ?>">
      <div class="entry-header-inner section-inner medium">
         <!-- Titre de l'événement -->
         <h1 class="entry-title"><?php the_title(); ?></h1>
         <!-- Information de l'événement -->
         <div class="post-meta-wrapper post-meta-single post-meta-single-top">
            <ul class="post-meta">
               <li class="meta-wrapper">
                  <!-- Date et heure -->
                  <span class="meta-text">Date : <?php echo(get_field("concert_date_start")); ?></span>
               </li>
            </ul>
         </div>
      </div>
   </header>
   <!-- Image de l'événement -->
   <?php
      if ( has_post_thumbnail() ) {
   ?>
   <figure class="featured-media">
      <div class="featured-media-inner section-inner">
         <?php the_post_thumbnail(); ?>
      </div>
   </figure>
   <?php
      }
   ?>
</article>