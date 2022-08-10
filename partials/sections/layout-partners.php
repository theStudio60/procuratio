
                      <style>
                      div#desc p
                      { 
                        font-size:15px;
                        margin-top:8px;
                        text-align:center;
                        color:#002369;
                      }
                      </style>
<section style="border-bottom:1px solid #002369;border-top:1px solid #002369; overflow-y:visible"
 class="w-100 section  py-3 py-lg-5 bg-light" id="partners"  >
  <div class="container  h-100 px-0   ">
    <div class="row p-0 h-100 w-100">
      <?php  
        if( have_rows('group_partners') ):
          $counterA = 0; ?>
          <?php while( have_rows('group_partners') ): the_row();
            $title = get_sub_field('title');
            $counterA++;
          ?>
            <div class="col-12 col-lg-6  text-center h-100  bg-  text-dark my-3 mx-auto "  data-aos="flip-up"  >
              <?php if ($title) :  ?>
                <div class="h-25" style="min-height:96px" >
                <h3 class=" mx-auto p-4 my-auto text-dark"  >
                  <div class="dash mr-2 ml-n4 my-auto"></div>

                  <?= $title ?>
                </h3>
                </div>
                
              <?php endif;?>
              <div class="dash mx-auto my-3"></div>

              <div class="w-100 h-75 d-flex m-0" >
                <div class="m-auto h-100  text-center d-flex align-items-start flex-column ">
                  <?php if( have_rows('subgroup_partners') ):
                    $counterB = 0;
                    while( have_rows('subgroup_partners') ): the_row();
                      $subtitle = get_sub_field('sous-titre');
                      $description = get_sub_field('wysiwyg');
                      $image = get_sub_field('image');
                      $counterB++;
                    ?>  
                    <div class="mx-auto my-auto py-2 w-100 h-100 d-flex ">
                      <?php if ($subtitle) :  ?>
                        <h5 style="text-align:center; width: 100%;" class="mb-0 my-auto mx-auto ">
                          <?= $subtitle ?>
                        </h5>
                      <?php endif;?>
<?php /*
                      <?php if ($description) :  ?>
                        <div id="desc" class=" ">
                          <?php echo $description ?>
                        </div>
                      <?php endif ;?>
                      //*/ ?>
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
