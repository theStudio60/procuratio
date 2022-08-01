<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logotype_d = THEME_URI . "/images/logo-procuratio-black.png"; 
$logotype_w = THEME_URI . "/images/logo-procuratio-black.png"; 
$logotype_b = THEME_URI . "/images/logo-procuratio-blue.png"; 
$logotype = $logotype_d ; 
$logotypeMobile = $logotype;
$txt_color="";
$link_color="";
$bg_color="";
$bg_color_mobile="";
$position="";
?>
<?php if ( is_front_page() ) : ?>
  <?php $bg_color =  "dark"?>
  <?php $txt_color= "light"; ?>
  <?php $txt_color_mobile="light"; ?>
  <?php $link_color="light"; ?>
  <?php $bg_color_mobile =  "dark"?>
  <?php $position =  "absolute;z-index:40" ?>
  <?php $logotype = $logotype_w; ?>
  <?php $logotypeMobile = $logotype_d; ?>

<?php  endif?>

<footer class="footer bg-<?= $bg_color ?> text-<?= $txt_color ?>">
  <br>
  <div id="contact" class="footer__container contact-form">
    <h2>contact</h2>
    <div class="footer__row">
      <div class="footer__col">
       <?= do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]')?>
      </div>
      <div class="col-12 col-lg-3 col-xl-6">
        <div class="row">
          <div class="contact-text col-12">
            <p>
              079 685 26 78
            </p>
            <p>
              info@procuratiofinances.ch
            </p>
            <p>
              1029 Villars Ste-Croix
            </p>
            <p>
              Z.I. la Pierreire - Route de Bellevue 7
            </p>
          </div>
          <img class="contact-map col-12" src="https://via.placeholder.com/150">
        </div>
      </div>
    </div>
  </div>
  <nav class="container footer-nav">
    <ul class="row">
      <li><a href="#quisommesnous">Qui sommes-nous?</a></li>
      <li><a href="#fiduciaire">Fiduciaire</a></li>
      <li><a href="#partners">Partenaires</a></li>
      <li><a href="#control">Contrôle</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#values">Valeurs</a></li>
    </ul>
  </nav>
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
  <br>
</footer>

<?php wp_footer(); ?>
</body>
</html>
