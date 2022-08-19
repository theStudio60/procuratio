<?php if( have_rows('option-group_conseil','option') ): 
  while( have_rows('option-group_conseil','option') ): the_row();  
    if( have_rows('group_control') ): 
      while( have_rows('group_control') ): the_row(); 
      $title = get_sub_field('name');
      $subtitle = get_sub_field('subtitle');
      $content = get_sub_field('content'); 
      ?>
<section id="control" class="section d-flex   py-3 py-lg-5 bg-dark"  >
    <div class="container m-auto   " data-aos="fade-up" data-aos-mirror="false"  >
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
                #summary a.reduction.collapsed:after  {
                    content: 'Lire la suite'; 
                    width: 100%;
                    font-size:18px; 
                    margin-left:auto ; margin-right:auto;
                    text-align:center;
                    font-weight:600;
                    font-family:"Raleway";
                }

                #summary a.reduction:not(.collapsed):after {
                    content: '- Réduire';
                    font-size:18px;
                    padding-top:16px;
                    margin-left:auto ; margin-right:auto;
                    text-align:center;
                    font-weight:600;
                    font-family:"Raleway";
                }

                .wrapper-c {
                    position: relative;
                    margin: 40px auto;
                    background: rgba(255,255,255,0);
                }

                .wrapper-c,
                .wrapper-c * {
                    -moz-box-sizing: border-box;
                    -webkit-box-sizing: border-box;
                    box-sizing: border-box;
                }

                .wrapper-c {
                    width: 196px;
                    height: 196px;
                }

                .wrapper-c .pie {
                    width: 50%;
                    height: 100%;
                    transform-origin: 100% 50%;
                    position: absolute;
                    background: rgba(255,255,255,1);
                    border: 5px solid #29FFFF;
                }

                .wrapper-c .spinner {
                    border-radius: 100% 0 0 100% / 50% 0 0 50%;
                    z-index: 200;
                    border-right: none;
                    animation: rota 5s linear infinite;
                }

                .wrapper-c:hover .spinner,
                .wrapper-c:hover .filler,
                .wrapper-c:hover .mask {
                    animation-play-state: running;
                }

                .wrapper-c .filler {
                    border-radius: 0 100% 100% 0 / 0 50% 50% 0;
                    left: 50%;
                    opacity: 0;
                    z-index: 100;
                    animation: opa 5s steps(1, end) infinite reverse;
                    border-left: none;
                }

                .wrapper-c .mask {
                    width: 50%;
                    height: 100%;
                    position: absolute;
                    background: inherit;
                    opacity: 1;
                    z-index: 300;
                    animation: opa 5s steps(1, end) infinite;
                }

                @keyframes rota {
                    0% {
                        transform: rotate(0deg);
                    }
                    100% {
                        transform: rotate(360deg);
                    }
                }

                @keyframes opa {
                    0% {
                        opacity: 1;
                    }
                    50%,
                    100% {
                        opacity: 0;
                    }
                }
                </style>

                <div class="d-none d-lg-block" id="summary">
                  <div class="collapse mb-2" id="collapseSummary">
                    <?= $content?>
                  </div>
                  <a class="collapsed text-secondary reduction" data-toggle="collapse" href="#collapseSummary" aria-expanded="false" aria-controls="collapseSummary"></a>
                </div>

              </div>   
            <?php endif;?>
        </div> 
        <div class="col-12 col-lg-3 d-flex"> 
          <div class="wrapper-c">
            <div class="pie spinner"></div>
            <div class="pie filler"></div>
            <div class="mask"></div>
          </div>
        </div>
      </div>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?> 
<?php endwhile; ?>
<?php endif; ?> 




