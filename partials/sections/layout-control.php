<?php if( have_rows('option-group_conseil','option') ): 
  while( have_rows('option-group_conseil','option') ): the_row();  
    if( have_rows('group_control') ): 
      while( have_rows('group_control') ): the_row(); 
      $title = get_sub_field('name');
      $subtitle = get_sub_field('subtitle');
      $content = get_sub_field('content'); 
      ?>
<section id="control" class="section d-flex   py-3 py-lg-5 bg-dark"  data-aos="slide-up" >
    <div class="container m-auto   " >
      <div class="row my-3  ">
        <div class="col-12 col-lg-9 mx-auto mx-lg-0 ">
          <?php if ($title) :  ?>
            <div class="d-flex w-100 ">
              <div class="dash mr-2 ml-n4 my-auto"></div>
              <h3 class="text-white d-flex mb-3" >
                  <?= $title ?>
              </h3>  
            </div>

          <?php endif;?>
            <?php if ($content) :  ?>
              <div class="text-white d-block d-lg-none px-2"  >
                  <?= $content?>
              </div>
              <div class="text-white d-none d-lg-block"> 
                <style>
                #summary { line-height: 1.5; }
                .text-white p {
                  font-size: 18px;
                  color:#fff;
                }
                #summary p {
                  font-size: 20px;
                  color:#fff;
                }
                #summary div.collapse:not(.show) {
                    height:64px;
                    overflow: hidden;
                    display: -webkit-box;
                    -webkit-line-clamp: 3;
                    -webkit-box-orient: vertical;  
                      /* Safari 10.1 */
                      @media not all and (min-resolution:.001dpcm){ 
                      @supports (-webkit-appearance:none) and (not (stroke-color:transparent)) {
                      
                      height:auto; 
                      
                      }}
 
                }

                #summary div.collapsing {
                    min-height: 192px;
                }
                #summary a.collapsed:after  {
                    content: 'Lire la suite'; 
                    width: 100%;
                    font-size:18px; 
                    margin-left:auto ; margin-right:auto;
                    text-align:center;
                    font-weight:600;
                    font-family:"Raleway";
                }

                #summary a:not(.collapsed):after {
                    content: '- Réduire';
                    font-size:18px;
                    padding-top:16px;
                    margin-left:auto ; margin-right:auto;
                    text-align:center;
                    font-weight:600;
                    font-family:"Raleway";
                }
                </style>

                <div class="d-none d-lg-block" id="summary">
                  <div class="collapse mb-2" id="collapseSummary">
                    <?= $content?>
                  </div>
                  <a class="collapsed text-secondary" data-toggle="collapse" href="#collapseSummary" aria-expanded="false" aria-controls="collapseSummary"></a>
                </div>

              </div>   
            <?php endif;?>
        </div> 
        <div class="col-12 col-lg-3 d-flex">
          <i class=" m-auto fa fa-5x fa-pie-chart text-white"   ></i>
        </div>
      </div>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?> 
<?php endwhile; ?>
<?php endif; ?> 




