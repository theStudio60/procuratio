 
<?php  

if( have_rows('group_control') ):
  while( have_rows('group_control') ): the_row();
  $title = get_sub_field('title');
  $content = get_sub_field('wysiwyg');
?>
<section id="control" class="bg-dark" data-aos="fade-up">
    <div class="container   py-3 py-lg-5 ">
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
                    //height:192px;
                    overflow: hidden;
                    display: -webkit-box;
                    -webkit-line-clamp: 2;
                    -webkit-box-orient: vertical;  
                }

                #summary div.collapsing {
                    min-height: 196px;
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
      </div>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?> 