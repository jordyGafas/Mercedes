<?php
$blog_id = get_current_blog_id();
$mode = get_field('mode', 'option');
?>
    <div class="legam-menu closed">
      <ul class="lang-list">
							<li<?php if ( $blog_id == 1 ) { ?> class="active"<?php } ?>><a href="<?php echo get_site_url(1); ?>" class="no-barba">NL</a></li>
							<li<?php if ( $blog_id == 2 ) { ?> class="active"<?php } ?>><a href="<?php echo get_site_url(2); ?>" class="no-barba">FR</a></li>
      </ul>
      <div class="legal-menu-header">
      <?php
        wp_nav_menu( array(
          'theme_location' => 'legal',
          'container' => false,
          'depth' => 0,
          'menu_id' => 'legal-menu',
          'menu_class' => 'legam-menu-inner',
          'items_wrap' => '<ul class="%2$s">%3$s</ul>',
          'walker' => new mint_walker()
        ));
      ?>
      </div>
    <div class="close-menu-button">
        <svg width="64" version="1.1" xmlns="http://www.w3.org/2000/svg" height="64" viewBox="0 0 64 64" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 64 64">
          <g>
              <path fill="#1D1D1B" d="M28.941,31.786L0.613,60.114c-0.787,0.787-0.787,2.062,0,2.849c0.393,0.394,0.909,0.59,1.424,0.59   c0.516,0,1.031-0.196,1.424-0.59l28.541-28.541l28.541,28.541c0.394,0.394,0.909,0.59,1.424,0.59c0.515,0,1.031-0.196,1.424-0.59   c0.787-0.787,0.787-2.062,0-2.849L35.064,31.786L63.41,3.438c0.787-0.787,0.787-2.062,0-2.849c-0.787-0.786-2.062-0.786-2.848,0   L32.003,29.15L3.441,0.59c-0.787-0.786-2.061-0.786-2.848,0c-0.787,0.787-0.787,2.062,0,2.849L28.941,31.786z"></path>
          </g>
        </svg>
      </div>
      <?php
		  $args = array(
        'post_type' => 'post',
            'posts_per_page' => 3,
            'order' => 'DESC'
      );
      ?>
        <?php $loop = new WP_Query( $args ); 
        $count = 1;
        ?>
        <ul class="article-menu-inner">
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php 
                $count++;
                endwhile; ?>
            <?php wp_reset_postdata(); ?>
          </ul>
    </div>

  </div>
