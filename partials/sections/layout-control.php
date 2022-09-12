<?php if( have_rows('option-group_conseil','option') ):

	$piechart = THEME_URI . "/images/piechart.png";

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
          <style>
          #summary { line-height: 1.5; }
          .text-white p {
            font-size: 18px;
            color:#fff;
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
          <?php if ($content) :
            $this_excerpt = wp_trim_words( $content, 50, ' ...  ');
          ?>
            <div class="text-white d-block px-2 font-serif w-100 lead mb-3 "  >
              <?= $this_excerpt ?>
            </div>

            <button class="button" onclick="location.href='<?php echo site_url(); ?>/conseil#control'">En savoir plus</button>

          <?php endif;?>
        </div>
        <div class="col-12 col-lg-3 d-flex">
          <!--div class="wrapper-c">
            <div class="pie spinner"></div>
            <div class="pie filler"></div>
            <div class="mask"></div>
          </div-->
			<img src="<?php echo $piechart ?>" />
        </div>
      </div>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>




