<?php get_header(); ?>
<?php if( have_rows('website_settings', 'option') ): ?>
  <?php while( have_rows('website_settings', 'option') ): the_row(); ?>
    <?php if( have_rows('404_content_group') ): ?>
      <?php while( have_rows('404_content_group') ): the_row();
        $content = get_sub_field('wysiwyg');
      ?>
        <section class="section mt-5" style="min-height:80vh"> 
          <div class=" section__container">
            <div class="section__row">
              <div class="section__col mt-5">
                <?= $content ?>
              </div>
            </div>
          </div>
        </section>
      <?php endwhile; ?>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>

