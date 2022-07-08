 
 <?php
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
<button class="header__cta" type="button" 

data-toggle="modal" data-target="#rdvModal"
<?php /*
onclick="location.href='<?= get_home_url() ?>/contact';"
//*/?>

><?= $link_title ?></button>
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