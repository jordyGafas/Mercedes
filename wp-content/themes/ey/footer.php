
<footer class="l-footer js-footer<?php if ( is_page() ) { ?> is-sticky<?php } ?>">
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
      <img src="<?php echo get_template_directory_uri(); ?>/src/img/brand/ey_logo2.svg" alt="Bright - Tijd Connect">

    </div>
    <?php
      wp_nav_menu( array(
        'theme_location' => 'legal',
        'container' => false,
        'depth' => 0,
        'menu_id' => 'legal-menu',
        'menu_class' => 'legam-menu',
        'items_wrap' => '<ul class="%2$s">%3$s</ul>',
        'walker' => new mint_walker()
      ));
      ?>
  </div>
</footer>
</div>
</div>
<?php wp_footer(); ?>
<script>
  // EVENT TRACKING

const tweetsquote = document.querySelectorAll('.quote-text-sub a');
const linkedinProfiles = document.querySelectorAll('.block-gegevens a');
const socialShare = document.querySelectorAll('.social-links a');
//console.log("quotes", tweetsquote);
if ( tweetsquote !== null ) {

  tweetsquote.forEach((trackLinkedIn, index) => {
    trackLinkedIn.addEventListener('click', function() {
	//console.log("quotes", trackLinkedIn);
      gtag('event', 'click', {
        'event_category': 'quote',
        'event_label': this.dataset.trackingValue,
        'transport_type': 'beacon'
      });
      ga('send', 'event', 'quote', 'click', this.dataset.trackingValue);
    });
  });

}

if ( linkedinProfiles !== null ) {
	//console.log("ld", linkedinProfiles);

  linkedinProfiles.forEach((trackEmail, index) => {
	//console.log("ld", 'fire');

    trackEmail.addEventListener('click', function() {
      gtag('event', 'click', {
        'event_category': 'linkedinProfiel',
        'event_label': this.dataset.trackingValue,
        'transport_type': 'beacon'
      });
    });
  });

}

if ( socialShare !== null ) {
	//console.log("ld", socialShare);
  socialShare.forEach((trackTelephone, index) => {
    trackTelephone.addEventListener('click', function() {
      gtag('event', 'click', {
        'event_category': 'SocialShare',
        'event_label': this.dataset.trackingValue,
        'transport_type': 'beacon'
      });
    });
  });

}
</script>
</body>
</html>