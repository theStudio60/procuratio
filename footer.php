<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logotype_d = THEME_URI . "/images/logo.png"; 
$logotype_w = THEME_URI . "/images/logotype-fff.png"; 
$logotype_b = THEME_URI . "/images/logotype-000.png"; 
$logotype = $logotype_d ; 
$logotypeMobile = $logotype;
$txt_color="";
$link_color="";
$bg_color="";
$bg_color_mobile="";
$position="";
?>
<?php if ( is_front_page() ) : ?>
  <?php $bg_color =  "primary"?>
  <?php $txt_color="white"; ?>
  <?php $txt_color_mobile="dark"; ?>
  <?php $link_color="white"; ?>
  <?php $bg_color_mobile =  "light"?>
  <?php $position =  "absolute;z-index:40" ?>
  <?php $logotype = $logotype_w; ?>
  <?php $logotypeMobile = $logotype_d; ?>
  <style>
    a.nav-link{color:#00ae9b!important;}
    .current-menu-item-active a { border-left:solid 2px #00ae9b; }
    .mobile-menu {background:#e5f3f3!important; }
  </style>  
<?php elseif (is_page_template('healthcare-page.php') ):?>
  <?php $bg_color = "primary"; ?>
  <?php $bg_color_mobile = "primary"; ?>
  <?php $txt_color="white"; ?>
  <?php $txt_color_mobile="white"; ?>
  <?php $link_color="white"; ?>
  <?php $position =  "fixed;z-index:40;top:0;" ?>
  <?php $logotype = $logotype_w; ?>
  <?php $logotypeMobile = $logotype_w; ?>
  <style>
  footer.footer a{color:#fff!important;}
  .mobile-menu {background:#00ae9b!important; }
  a.nav-link{color:#fff!important;}
    .current-menu-item-active a { border-left:solid 2px #fff; }
  </style>  
<?php  elseif (is_page_template('formations-page.php') ):?>
  <?php $bg_color =  "secondary"?>
  <?php $bg_color_mobile =  "secondary"?>
  <?php $txt_color="white"; ?>
  <?php $txt_color_mobile="white"; ?>
  <?php $link_color="white"; ?>
  <?php $position =  "fixed;z-index:40;top:0;" ?>
  <?php $logotype = $logotype_w; ?>
  <?php $logotypeMobile = $logotype_w; ?>
  <style>
    .mobile-menu {background:#00707d!important; }
footer.footer a{color:#fff!important;}
    a.nav-link{color:#fff!important;}
    .current-menu-item-active a { border-left:solid 2px #fff; }
  </style>  
<?php  elseif (is_page_template('contact-page.php') ):?>
  <?php $bg_color =  "white"?>
  <?php $bg_color_mobile =  "white"?>
  <?php $txt_color="dark"; ?>
  <?php $txt_color_mobile="dark"; ?>
  <?php $link_color="primary"; ?>
  <?php $position =  "fixed;z-index:40;top:0;" ?>
  <?php $logotype = $logotype_d; ?>
  <?php $logotypeMobile = $logotype_d; ?>
  <style>
    .header__menu .menu-item a.nav-link {color:#343a40!important;}
footer.footer a{color:#00ae9b!important;}
    a.nav-link{color:#00ae9b!important;}
    .current-menu-item-active a { border-left:solid 2px #343a40!important; }
    .mobile-menu {background:#e5f3f3!important; }
  </style>  
<?php else : ?>
  <?php $bg_color =  "white"?>
  <?php $bg_color_mobile =  "white"?>
  <?php $txt_color="dark"; ?>
  <?php $txt_color_mobile="dark"; ?>
  <?php $link_color="primary"; ?>
  <?php $position =  "fixed;z-index:40;top:0;" ?>
  <?php $txt_color="dark";?> 
  <?php $logotype = $logotype_d; ?>
  <?php $logotypeMobile = $logotype_d; ?>
  <style>
footer.footer a{color:#343a40!important;}
    a.nav-link{color:#00ae9b!important;}
    .current-menu-item-active a { border-left:solid 2px #00ae9b; }
    .mobile-menu {background:#e5f3f3!important; }
  </style>  
<?php  endif?>

<footer class="footer bg-<?= $bg_color ?> text-<?= $txt_color ?>">
  <div class="footer__container">
    <div class="footer__row footer__row--top"   style=" ">
      <?php if( have_rows('website_settings', 'option') ): ?>
        <?php while( have_rows('website_settings', 'option') ): the_row(); ?>
        <?php /*
          <?php if( have_rows('footer') ): ?>
            <?php while( have_rows('footer') ): the_row(); ?>
           //*/ ?> 
           <?php if( have_rows('contact_infos') ): ?>
            <?php while( have_rows('contact_infos') ): the_row(); ?>
              <?php // if( have_rows('hangout_address')): ?>
              <?php ?>
                <div class="footer__col--top">
                  <div class="footer__col--top__content">
                    <?php // while( have_rows('hangout_address') ): the_row(); ?>   
                      <i class=" fa fa-2x fa-map-marker text-<?= $txt_color ?> text-dark"></i> <i class="p-1"></i>
                      <p class="lead my-auto"><?= the_sub_field('post_address_cabinet') ?></p>
                    <?php // endwhile; ?>
                    <?php /*                    
                    <?php while( have_rows('hangout_address') ): the_row(); ?>   
                      <i class=" fa fa-2x <?= the_sub_field('icon'); ?>"></i>
                      <p class="lead my-auto"><?= the_sub_field('content') ?></p>
                    <?php endwhile; ?>                    
                    //*/ ?>
                  </div>
                </div>
              <?php // endif; ?>  
              <?php // if( have_rows('hangout_phone') ): ?>
                <div class="footer__col--top ">
                  <div class="footer__col--top__content">
                    <?php // while( have_rows('hangout_phone') ): the_row(); ?>   
                      <i class=" fa fa-2x fa-mobile text-<?= $txt_color ?>"></i> <i class="p-1"></i>
                      <p class="lead my-auto"><?= the_sub_field('phone') ?></p>
                    <?php // endwhile; ?>
                    <?php /*                    
                    <?php while( have_rows('hangout_phone') ): the_row(); ?>   
                      <i class=" fa fa-2x <?= the_sub_field('icon'); ?>"></i>
                      <p class="lead my-auto"><?= the_sub_field('content') ?></p>
                    <?php endwhile; ?>                    
                    //*/ ?>
                  </div>
                </div>
              <?php // endif; ?>  
              <?php // if( have_rows('hangout_email') ): ?>
                <div class="footer__col--top" >
                  <div class="footer__col--top__content">
                    <?php // while( have_rows('hangout_email') ): the_row(); ?>   
                      <i class=" fa fa-2x fa-envelope text-<?= $txt_color ?>"></i> <i class="p-1"></i>

                      <p class="lead my-auto"><?= the_sub_field('email') ?></p>
                    <?php // endwhile; ?>
                    <?php /*                    
                    <?php while( have_rows('hangout_email') ): the_row(); ?>   
                      <i class="fa fa-2x <?= the_sub_field('icon'); ?>"></i>
                      <p class="lead my-auto"><?= the_sub_field('content') ?></p>
                    <?php endwhile; ?>                 
                    //*/ ?>
                  </div>
                </div>
              <?php // endif; ?>  
            <?php endwhile; ?>
          <?php endif; ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div><!-- end row -->
    <div class="footer__row">
      <?php if( have_rows('website_settings', 'option') ): ?>
        <?php while( have_rows('website_settings', 'option') ): the_row(); ?>
          <?php if( have_rows('footer') ): ?>
            <?php while( have_rows('footer') ): the_row(); ?>
              <?php if( have_rows('columns') ): ?>
                <?php while(have_rows('columns')):the_row();?>
                  <?php if( have_rows('column_1') ): ?>
                    <?php while(have_rows('column_1')):the_row();?>
                    <?php /*
                      $logo = get_sub_field('logo');
                      $logoSize='medium';
                      $logoUrl = $logo['sizes'][$logoSize];
                      //*/ ?>
                      <div class="footer__col--1">
                        <a href="<?= get_home_url() ?>">
                          <div class="mx-auto p-2">
                            <img width="auto" height="96px" class=""  src="<?= $logotype ?>" alt="<?= get_bloginfo() ?>">
                          </div>
                        </a>
                      </div><!-- end col -->
                    <?php endwhile; ?>
                  <?php endif; ?>

                  <?php if( have_rows('column_2') ): ?>
                    <?php while(have_rows('column_2')):the_row(); ?>
                      <div class="footer__col--2">
                        <h6><?= get_sub_field('title');?></h6>
                        <?= get_sub_field('content');?>           
                        <?php if( have_rows('website_settings', 'option') ): ?>
                          <?php while( have_rows('website_settings', 'option') ): the_row(); ?>
                            <?php if( have_rows('contact_infos') ): ?>
                              <?php while( have_rows('contact_infos') ): the_row(); ?>
                              <ul>
                                <li>
                                  <strong><?= bloginfo();?></strong>
                                </li>
                                <li>
                                  <i class="fa fa-map-marker mr-2 text-<?= $txt_color ?>"></i><i class="p-1"></i><small><?php the_sub_field('post_address_cabinet') ?> </small>
                                </li>
                                <li>
                                  <i class="fa fa-phone mr-2 text-<?= $txt_color ?>"></i><i class="p-1"></i><small><?php the_sub_field('phone'); ?> </small>
                                </li>
                                <li>
                                  <i class="fa fa-envelope mr-2 text-<?= $txt_color ?>"></i><i class="p-1"></i><small><?php the_sub_field('email'); ?></small>
                                </li>
                                <li>
                                  <i class="fa fa-pen mr-2 text-<?= $txt_color ?>"></i><i class="p-1"></i><small><?php the_sub_field('post_address'); ?></small>
                                </li>
                                <?php if( have_rows('social_networks_repeater') ): ?>
                                  <?php while( have_rows('social_networks_repeater') ): the_row(); ?>   
                                    <br>
                                    <?php if( have_rows('social_network') ): ?>
                                      <?php while( have_rows('social_network') ): the_row(); ?> 
                                        <li>
                                          <a class=" " href="<?php the_sub_field('network_link'); ?>" title="<?php the_sub_field('network_name'); ?>">
                                            <i class="<?php the_sub_field('icon'); ?>"></i>
                                          </a>                          
                                        </li>
                                      <?php endwhile; ?>
                                    <?php endif; ?>   
                                  <?php endwhile; ?>
                                <?php endif; ?>
                                </ul>
                              <?php endwhile; ?>
                            <?php endif; ?>
                          <?php endwhile; ?>
                        <?php endif; ?>
                      </div><!-- end col -->
                    <?php endwhile; ?>
                  <?php endif; ?>
                  <?php if( have_rows('column_3') ): ?>
                    <?php while(have_rows('column_3')):the_row();?>
                      <div class="footer__col--3">
                        <h6><?= get_sub_field('title');?></h6>
                        <small><?= get_sub_field('content');?></small>
                      </div><!-- end col -->
                    <?php endwhile; ?>
                  <?php endif; ?>
                  <?php if( have_rows('column_4') ): ?>
                    <?php while(have_rows('column_4')):the_row();?>
                      <div class="footer__col--4">
                        <h6><?= get_sub_field('title');?></h6>
                        <small><?= get_sub_field('content');?></small>
                      </div><!-- end col -->
                    <?php endwhile; ?>
                  <?php endif; ?>
                <?php endwhile; ?>
              <?php endif; ?>  
            <?php endwhile; ?>
          <?php endif; ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div><!-- end row -->
  </div><!-- end container -->
 
  <div class="container contact-form">
    <h2>contact</h2>
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <input placeholder="Prénom">
        <input placeholder="Nom">
      </div>
      <div class="col-md-6 col-lg-4">
        <input placeholder="E-mail">
        <input placeholder="Téléphone">
      </div>
      <div class="col-12">
        <textarea placeholder="Message"></textarea>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 my-2 text-center " style="font-size:13px;">
        <span>  © <?= date('Y');?> - <?= get_bloginfo(); ?> - <a class="ml-1 mr-2 text-<?= $link_color ?>"href="<?= get_home_url() ?>/login"><i class="text-<?= $link_color ?> fa fa-lock"></i></a> - </span>
          <span> <a class="ml-1 text-<?= $link_color ?>" href="<?= get_home_url() ?>/mention-legales">Mentions Légales</a> - </span>
          <span> <a class="ml-1 text-<?= $link_color ?>" href="<?= get_home_url() ?>/rgpd">Politique de Confidentialité</a></span>
        </div>
        <div class="col-12 my-2 text-center " style="font-size:13px">
        <span class="text-<?= $link_color ?>">
          Site Web : <a href="https://studio60.ch" class="text-<?= $link_color ?>">STUDIO60</a>
        </span>  
      </div>
    </div><!-- end row -->
  </div><!-- end container -->
</footer>

<?php wp_footer(); ?>
</body>
</html>