<footer class="l-footer js-footer<?php if ( true) { ?> is-sticky<?php } ?>">
  <div class="l-footer__progress progress">
    <div class="progress__bar"></div>
  </div>
  <div class="l-footer__inner">
    <div class="l-footer__connect">
      <?php $blog_id = get_current_blog_id(); ?>
      <?php if ( $blog_id == 1 ) { ?>
      <img src="<?php echo get_template_directory_uri(); ?>/src/img/brand/logo-tijdconnect.jpg" alt="Tijd Connect">
      <?php } ?>
      <?php if ( $blog_id == 2 ) { ?>
      <img src="<?php echo get_template_directory_uri(); ?>/src/img/brand/logo-echoconnect.jpg" alt="Echo Connect">
      <?php } ?>
      <p><?php the_field('label_footer_credits', 'option'); ?></p>
    </div>
    <div class="l-footer__social">
      <?php
        $shareURL = get_permalink();
    		$crunchifyURL = urlencode( get_permalink() );
        $shareTitle = get_the_title();
    		$crunchifyTitle = str_replace( ' ', '%20', get_the_title());
  		?>
      <ul class="social-links">
        <li>
          <a data-tracking-value="facebook" href="https://www.facebook.com/sharer.php?u=<?php echo $shareURL; ?>?9" rel="nofollow" target="_blank"><svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg"><path d="M17.007 0H.993A.993.993 0 0 0 0 .993v16.014c0 .549.445.993.993.993h8.62v-6.97H7.268V8.314h2.346V6.308c0-2.325 1.421-3.59 3.495-3.59.993 0 1.848.074 2.097.107v2.43h-1.441c-1.125 0-1.344.54-1.344 1.328v1.733h2.688l-.349 2.723H12.42V18h4.586c.55 0 .994-.444.994-.993V.993A.993.993 0 0 0 17.007 0" fill="#0F1941" fill-rule="nonzero" /></svg></a>
        </li>
        <li>
          <a data-tracking-value="linkedin" href="https://www.linkedin.com/shareArticle?url=<?php echo $shareURL; ?>?9" target="_blank"><svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg"><path d="M15.335 15.339H12.67v-4.177c0-.996-.02-2.278-1.39-2.278-1.389 0-1.601 1.084-1.601 2.205v4.25H7.013V6.75h2.56v1.17h.035c.358-.674 1.228-1.387 2.528-1.387 2.7 0 3.2 1.778 3.2 4.091v4.715zM4.003 5.575a1.546 1.546 0 0 1-1.548-1.549 1.548 1.548 0 1 1 1.547 1.549zm1.336 9.764H2.666V6.75H5.34v8.589zM16.67 0H1.329C.593 0 0 .58 0 1.297v15.406C0 17.42.594 18 1.328 18h15.338C17.4 18 18 17.42 18 16.703V1.297C18 .58 17.4 0 16.666 0h.003z" fill="#0F1941" fill-rule="nonzero" /></svg></a>
        </li>
        <li>
          <a data-tracking-value="twitter" href="https://twitter.com/share?text=<?php echo $crunchifyTitle; ?>&url=<?php echo $crunchifyURL; ?>?9" rel="nofollow" target="_blank"><svg width="20" height="16" viewBox="0 0 20 16" xmlns="http://www.w3.org/2000/svg"><path d="M19.163 2.055a8 8 0 0 1-2.26.62 3.966 3.966 0 0 0 1.73-2.178 8.13 8.13 0 0 1-2.501.947A3.936 3.936 0 0 0 9.425 5.03 11.148 11.148 0 0 1 1.312.929a3.858 3.858 0 0 0-.533 1.98c0 1.368.696 2.57 1.75 3.277a3.923 3.923 0 0 1-1.782-.493v.049c0 1.908 1.355 3.499 3.157 3.861a3.997 3.997 0 0 1-1.77.068 3.95 3.95 0 0 0 3.684 2.734 7.894 7.894 0 0 1-4.882 1.684c-.312 0-.623-.019-.936-.054a11.196 11.196 0 0 0 6.046 1.767c7.243 0 11.199-5.996 11.199-11.188 0-.168 0-.336-.012-.504A7.949 7.949 0 0 0 19.2 2.07l-.038-.016z" fill="#0F1941" fill-rule="nonzero" /></svg></a>
        </li>
      </ul>
    </div>
    <div class="l-footer__brand">
      <img src="<?php echo get_template_directory_uri(); ?>/src/img/brand/mercedes-logo.png" alt="Next">

    </div>
    <div class="mnuicon">
    <svg class="menu-icon" width="25px" height="19px" viewBox="0 0 25 19" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
          <title>menu</title>
          <desc>Created with Sketch.</desc>
          <defs></defs>
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="Artboard-1-copy-2" transform="translate(-1543.000000, -2073.000000)" fill="#7B7B7B" fill-rule="nonzero">
                  <g id="Footer" transform="translate(2.000000, 2030.000000)">
                      <g id="menu" transform="translate(1541.000000, 43.000000)">
                          <path d="M23.9901367,8 L1.00986328,8 C0.452148438,8 0,8.44768398 0,9 C0,9.55231602 0.452148438,10 1.00986328,10 L23.9901367,10 C24.5479004,10 25,9.55231602 25,9 C25,8.44773233 24.5479004,8 23.9901367,8 Z" id="Shape"></path>
                          <path d="M12.4748711,0 L0.525128906,0 C0.235117187,0 0,0.447732328 0,1 C0,1.55226767 0.235117187,2 0.525128906,2 L12.4748711,2 C12.7649082,2 13,1.55226767 13,1 C13,0.447732328 12.7649082,0 12.4748711,0 Z" id="Shape"></path>
                          <path d="M23.9901367,17 L1.00986328,17 C0.452148438,17 0,17.447684 0,18 C0,18.552316 0.452148438,19 1.00986328,19 L23.9901367,19 C24.5479004,19 25,18.552316 25,18 C25,17.447684 24.5479004,17 23.9901367,17 Z" id="Shape"></path>
                      </g>
                  </g>
              </g>
          </g>
      </svg>
    </div>
  </div>
</footer>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>