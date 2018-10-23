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
      <svg width="74px" height="74px" viewBox="0 0 74 74" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Artboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <image id="plussign" x="0" y="0" width="74" height="74" xlink:href="data:image/png;base64,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"></image>
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
    <div class="slide-open-container slide-open-container2">
      <div class="slide-open-toggle">
      <svg width="74px" height="74px" viewBox="0 0 74 74" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Artboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <image id="plussign" x="0" y="0" width="74" height="74" xlink:href="data:image/png;base64,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"></image>
        </g>
      </svg>
      </div>
      <div class="slide-open-content closed">
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
            <h2><span><a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a></span></h2>
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