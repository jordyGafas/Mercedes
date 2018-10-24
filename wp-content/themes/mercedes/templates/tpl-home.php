<?php
/*
Template Name: Home
 */
get_header();?>
<div class="header-container">
  <div class="header-container-inner">
    <div class="header-image" style='background-image: url("<?php the_field('banner')?>");'>
    </div>
    <div class="header-data-container">
      <h1>
        <?php the_title();?>
      </h1>
      <div class="intro">
        <?php the_field('intro')?>
      </div>
      <div class="button read-more">
        <span class="button-text">
          <?php the_field('button_text')?>
        </span>
        <span class="button-icon">
          <svg height="13" viewBox="0 0 42 13" width="42" xmlns="http://www.w3.org/2000/svg">
            <path d="m41.8 5.5h-37.7l3.6-3.6-1.4-1.4-6 6 6 6 1.4-1.4-3.6-3.6h37.7z" transform="matrix(-1 0 0 1 42 0)" /></svg>
        </span>
      </div>
    </div>
  </div>
</div>
<div class="block block1">
  <div class="block-inner-container">
    <div class="block-top block-inner">
      <h2>
       <span> <?php the_field('block1_title'); ?></span>
      </h2>
      <p>
        <?php the_field('block1_text') ?>
      </p>
    </div>
    <div class="slide-open-container slide-open-container1">
      <div class="slide-open-toggle" data-tracking-value="Slide Toggle 1">
      <svg width="74px" height="74px" viewBox="0 0 74 74" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Artboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <image id="plussign" x="0" y="0" width="74" height="74" xlink:href="data:image/png;base64,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"></image>
        </g>
      </svg>
      </div>
      <div id="slide1" class="slide-open-content rellax closed" style='background-image: url("<?php the_field('block1_image')?>");'>
      </div>
      <div class="slide-open-quote">
        <div class="quote-text">
          <?php the_field('block1_quote'); ?>
        </div>
        <div class="quote-author">
          <?php the_field('block1_author'); ?>
        </div>
      </div>
      <div class="slide-open-content-inner-container closed">
          <div class="slide-open-content-inner">
          <p>
            <?php the_field('block1_hidden_text') ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="block block2">
  <div class="block-inner-container">
    <div class="block-top block-inner">
      <div class="column column1">
        <div class="column-inner">
          <div class="background-image" style='background-image: url("<?php the_field('block2_image')?>");'>>
          </div>
          <div class="slide-open-quote">
            <div class="quote-text">
              <?php the_field('block2_quote'); ?>
            </div>
            <div class="quote-author">
              <?php the_field('block2_author'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="column column2">
        <div class="block-inner">
          <h2>
            <span><?php the_field('block2_title') ?></span>
          </h2>
          <p>
            <?php the_field('block2_text') ?>
          </p>
        </div>
      </div>
    </div>
    <div class="block-bottom block-inner">
      <div class="city-image" style='background-image: url("/mercedes/wp-content/uploads/2018/10/city-skyline.png");'>

      </div>
    </div>
  </div>
</div>

<div class="block block3">
  <div class="block-inner-container">
    <div class="block-top block-inner">
      <div class="column column1">
        <div class="column-inner js-single-product-thumbs">
        <div class="js-single-product-thumbs swiper-container">
              <div class="swiper-wrapper">
              <?php

                  // check if the repeater field has rows of data
                  if( have_rows('block3_slider_images') ):

                    // loop through the rows of data
                      while ( have_rows('block3_slider_images') ) : the_row();
                          ?>
                          <div class="swiper-slide background-image" style='background-image: url("<?php the_sub_field('block3_slider_image')?>");'>
                            
                          </div>
                          
                          <?php 
                      endwhile;

                  else :

                      // no rows found

                  endif;

                ?>
              </div>
              </div>
        </div>
      </div>
      <div class="column column2">
        <div class="block-inner slider">
          <h2>
           <span><?php the_field('block3_title') ?></span>
          </h2>
          <div class="">
            <div class="js-single-product-slider swiper-container">
              <div class="swiper-wrapper">
              <?php

                  // check if the repeater field has rows of data
                  if( have_rows('block3_slider') ):

                    // loop through the rows of data
                      while ( have_rows('block3_slider') ) : the_row();
                          ?>
                          <div class="swiper-slide">
                            <p>
                              <?php the_sub_field('block3_slider_text'); ?>
                            </p>
                          </div>
                          
                          <?php 
                      endwhile;

                  else :

                      // no rows found

                  endif;

                ?>
              </div>
              </div>
              <div class="controls">
                <svg data-tracking-value="Slider 1" class="right slider-arrow single-product-slider-prev" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  viewBox="0 0 96 87" enable-background="new 0 0 96 87" xml:space="preserve">
                <path d="M68.8,42.5H31.1l3.6-3.6l-1.4-1.4l-6,6l6,6l1.4-1.4l-3.6-3.6h37.7V42.5z"/>
                <path d="M95,1v85H1V1H95 M96,0H0v87h96V0L96,0z"/>
              </svg>
              <svg data-tracking-value="Slider 1" class="left slider-arrow single-product-slider-next" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  viewBox="0 0 96 87" enable-background="new 0 0 96 87" xml:space="preserve">
                <path d="M68.8,42.5H31.1l3.6-3.6l-1.4-1.4l-6,6l6,6l1.4-1.4l-3.6-3.6h37.7V42.5z"/>
                <path d="M95,1v85H1V1H95 M96,0H0v87h96V0L96,0z"/>
              </svg>
              </div>
          </div>

        </div>
      </div>
    </div>
    <div class="block-bottom block-inner">
      <div class="column column2">
          <div class="block-inner">
            <h2>
              <span><?php the_field('block4_title') ?></span>
            </h2>
            <p>
              <?php the_field('block4_text') ?>
            </p>
          </div>
      </div>
      <div class="column column1">
        <div class="column-inner">
          <div class="background-image right" style='background-image: url("<?php the_field('block4_image')?>");'>
          </div>
          <div class="slide-open-quote">
            <div class="quote-text">
              <?php the_field('block4_quote'); ?>
            </div>
            <div class="quote-author">
              <?php the_field('block4_author'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="block block5">
  <div class="background-image" style='background-image: url("<?php the_field('block5_image')?>");'>
  </div>
  <div class="slide-open-quote">
    <div class="quote-text">
      <?php the_field('block5_quote'); ?>
    </div>
    <div class="quote-author">
      <?php the_field('block5_author'); ?>
    </div>
  </div>
</div>

<div class="block block6">
  <div class="block-inner-container">
    <div class="block-top block-inner">
      <div class="block-inner-content">
        <h2>
          <span><?php the_field('block6_title'); ?></span>
        </h2>
        <p>
          <?php the_field('block6_text') ?>
        </p>
      </div>
    </div>
    <div class="slide-open-container slide-open-container2">
      <div class="slide-open-toggle" data-tracking-value="Slide Toggle 2">
      <svg width="74px" height="74px" viewBox="0 0 74 74" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Artboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <image id="plussign" x="0" y="0" width="74" height="74" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEoAAABKCAYAAAAc0MJxAAAAAXNSR0IArs4c6QAACTJJREFUeAHlnFmMFEUcxgtFRBA8wQt0FcUDDEGjaxBNVBLhRdx4YgB98AAeFIzHiz7pi0dUNAGPF11RI6JivBOjiVECEiFEZNUIIq4xIoIgINGgfr9Ziqmpne7pnqqeZZYv+eiz/sc3VdVV1b30aXnkP9Ng9JO/88Qx4mjxZHGYeLR46B5qY7bv4SZtO8UfxNXiKnG5+LfYMPRtkKcz5GeyeIk4Xhwo1oIV7VjdiKAudujgM/ET8S3xG7FQ9CmwRh2pyG8Qp4qthWZhzDLZXyC+LG4uwlcRQtGU7hZvFAcUEXSKzZ261i4+LNJUo+GAaJaMoYk8I34rzhQbLZJclnzO0JYYiOU4MQpiCIWNO8QO8VbxILGnQQzEQt9FbAeKQQgVima2RHxCPDwokmIKD94T2+faEmvdCBGqTV5XiEV31HUn5xQkRmK9yjmXa7ceoSjzmPiGuC/WoiQBiHWR+LiYuynmFaqfnLwszhGbFbMV+EsiuWRGHqEGyep74nWZre+7N5IDuZBTJmQVCvUXi5dlstocN5HLO2KmYUwWoWjPz4uXir0NFyuhV8SafVYWoei4p/Q2hZx8rtA+OaaillDM025PtdA7LpLjtLRU0oQ6TQXnpxXuZdfIdWRSTklCcb5dZKljfwFLPy+IVTVJWo+6WQUuKFKhoQprfIuG9VqyG6klu5M0HBzcX71qH2N2/2fMtl3G/PiHMd9t0hpKpxaf1huzkVWoYkHOt4hMqCtQbZlliO7oEI+quDPCgTQwE041ZvpYY8adqJ+OExnxr8RbskHVfKUxH31vjA6Lwu8yfKb4m+ugmlDzdAPLJFEx/iRj7r+kq/aEGqaWPfCJatmPoZYSy9NfzXKv+kKdoIvrxFzDe9egvz9Qlh6cYMyVZ/lXuh9Ta3ZoJZwyWWrb4jXG3PdRV5nu1oLOsB5/iviztdLX7uzZ3qVtNJFajtBIVfN1+p9qWPmLMR+v7eqDvleF3/JX+a4jDjHmVDV++rBLRxgztsoSHOKPPd6Ym143Zv2WctkIe2iAFnvntG6Nok9SL5BtSK/7UjFqqDEvXmMMCbug1rypmjB/mTFrN7tX0vdHaAV+ZqsxbRLHr20IPO01Y77emG4j51V+tuEifVbFo/B6HQ/gZCioSdVE6lD3OHmBfqr384lEPIhKOcpjxwU/Bv7wGxH8xHtnJO6YIXVkmjUA+heam1+TFn6lfkpJrv41q6Xq91EeO9hzgT/84j8iplpbVijeu7XakyFbOm6/T3r6C2Pu/VBvLHeHWC6XxQ72sOsCv/iPCDRBm71Nry2GcYYA/tONX/6hT2tbH3aYRrjqESw5rgXs+jUL/8QRESVtbI2aFGqYsSPjJBf0Jffr8Z0FV4/Sesd1ZXKcBdj3+yziIJ5IKGmDUJo4hDc7RtxMRSx4ut3zQbzmZu36W5ohfvBnQRzEEwk0v/4Ida4Y3AUyLXHBECC043btpe3jB38u/Hjcazn30eYchPJSzGlGtzPBZe7mgnFSI+H7Ix7iioSSUOr+wjC+pXIQyIg7z2AyzHtXafzh14JBKXFFwlnUqJZQY0wzXDAt6Qn4fv24AmI6GaGGBxgoFXU7cU6wftQT8P36cQXENLyvCjvPqvpM+QNMJrg+GBelPfIZP7ngePY490zl/tvfdG/evl8/rkoLuY6ORqjgLo+VSQse0+4qgD0/bLA+K0lJ3N5nt60SCiZhzcbuQuEX/3bS7MaVZCfj+YE0vUEZb068jeVbC9aTehKufzeuwJgORahgsMZtEXlSas1m3rr+3bgyG0i4kab3pxhUq3gRYFcLqPbs+82vc5sxc5ckRKHT9EluU1v2kzFLxSRUG37g1zY7yhFXJGxHKN5tBAnF2xIrFIGxMrm8k70yOrfqa7MUoei4XaEQKe3+suXyHn5dEFck7KDpVXlG5TPPYr+LiOMX12zNfd+vH1dNA8k3bEKoDcnXs13xxy+scfcEfL9+XAExdSLU+gADpaKfyYI7e+dFAGvcjQT+3BcQxENckbAOobx5d37TvMHl5aSLmSxONBC+P+KJ+GZ5DUKtipEPb3Bd8LZk9DHumeL28YM/F3487rU69lcg1HIxeJjIa2638+Qx/fBELXQdWEdYOYpgHz/usIA4iCcS0GYFwwNGG6weXSTWDcacvObmtZHFmUN0bkLXiwB7LmnL3I1piUW1cZK95m6xjx8XxEE8kfCF7OxCKPCBGCQURvgWgNfc7guGa8/WX/FoDlbrBQPCZBUHX+Dei43Bvgv8R/4m4T3s0/TAm12b8H/5FsAf6M04X0JdHq8Z0tywh10X+MV/ZJS0sUJ1yDh9VTCYlPItgD+F4ZdfPDW8g6fjxo5fk/CHX3dSHJyMMTQ7dQrlGsV+O//EAB9M8C2ALxZ9yVtK8tFJ+cdZjJMoR3m/T8IP/iJ/qIEUL1o9/I80ftIFTS3joOivWYiS5lbA1yyYlvzljzRcobj4uDibnVhg2aMJv48i/bniXi18oaJ/SGYFb7Iv7hg7jRA7bfy+UJyfJ860N8TcshDaBN9wkvJ8cRY7FtWEYvjWIXqrO7ZInO0++lUwyWlEV/qC5Tc302pCcf028Wn3xv1of4ZyfcbP146j/PPP6cRS/+R+cLxMOZJ7NyQJ9a/uvFHc3q1E7z2xQ6lNF8m9G5KE4sbvxIoOrVvp3nWCXMm5KtKEogAj0yerluxdJ59SOu1pKdUSirJ3iq+mGWnyawsV/5xaOWQRareM0HY/rmWsCa+T0zSRHFORRSgMMFJtEz/loJeAXMiJ3Goiq1AY2iZOEt/moMnxruInF3LKhDxCYXCnyK8wl4MmBbFPFsklM/IKhWHaM7Pqa0QtcjQNtirSa0Vir9kn+VnVI5S1sUg754jNMIInxrGilvfqQ4hQePxBvFBkbshkcl8DMTF3I0ZirRuhQuGYIf+z4ukik8lMTxHdVySIgVhsTMQYhBhC2QD4poVfjwWvJ8RcnaXujwF84psYiMX7zkZn6kTSMkud5iqKsZ41RZwunldxJf7BcplsF18Rf49vXn9bU+D/mujGe4YO2sSJYqt4sBgCmtZSkRe3vHcrvVLStjA0Sig3gUN0cK44RhwttojDRWrgIHGg+I/IEs8WkeUP/gh6vbhaXCV+KfKWpGH4H9r+VECUpsSZAAAAAElFTkSuQmCC"></image>
        </g>
      </svg>
      </div>
      <div class="slide-open-content closed">
      </div>
      <div class="slide-open-content-inner-container closed">
          <div class="slide-open-content-inner">
          <p>
            <?php the_field('block6_hidden_text') ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="block block7">
  <div class="block-inner-container block-inner">
    <h2><span><?php the_field('block7_title'); ?></span></h2>
    <div data-tracking-value="Youtube Video Homepage" class="embed-container">
      <?php the_field('block7_video'); ?>
    </div>
    <div class="slider-container">
      <div data-tracking-value="Slider 2" class="slider-arrow single-video-slider-prev slider-arrow-right bigscreen">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          viewBox="0 0 96 87" enable-background="new 0 0 96 87" xml:space="preserve">
        <path d="M68.8,42.5H31.1l3.6-3.6l-1.4-1.4l-6,6l6,6l1.4-1.4l-3.6-3.6h37.7V42.5z"/>
        <path d="M95,1v85H1V1H95 M96,0H0v87h96V0L96,0z"/>
      </svg>
      </div>
      <div class="js-video-text-slider swiper-container slider-content">
              <div class="swiper-wrapper">
              <?php

                  // check if the repeater field has rows of data
                  if( have_rows('block7_slider') ):

                    // loop through the rows of data
                      while ( have_rows('block7_slider') ) : the_row();
                          ?>
                          <div class="swiper-slide">
                            <p>
                              <?php the_sub_field('block7_slider_text')?>
                            </p>
                          </div>
                          
                          <?php 
                      endwhile;

                  else :

                      // no rows found

                  endif;

                ?>
              </div>
              </div>
      <div data-tracking-value="Slider 2" class="slider-arrow single-video-slider-next slider-arrow-left bigscreen">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 96 87" enable-background="new 0 0 96 87" xml:space="preserve">
          <path d="M68.8,42.5H31.1l3.6-3.6l-1.4-1.4l-6,6l6,6l1.4-1.4l-3.6-3.6h37.7V42.5z"/>
          <path d="M95,1v85H1V1H95 M96,0H0v87h96V0L96,0z"/>
        </svg>
      </div>
    </div>
    <div class="slider-container">
      <div class="slider-arrow single-video-slider-prev slider-arrow-right smallscreen">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 96 87" enable-background="new 0 0 96 87" xml:space="preserve">
          <path d="M68.8,42.5H31.1l3.6-3.6l-1.4-1.4l-6,6l6,6l1.4-1.4l-3.6-3.6h37.7V42.5z"/>
          <path d="M95,1v85H1V1H95 M96,0H0v87h96V0L96,0z"/>
        </svg>
      </div>
      <div class="slider-arrow single-video-slider-next slider-arrow-left smallscreen">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 96 87" enable-background="new 0 0 96 87" xml:space="preserve">
          <path d="M68.8,42.5H31.1l3.6-3.6l-1.4-1.4l-6,6l6,6l1.4-1.4l-3.6-3.6h37.7V42.5z"/>
          <path d="M95,1v85H1V1H95 M96,0H0v87h96V0L96,0z"/>
        </svg>
      </div>
    </div>
  </div>
</div>

<div class="block block8">
  <?php
    $args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'order' => 'ASC'
  );
  ?>
  <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="extra-content">
      <a href="<?php echo get_permalink(); ?>">
        <div class="extra-content-inner">
          <div class="background-image" style='background-image: url("<?php the_post_thumbnail_url();?>");'>
          </div>
          <div class="extra-content-item">
            <h2><span><?php the_title() ?></span></h2>
          </div>
        </div>
        </a>
    </div>
    <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
</div>

<div class="block block9">
  <div class="block-inner-container block-inner">
    <div class="text"><?php the_field('block9_text'); ?></div>
    <div class="button">
        <span class="button-text">
         <a href="<?php the_field('block9_button_link'); ?>" target="_blank"><?php the_field('block9_button_text'); ?></a>
        </span>
        <span class="button-icon">
          <svg height="13" viewBox="0 0 42 13" width="42" xmlns="http://www.w3.org/2000/svg">
            <path d="m41.8 5.5h-37.7l3.6-3.6-1.4-1.4-6 6 6 6 1.4-1.4-3.6-3.6h37.7z" transform="matrix(-1 0 0 1 42 0)" /></svg>
        </span>
      </div>
  </div>
</div>
<div class="navigation">
  <div class="navigation__overlay">
    <a href="#" class="menu-icon menu-icon--active" id="navigation-toggle">
      <span class="menu-icon__label">Sluiten</span>
      <div class="menu-icon__hamburger" id="hamburger">
        <span class="menu-icon__bar menu-icon__hamburger__bar"></span>
        <span class="menu-icon__bar menu-icon__hamburger__bar"></span>
        <span class="menu-icon__bar menu-icon__hamburger__bar"></span>
      </div>
      <div class="menu-icon__cross" id="cross">
        <span class="menu-icon__bar menu-icon__cross__bar"></span>
        <span class="menu-icon__bar menu-icon__cross__bar"></span>
      </div>
    </a>
    <ul class="navigation__list">
      <li class="navigation__list__item">
        <a href="https://next.tijd.be/elektromobiliteit/" class="navigation__list__item__anchor">
          <span class="navigation__list__item__pretitle">01</span>
          <span class="navigation__list__item__title">
            Als uw auto de koelkast doet draaien          </span>
          <span class="navigation__list__item__call-to-action">
            <svg viewBox="0 0 118 187" xmlns="http://www.w3.org/2000/svg">
  <g fill="none" fill-rule="evenodd">
    <polygon class="trapezium" fill="#FFF" points="0 0.455370244 0 118.468806 117.645694 186.751046 118 187 118 68.9888484 0.354306304 0"></polygon>
    <path class="arrow" d="M64.748 93l-4.34-4.293a.992.992 0 0 1 0-1.414 1.02 1.02 0 0 1 1.43 0l6.066 6a.992.992 0 0 1 0 1.414l-6.067 6a1.02 1.02 0 0 1-1.43 0 .992.992 0 0 1 0-1.414L64.747 95H51.012A1.006 1.006 0 0 1 50 94c0-.552.453-1 1.011-1h13.737z" fill="#00C1F3" fill-rule="nonzero"></path>
  </g>
</svg>          </span>
          <div class="navigation__list__item__image" style="background-image: url('https://next.tijd.be/wp-content/themes/mercedes-longread/dist/images/navigation/electromobility.jpg');">
            <span class="navigation__list__item__image__overlay"></span>
          </div>
        </a>
      </li>
      <li class="navigation__list__item">
        <a href="https://next.tijd.be/design/" class="navigation__list__item__anchor">
          <span class="navigation__list__item__pretitle">02</span>
          <span class="navigation__list__item__title">
            Design meets technology          </span>
          <span class="navigation__list__item__call-to-action">
            <svg viewBox="0 0 118 187" xmlns="http://www.w3.org/2000/svg">
  <g fill="none" fill-rule="evenodd">
    <polygon class="trapezium" fill="#FFF" points="0 0.455370244 0 118.468806 117.645694 186.751046 118 187 118 68.9888484 0.354306304 0"></polygon>
    <path class="arrow" d="M64.748 93l-4.34-4.293a.992.992 0 0 1 0-1.414 1.02 1.02 0 0 1 1.43 0l6.066 6a.992.992 0 0 1 0 1.414l-6.067 6a1.02 1.02 0 0 1-1.43 0 .992.992 0 0 1 0-1.414L64.747 95H51.012A1.006 1.006 0 0 1 50 94c0-.552.453-1 1.011-1h13.737z" fill="#00C1F3" fill-rule="nonzero"></path>
  </g>
</svg>          </span>
          <div class="navigation__list__item__image" style="background-image: url('https://next.tijd.be/wp-content/themes/mercedes-longread/dist/images/navigation/design.jpg');">
            <span class="navigation__list__item__image__overlay"></span>
          </div>
        </a>
      </li>
      <li class="navigation__list__item">
        <a href="https://next.tijd.be/" class="navigation__list__item__anchor">
          <span class="navigation__list__item__pretitle">03</span>
          <span class="navigation__list__item__title">
            De geconnecteerde auto          </span>
          <span class="navigation__list__item__call-to-action">
            <svg viewBox="0 0 118 187" xmlns="http://www.w3.org/2000/svg">
  <g fill="none" fill-rule="evenodd">
    <polygon class="trapezium" fill="#FFF" points="0 0.455370244 0 118.468806 117.645694 186.751046 118 187 118 68.9888484 0.354306304 0"></polygon>
    <path class="arrow" d="M64.748 93l-4.34-4.293a.992.992 0 0 1 0-1.414 1.02 1.02 0 0 1 1.43 0l6.066 6a.992.992 0 0 1 0 1.414l-6.067 6a1.02 1.02 0 0 1-1.43 0 .992.992 0 0 1 0-1.414L64.747 95H51.012A1.006 1.006 0 0 1 50 94c0-.552.453-1 1.011-1h13.737z" fill="#00C1F3" fill-rule="nonzero"></path>
  </g>
</svg>          </span>
          <div class="navigation__list__item__image" style="background-image: url('https://next.tijd.be/wp-content/themes/mercedes-longread/dist/images/navigation/connectivity.jpg');">
            <span class="navigation__list__item__image__overlay"></span>
          </div>
        </a>
      </li>
    </ul>
    <div class="navigation__footer">
      <div class="navigation__footer__container">
        <div class="navigation__footer__testdrive">
          <span class="navigation__footer__testdrive__label">
            Ervaar zelf hoe<br> Mercedes-Benz innoveert.          </span>
          <span class="navigation__footer__testdrive__call-to-action">
            <a href="https://mercedes-benzcontact.be/nl-BE/Lead?owda=misc&amp;type=Testdrive" target="_blank" class="navigation__footer__testdrive__button" onclick="ga('send', 'event', 'Link', 'Click', 'Testdrive');">
              <span class="navigation__footer__testdrive__button__label">
                Boek een testrit              </span>
              <span class="navigation__footer__testdrive__button__icon">
                <svg viewBox="0 0 29 55" xmlns="http://www.w3.org/2000/svg">
  <path d="M2.75418994,54.2739628 C2.4301676,54.5979865 2.02513966,54.7599983 1.62011173,54.7599983 C1.2150838,54.7599983 0.810055866,54.5979865 0.48603352,54.2739628 C-0.162011173,53.6259155 -0.162011173,52.6538445 0.48603352,52.0057972 L25.1117318,27.3799992 L0.48603352,2.7542011 C-0.162011173,2.10615378 -0.162011173,1.13408281 0.48603352,0.486035488 C1.13407821,-0.162011829 2.10614525,-0.162011829 2.75418994,0.486035488 L28.5139665,26.2459164 C29.1620112,26.8939637 29.1620112,27.8660346 28.5139665,28.514082 L2.75418994,54.2739628 Z"></path>
</svg>              </span>
            </a>
          </span>
        </div>
        <div class="navigation__footer__navigation">
          <div class="nav-footer-inner"><ul id="menu-footer-navigation" class="nav"><li id="menu-item-266" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-266"><a href="<?php echo get_site_url(); ?>/cookie-policy/">Cookiebeleid</a></li>
<li id="menu-item-268" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-268"><a href="<?php echo get_site_url(); ?>/algemene-voorwaarden/">Disclaimer</a></li>
<li id="menu-item-267" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-267"><a href="<?php echo get_site_url(); ?>/privacybeleid/">Privacy</a></li>
</ul></div>          <ul class="languages nav"><li><a href="<?php echo get_site_url(); ?>"><span class="language language--active menu-item">nl</span></a></li><li><a href="<?php echo get_site_url(); ?>/fr"><span class="language menu-item">fr</span></a></li></ul>        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer();?>