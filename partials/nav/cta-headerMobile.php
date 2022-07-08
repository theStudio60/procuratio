
<?php
$cta_img = THEME_URI . "/images/cta-mobile.png"; 

//*
if (have_rows('website_settings','option')):
    while (have_rows('website_settings','option')):the_row();
  //*/  
  //*
        if (have_rows('global_settings')):
            while (have_rows('global_settings')):the_row();
            //*/ 
                $link = get_sub_field('main_cta');
?>
        <?php
        if ($link) :
           // $link_url = $link['url'];
            $link_title = $link['title'];
           // $link_target = $link['target'] ? $link['target'] : '_self';
        ?> 

<?php /*onclick="location.href='<?= get_home_url() ?>/';"//*/?> <?php //echo $link_title ; ?>
<img class="p-1" data-toggle="modal" data-target="#rdvModal" height="64" src="<?= $cta_img ?>" alt="">
<?php 



?> 
        <?php
        endif ;
        ?>

<?php
    endwhile;    
endif;  
//*
    endwhile;    
endif;    
//*/
?>
