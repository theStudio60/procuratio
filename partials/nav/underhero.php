<div class="underhero ">
  <div class="underhero__container">
    <?php if( have_rows('website_settings', 'option') ): ?>
      <?php while( have_rows('website_settings', 'option') ): the_row(); ?>
        <?php if( have_rows('contact_infos') ): ?>
          <?php while( have_rows('contact_infos') ): the_row(); ?>

            <div class="underhero__row">
           
                <div class="underhero__col"><i class="fa  fa-map-marker"></i><span><?php the_sub_field('post_address'); ?><span></div>
                <div class="underhero__col"><i class="fa  fa-phone"></i><span><?php the_sub_field('phone_number'); ?> <span></div>
                <div class="underhero__col"><i class="fa  fa-envelope"></i><span><?php the_sub_field('email'); ?> <span></div>
       
            </div>
    </div>

            <?php if( have_rows('social_networks_repeater') ): ?>
              <?php while( have_rows('social_networks_repeater') ): the_row(); ?>   
<hr class="underhero__sep">
    <div class="underhero__container mt-1">
      <div class="underhero__row ">
                <?php if( have_rows('social_network') ): ?>
                  <?php while( have_rows('social_network') ): the_row(); ?> 
                    <div class="underhero__flex">
                      <a class="underhero__social-icon" href="<?php the_sub_field('network_link'); ?>" title="<?php the_sub_field('network_name'); ?>">
                        <i class="<?php the_sub_field('icon'); ?>"></i>
                      </a> 
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>   
      </div>
    </div>   
              <?php endwhile; ?>
            <?php endif; ?>  

 
 
          <?php endwhile; ?>
        <?php endif; ?>
      <?php endwhile; ?>
    <?php endif; ?>
</div>
