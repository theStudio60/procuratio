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

<section class="section presentation">
  <div class="container-fluid section__container">
    <div class="row section__row">
      <div class="col-12 col-lg-6 block">
        <img section__img src="https://via.placeholder.com/150" class="__img">
        <div class="section-text">
          <h2 class="section__title">
            Qui sommes-nous?
          </h2>
          <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
          </p>
        </div>
      </div>
      <div class="col-12 col-lg-6 block">
        <div class="section-text">
          <h2 class="section__title">
            Fiduciaire
          </h2>
          <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
          </p>
        </div>
        <img class="section__img" src="https://via.placeholder.com/150">
      </div>
    </div>
  </div>
</section>

<section class="section quotations">
  <div class="container section__container container-l">
    <h2 class="section__title">Entreprises</h2>
    <div class="row section__row">
      <div class="col-sm section__col quote" class="quoter">
  <!--      <div class="row">-->
          <div class="row quote-title">
            <h3 class="section__subtitle col-6" class="col-6 section__col">
              Entreprise 1
            </h3>
            <img class="img-circle col-6 section__col" src="https://via.placeholder.com/150">
          </div>
  <!--      </div>-->
        <div class="col-sm section__col quote">
          <p>
            <span class="quote-sign-left">«</span>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
            <span class="quote-sign-right">»</span>
          </p>
        </div>
      </div>
      <div class="col-sm section__col quote">
        <div class="row section__row quote-title">
          <img class="img-circle col-6" src="https://via.placeholder.com/150">
          <h3 class="col-6 section__subtitle">
            Entreprise 1
          </h3>
        </div>
        <div class="quote col-sm section__col">
          <p>
            <span class="quote-sign-left">«</span>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
            <span class="quote-sign-right">»</span>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section controle">
  <div class="container-fluid section__container--fluid">
    <div class="container-l">
      <div class="row section__row">
        <div class="col-sm section__col">
          <h2 class="section__title section__title--dark">
            Contrôle
          </h2>
        </div>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</p>
      <button class="section__cta">bouton</button>
    </div>
  </div>
</section>

<section class="section">
  <div class="container section__container services">
    <h2 class="section__title">Services</h2>
    <div class="row section__row">
      <div class="col-sm section__col card">
        <div class="hide-arc"></div>
        <div class="arc"></div>
        <h3 class="section__subtitle">Service A</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</p>
        <div class="price">99.-/h</div>
      </div>
      <div class="col-sm section__col card">
        <div class="hide-arc"></div>
        <div class="arc"></div>
        <div class="number">1</div>
        <h3 class="section__subtitle">Service B</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</p>
        <div class="price">99.-/h</div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container section__container section">
    <h2 class="section__title">Valeurs</h2>
    <div class="row section__row">
      <div class="col-sm section__col card-value">
        <div class="picto"></div>
        <h3 class="section__subtitle">Valeur 1</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</p>
      </div>
      <div class="col-sm section__col card-value">
        <div class="picto"></div>
        <h3 class="section__subtitle">Valeur 2</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</p>
      </div>
      <div class="col-sm section__col card-value">
        <div class="picto"></div>
        <h3 class="section__subtitle">Valeur 3</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</p>
      </div>
    </div>
  </div>
</section>

<?php
get_template_part( 'partials/sections/layout','calltoaction' );

get_footer();
