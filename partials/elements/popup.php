




<?php
if( have_rows('website_settings', 'option') ): 
  while( have_rows('website_settings', 'option') ): the_row();
 
        //$link = get_sub_field('main_cta');
        //$title = $link['title'];
        if( have_rows('popup_alert') ):
          while( have_rows('popup_alert') ): the_row();
          $bool = get_sub_field('alert_condition');
          $content = get_sub_field('content');
          //echo $bool;
          if ( $bool == 1 ) :
           
?>
<div id="popupFrame" class="popup" style=" ">
  <div class="h-100 w-100 d-flex">
    <div class="col-10 col-md-9 col-lg-6 m-auto">  
      <div class="modal-content bg-light">
        <div class="popup__header p-4"> 
          <h4 class="ml-0 mr-auto my-auto modal-title"> <?= the_sub_field('popup_title'); ?></h4>
          <?php /*<img class="img-fluid"  src="<?php echo $logotype[0];?>" alt="<?= get_bloginfo() ?>"> //*/ ?>
          <span id="" class="fa fa-lg fa-times" onclick="closePopup();"></span>

        </div>
        <hr class="bg-dark">
        <div class="modal-body">
          <?= the_sub_field('popup_content'); ?>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="button" onclick="closePopup();" data-dismiss="modal">Fermer</button>
        </div>
      </div>
    </div>
  </div> 
</div> 


<?php
          endif;

//$custom_logo_id = get_theme_mod( 'custom_logo' );
            //$logotype = wp_get_attachment_image_src( $custom_logo_id , 'full' );

?>

    
          <?php 
      endwhile; 
    endif; 
  endwhile; 
endif; 
?>
