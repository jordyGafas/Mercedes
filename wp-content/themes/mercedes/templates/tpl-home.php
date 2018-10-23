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
      <div class="button">
        <span class="button-text">
          Lees verder
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
      <div class="slide-open-toggle">
        <svg viewBox="0 0 59 60" xmlns="http://www.w3.org/2000/svg" class="litf-toggle-action__icon">
          <g fill="none">
            <circle fill="#228ACB" cx="29.6" cy="29.7" r="29.4"></circle>
            <circle fill="#FFF" cx="29.6" cy="29.7" r="16.5"></circle>
            <path class="litf-toggle-action__icon__cross" fill="#228ACB" d="M37.3 27.5L31.8 27.5 31.8 22 27.5 22 27.5 27.5 22 27.5 22 31.8 27.5 31.8 27.5 37.3 31.8 37.3 31.8 31.8 37.3 31.8z"></path>
          </g>
        </svg>
      </div>
      <div class="slide-open-content closed" style='background-image: linear-gradient(rgba(102, 149, 164, 0.45), rgba(102, 149, 164, 0.45)),url("<?php the_field('block1_image')?>");'>
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
                <svg class="right single-product-slider-prev" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  viewBox="0 0 96 87" enable-background="new 0 0 96 87" xml:space="preserve">
                <path d="M68.8,42.5H31.1l3.6-3.6l-1.4-1.4l-6,6l6,6l1.4-1.4l-3.6-3.6h37.7V42.5z"/>
                <path d="M95,1v85H1V1H95 M96,0H0v87h96V0L96,0z"/>
              </svg>
              <svg class="left single-product-slider-next" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
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
    <div class="slide-open-container">
      <div class="slide-open-toggle">
        <svg viewBox="0 0 59 60" xmlns="http://www.w3.org/2000/svg" class="litf-toggle-action__icon">
          <g fill="none">
            <circle fill="#228ACB" cx="29.6" cy="29.7" r="29.4"></circle>
            <circle fill="#FFF" cx="29.6" cy="29.7" r="16.5"></circle>
            <path class="litf-toggle-action__icon__cross" fill="#228ACB" d="M37.3 27.5L31.8 27.5 31.8 22 27.5 22 27.5 27.5 22 27.5 22 31.8 27.5 31.8 27.5 37.3 31.8 37.3 31.8 31.8 37.3 31.8z"></path>
          </g>
        </svg>
      </div>
      <div class="slide-open-content">
      </div>
    </div>
  </div>
</div>

<div class="block block7">
  <div class="block-inner-container block-inner">
    <h2><span><?php the_field('block7_title'); ?></span></h2>
    <div class="embed-container">
      <?php the_field('block7_video'); ?>
    </div>
    <div class="slider-container">
      <div class="slider-arrow single-video-slider-prev slider-arrow-right">
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
      <div class="slider-arrow single-video-slider-next slider-arrow-left">
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
        <div class="extra-content-inner">
          <div class="background-image" style='background-image: url("<?php the_post_thumbnail_url();?>");'>
          </div>
          <div class="extra-content-item">
            <h2><span><?php the_title() ?></span></h2>
          </div>
        </div>
    </div>
    <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
</div>

<div class="block block9">
  <div class="block-inner-container block-inner">
    <div class="text"><?php the_field('block9_text'); ?></div>
    <div class="button">
        <span class="button-text">
         <?php the_field('block9_button_text'); ?>
        </span>
        <span class="button-icon">
          <svg height="13" viewBox="0 0 42 13" width="42" xmlns="http://www.w3.org/2000/svg">
            <path d="m41.8 5.5h-37.7l3.6-3.6-1.4-1.4-6 6 6 6 1.4-1.4-3.6-3.6h37.7z" transform="matrix(-1 0 0 1 42 0)" /></svg>
        </span>
      </div>
  </div>
</div>

<?php get_footer();?>