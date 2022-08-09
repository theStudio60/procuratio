
                      <style>
                      div#desc p
                      { 
                        margin-top:8px;
                        text-align:center;
                        color:#002369;
                      }
                      </style>
<section style="border-bottom:1px solid #002369;border-top:1px solid #002369; overflow-y:visible"
 class=" h-  p-0 bg- " id="partners"  >
  <div class="container-fluid  h-100 px-0   ">
    <div class="row p-0 h-100">
      <?php  
        if( have_rows('group_partners') ):
          $counterA = 0; ?>
          <?php while( have_rows('group_partners') ): the_row();
            $title = get_sub_field('title');
            $counterA++;
          ?>
            <div class="col-12 col-lg-6  text-center h-100  bg-  text-dark my-3  "  data-aos="flip-up" style="border-left:1px solid #002369 ;" >
              <?php if ($title) :  ?>
                
                <h2 class="section__title mx-auto p-4 mt-2 mb-auto text-dark" id="<?= $title ?>" >
                  <?= $title ?>
                </h2>
                <div class="dash mx-auto"></div>
              <?php endif;?>

              <div class="w-100 h-100 d-flex my-auto" >
                <div class="m-auto col-10 text-center d-flex align-items-start flex-column ">
                  <?php if( have_rows('subgroup_partners') ):
                    $counterB = 0;
                    while( have_rows('subgroup_partners') ): the_row();
                      $subtitle = get_sub_field('sous-titre');
                      $description = get_sub_field('wysiwyg');
                      $image = get_sub_field('image');
                      $counterB++;
                    ?>  
                    <div class="mx-auto mb-2 w-100 ">
                      <?php if ($subtitle) :  ?>
                        <h4 style="text-align:center; width: 100%;" class="mb-0 mt-4 mx-auto ">
                          <?= $subtitle ?>
                        </h4>
                      <?php endif;?>

                      <?php if ($description) :  ?>
                        <div id="desc" class=" ">
                          <?php echo $description ?>
                        </div>
                      <?php endif ;?>
                    </div>
             
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
