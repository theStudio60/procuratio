<div class="p-1 bg-primary w-100"></div>
<?php  

if( have_rows('group_control') ):
  while( have_rows('group_control') ): the_row();
  $title = get_sub_field('title');
  $content = get_sub_field('wysiwyg');
?>
<section id="control" class="bg-dark" data-aos="fade-up">
    <div class="container py-5">
      <div class="row section__row">
        <div class="col-12 col-lg-9 mx-auto">
            <?php if ($title) :  ?>
            <h2 class="text-white">
              <?= $title ?>
            </h2>
            <?php endif;?>
            <?php if ($content) :  ?>



              <div class="text-white"> 
                
                <style>
                #summary {
                  font-size: 16px;
                  //line-height: 1.5;
                  
                }
                #summary p {

                  color:#fff;

                }
                #summary div.collapse:not(.show) {
                    height: 60px;
                    overflow: hidden;

                    display: -webkit-box;
                    //-webkit-line-clamp: 2;
                    -webkit-box-orient: vertical;  
                }

                #summary div.collapsing {
                    min-height: 420px !important;
                }

                #summary a.collapsed:after  {
                    content: '+ Lire la suite';
                    font-size:18px;
                    margin-left:auto ; margin-right:auto;
                    text-align:center;
                }

                #summary a:not(.collapsed):after {
                    content: '- Compacter';
                    font-size:18px;
                    margin-left:auto ; margin-right:auto;
                    text-align:center;
                }


                </style>

              <div id="summary">
                <div class="collapse" id="collapseSummary">
                  <?= $content?>
                </div>
                <a class="collapsed text-white" data-toggle="collapse" href="#collapseSummary" aria-expanded="false" aria-controls="collapseSummary"></a>
              </div>
          </div>   

            <?php endif;?>
        </div> 
      </div>
      </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<div class="p-1 bg-primary w-100"></div>