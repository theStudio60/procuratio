

<section class="p-0 h-50 my-5" id="partners">
  <div class="container h-100 p-0 ">
    <div class="row p-0 h-100">
      <?php  
        if( have_rows('group_partners') ):
          $counterA = 0; ?>
          <?php while( have_rows('group_partners') ): the_row();
            $title = get_sub_field('title');
            $counterA++;
          ?>
            <div class="col-12 col-lg-6 p-3 text-center h-100  bg-dark text-light" style="border-left:1px solid #fff ">
              <?php if ($title) :  ?>
                <h2 class="section__title mx-auto p-4 mt-2 mb-auto text-light" id="<?= $title ?>">
                  <?= $title ?>
                </h2>
              <?php endif;?>

              <div class="w-100 h-100 d-flex">
                <div class="m-auto col-10 ">
                  <?php if( have_rows('subgroup_partners') ):
                    $counterB = 0;
                    while( have_rows('subgroup_partners') ): the_row();
                      $subtitle = get_sub_field('sous-titre');
                      $description = get_sub_field('wysiwyg');
                      $image = get_sub_field('image');
                      $counterB++;
                    ?>  
                      <?php if ($subtitle) :  ?>
                        <h4 style="text-decoration:underline;text-align:left" class="my-0 mt-3">
                          <?= $subtitle ?>
                        </h4>
                      <?php endif;?>
                      <style>
                      div#desc p
                      { 
                        margin-top:8px;
                        text-align:left;
                        color:white;
                      }
                      </style>
                      <?php if ($description) :  ?>
                        <div id="desc" class="text-left">
                          <?php echo $description ?>
                        </div>
                      <?php endif ;?>
                    <?php endwhile ; ?>
                  <?php endif ; ?> 
                </div>
              </div>
            </div>
          <?php endwhile ?>
      <?php endif ?>
    </div>
  </div>  
</section> 
