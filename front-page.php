<?php
/**
 * Template Name: front-page
 *
 * @package studio_soixante
 */
get_header();

if( have_rows('website_settings', 'option') ): 
  while( have_rows('website_settings', 'option') ): the_row();
    if( have_rows('popup_alert') ):
      while( have_rows('popup_alert') ): the_row();


      if ( 'Oui' == get_sub_field('alert_condition') ):
         
        get_template_part('partials/elements/popup');
?>     
          <?php
        endif; 
      endwhile; 
    endif; 
  endwhile; 
endif; 

if( have_rows('acf_group_homepage') ): 
  while( have_rows('acf_group_homepage') ): the_row(); 
    get_template_part( 'partials/sections/hero', 'home' );
    get_template_part( 'partials/sections/layout','about' );
    get_template_part( 'partials/sections/layout','healthcare' );
    get_template_part( 'partials/sections/layout','formations' );
  endwhile;
endif;
?>
<?php if( have_rows('group_flex-content') ): ?>
  <?php while( have_rows('group_flex-content') ): the_row(); ?>
    <?php if( have_rows('flex-content') ): ?>
      <?php while( have_rows('flex-content') ): the_row(); ?>
        <?php get_template_part( 'partials/flex/layout','default' ); ?>
        <?php get_template_part( 'partials/flex/layout','center' ); ?>
        <?php get_template_part( 'partials/flex/layout','halfhalf' ); ?>
      <?php endwhile; ?>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>

<div class="container-l section presentation">
  <div class="row">
    <div class="col-sm">
      <img src="https://via.placeholder.com/150">
      <h2>
        Qui sommes-nous?
      </h2>
      <p>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
      </p>
    </div>
    <div class="col-sm section">
      <h2>
        Fiduciaire
      </h2>
      <p>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
      </p>
      <img src="https://via.placeholder.com/150">
    </div>
  </div>
</div>

<div class="container container-l section quotations">
  <h2>Entreprises</h2>
  <div class="row">
    <div class="col-sm quote" class="quoter">
      <div class="row">
        <div class="col-3 quote-title">
          <h3>
            Entreprise 1
          </h3>
          <img class="img-circle" src="https://via.placeholder.com/150">
        </div>
      </div>
      <div class="quote">
        <p>
          <span class="quote-sign-left">«</span>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
          <span class="quote-sign-right">»</span>
        </p>
      </div>
    </div>
    <div class="col-sm quote">
      <div class="row quote-title">
        <img class="img-circle col-6" src="https://via.placeholder.com/150">
        <h3 class="col-6">
          Entreprise 1
        </h3>
      </div>
      <div class="quote">
        <p>
          <span class="quote-sign-left">«</span>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
          <span class="quote-sign-right">»</span>
        </p>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid section controle">
  <div class="container-l">
    <div class="row">
      <div class="col-sm">
        <h2>contrôle</h2>
      </div>
    </div>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</p>
  </div>
</div>

<div class="container services section">
  <h2>Services</h2>
  <div class="row">
    <div class="col-sm">
      <h3>Service A</h3>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</p>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</p>
      <div class="price">99.-/h</div>
    </div>
    <div class="col-sm">
      <h3>Service B</h3>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</p>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</p>
      <div class="price">99.-/h</div>
    </div>
  </div>
</div>

<div class="container section">
  <h2>Valeurs</h2>
  <div class="row">
    <div class="col-sm card-value">
      <div class="picto"></div>
      <h3>Valeur 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</p>
    </div>
    <div class="col-sm card-value">
      <div class="picto"></div>
      <h3>Valeur 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</p>
    </div>
    <div class="col-sm card-value">
      <div class="picto"></div>
      <h3>Valeur 3</h3>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</p>
    </div>
  </div>
</div>

<?php
get_template_part( 'partials/sections/layout','calltoaction' );

get_footer();
