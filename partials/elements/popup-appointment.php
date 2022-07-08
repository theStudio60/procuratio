<?php
if( have_rows('website_settings', 'option') ): 
  while( have_rows('website_settings', 'option') ): the_row();
    if( have_rows('global_settings') ):
      while( have_rows('global_settings') ): the_row();
        $link = get_sub_field('main_cta');
        $title = $link['title'];
        if( have_rows('popup_cta') ):
          while( have_rows('popup_cta') ): the_row();
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logotype = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            $content = get_sub_field('content');
?>
            <div class="popup" id="rdvModal" role="dialog" >
              <div class="h-100 w-100 d-flex">
                <div class="col-12 col-md-9 col-lg-6 m-auto">  
                  <div class="modal-content bg-light p-0 p-lg-4">
                    <div class="popup__header"> 
                      <h4 class="ml-0 mr-auto my-auto modal-title"> <?= $title ?></h4>
                      <span id="" class="fa fa-lg fa-times"  data-dismiss="modal"></span>
                    </div>
                    <div class="modal-body">
                      <?= $content ?>
                      <iframe height="900" src="https://widget.agenda.ch/widget?company_id=9211" width="100%"></iframe>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="button" data-dismiss="modal">Fermer</button>
                    </div>
                  </div><?php // end modal-content ?>      
                </div><?php // end col ?> 
              </div><?php // end d-flex ?>      
            </div><?php // end popup?>      
          <?php
          endwhile; 
        endif; 
      endwhile; 
    endif; 
  endwhile; 
endif; 
?>
