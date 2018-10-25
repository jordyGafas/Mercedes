<?php
$blog_id = get_current_blog_id();
$mode = get_field('mode', 'option');
?>
<div class="navigation">
  <div class="navigation__overlay">
    <a href="#" class="menu-icon menu-icon--active" id="navigation-toggle">
       <?php if ( $blog_id == 1 ) { ?>
      <span class="menu-icon__label">Sluiten</span>
      <?php } ?>
       <?php if ( $blog_id == 2 ) { ?>
        <span class="menu-icon__label">Fermer</span>
        <?php } ?>
      <div class="menu-icon__cross" id="cross">
        <svg width="16" height="15" xmlns="http://www.w3.org/2000/svg"><path d="M.5.5l14.142 14.142M.5 14.5L14.642.358" stroke="#FFF" fill="none" fill-rule="evenodd" stroke-linecap="square"/></svg>
      </div>
    </a>
    <ul class="navigation__list">
      <li class="navigation__list__item">
         <?php if ( $blog_id == 1 ) { ?>
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
        <?php } ?>
        <?php if ( $blog_id == 2 ) { ?>
              <a href="https://next.lecho.be/electromobilite/" class="navigation__list__item__anchor">
          <span class="navigation__list__item__pretitle">01</span>
          <span class="navigation__list__item__title">
            Quand votre voiture fait tourner le réfrigérateur</span>
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
        <?php } ?>
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
        <?php if ( $blog_id == 1 ) { ?>
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
            <?php } ?>
            <?php if ( $blog_id == 2 ) { ?>
             <a href="https://next.lecho.be/" class="navigation__list__item__anchor">
          <span class="navigation__list__item__pretitle">03</span>

          <span class="navigation__list__item__title">
            La voiture connectée                   </span>
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
            <?php } ?>
      </li>
    </ul>
     <?php if ( $blog_id == 1 ) { ?>
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
</ul></div><ul class="languages nav"><li><a href="<?php echo get_site_url(); ?>"><span class="language language--active menu-item">nl</span></a></li><li><a href="<?php echo get_site_url(); ?>/fr"><span class="language menu-item">fr</span></a></li></ul>        </div>
      </div>
    </div>
    <?php } ?>
     <?php if ( $blog_id == 2 ) { ?>
    <div class="navigation__footer">
      <div class="navigation__footer__container">
        <div class="navigation__footer__testdrive">
          <span class="navigation__footer__testdrive__label">
            Vivez vous-même<br>l'innovation de Mercedes-Benz. 
          </span>
          <span class="navigation__footer__testdrive__call-to-action">
            <a href="https://mercedes-benzcontact.be/fr-BE/Lead?owda=misc&type=Testdrive" target="_blank" class="navigation__footer__testdrive__button" onclick="ga('send', 'event', 'Link', 'Click', 'Testdrive');">
              <span class="navigation__footer__testdrive__button__label">
                Demandez un essai              </span>
              <span class="navigation__footer__testdrive__button__icon">
                <svg viewBox="0 0 29 55" xmlns="http://www.w3.org/2000/svg">
  <path d="M2.75418994,54.2739628 C2.4301676,54.5979865 2.02513966,54.7599983 1.62011173,54.7599983 C1.2150838,54.7599983 0.810055866,54.5979865 0.48603352,54.2739628 C-0.162011173,53.6259155 -0.162011173,52.6538445 0.48603352,52.0057972 L25.1117318,27.3799992 L0.48603352,2.7542011 C-0.162011173,2.10615378 -0.162011173,1.13408281 0.48603352,0.486035488 C1.13407821,-0.162011829 2.10614525,-0.162011829 2.75418994,0.486035488 L28.5139665,26.2459164 C29.1620112,26.8939637 29.1620112,27.8660346 28.5139665,28.514082 L2.75418994,54.2739628 Z"></path>
</svg>              </span>
            </a>
          </span>
        </div>
        <div class="navigation__footer__navigation">
          <div class="nav-footer-inner"><ul id="menu-footer-navigation" class="nav"><li id="menu-item-266" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-266"><a href="<?php echo get_site_url(); ?>/politique-en-matiere-de-cookies/">Cookie Policy</a></li>
<li id="menu-item-268" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-268"><a href="<?php echo get_site_url(); ?>/conditions-generales/">Conditions Générales</a></li>
<li id="menu-item-267" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-267"><a href="<?php echo get_site_url(); ?>/protection-de-la-vie-privee/">Privacy</a></li>
</ul></div><ul class="languages nav"><li><a href="<?php echo get_site_url(); ?>"><span class="language">nl</span></a></li><li><a href="<?php echo get_site_url(); ?>/fr"><span class="language menu-item language--active menu-item">fr</span></a></li></ul>        </div>
      </div>
    </div>
    <?php } ?>
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
        //https://pinterest.com/pin/create/button/?url=/sdf&media=sdf&description=This%20is%20an%20description
  		?>
      <ul class="social-links">
        <li>
          <a data-tracking-value="Facebook" href="https://www.facebook.com/sharer.php?u=<?php echo $shareURL; ?>?9" rel="nofollow" target="_blank"><svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg"><path d="M17.007 0H.993A.993.993 0 0 0 0 .993v16.014c0 .549.445.993.993.993h8.62v-6.97H7.268V8.314h2.346V6.308c0-2.325 1.421-3.59 3.495-3.59.993 0 1.848.074 2.097.107v2.43h-1.441c-1.125 0-1.344.54-1.344 1.328v1.733h2.688l-.349 2.723H12.42V18h4.586c.55 0 .994-.444.994-.993V.993A.993.993 0 0 0 17.007 0" fill="#0F1941" fill-rule="nonzero" /></svg></a>
        </li>
        <li>
          <a data-tracking-value="Linkedin" href="https://www.linkedin.com/shareArticle?url=<?php echo $shareURL; ?>?9" target="_blank"><svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg"><path d="M15.335 15.339H12.67v-4.177c0-.996-.02-2.278-1.39-2.278-1.389 0-1.601 1.084-1.601 2.205v4.25H7.013V6.75h2.56v1.17h.035c.358-.674 1.228-1.387 2.528-1.387 2.7 0 3.2 1.778 3.2 4.091v4.715zM4.003 5.575a1.546 1.546 0 0 1-1.548-1.549 1.548 1.548 0 1 1 1.547 1.549zm1.336 9.764H2.666V6.75H5.34v8.589zM16.67 0H1.329C.593 0 0 .58 0 1.297v15.406C0 17.42.594 18 1.328 18h15.338C17.4 18 18 17.42 18 16.703V1.297C18 .58 17.4 0 16.666 0h.003z" fill="#0F1941" fill-rule="nonzero" /></svg></a>
        </li>
        <li>
          <a data-tracking-value="Twitter" href="https://twitter.com/share?text=<?php echo $crunchifyTitle; ?>&url=<?php echo $crunchifyURL; ?>?9" rel="nofollow" target="_blank"><svg width="20" height="16" viewBox="0 0 20 16" xmlns="http://www.w3.org/2000/svg"><path d="M19.163 2.055a8 8 0 0 1-2.26.62 3.966 3.966 0 0 0 1.73-2.178 8.13 8.13 0 0 1-2.501.947A3.936 3.936 0 0 0 9.425 5.03 11.148 11.148 0 0 1 1.312.929a3.858 3.858 0 0 0-.533 1.98c0 1.368.696 2.57 1.75 3.277a3.923 3.923 0 0 1-1.782-.493v.049c0 1.908 1.355 3.499 3.157 3.861a3.997 3.997 0 0 1-1.77.068 3.95 3.95 0 0 0 3.684 2.734 7.894 7.894 0 0 1-4.882 1.684c-.312 0-.623-.019-.936-.054a11.196 11.196 0 0 0 6.046 1.767c7.243 0 11.199-5.996 11.199-11.188 0-.168 0-.336-.012-.504A7.949 7.949 0 0 0 19.2 2.07l-.038-.016z" fill="#0F1941" fill-rule="nonzero" /></svg></a>
        </li>
        <li>
          <a data-tracking-value="Pinterest" href="https://pinterest.com/pin/create/button/?url=/<?php echo $crunchifyURL; ?>&description=<?php echo $crunchifyTitle; ?>?9" rel="nofollow" target="_blank"><svg enable-background="new 0 0 310.05 310.05" viewBox="0 0 310.05 310.05" xmlns="http://www.w3.org/2000/svg"><path d="m245.265 31.772c-21.342-20.488-50.877-31.772-83.164-31.772-49.32 0-79.654 20.217-96.416 37.176-20.658 20.9-32.504 48.651-32.504 76.139 0 34.513 14.436 61.003 38.611 70.858 1.623.665 3.256 1 4.857 1 5.1 0 9.141-3.337 10.541-8.69.816-3.071 2.707-10.647 3.529-13.936 1.76-6.495.338-9.619-3.5-14.142-6.992-8.273-10.248-18.056-10.248-30.788 0-37.818 28.16-78.011 80.352-78.011 41.412 0 67.137 23.537 67.137 61.425 0 23.909-5.15 46.051-14.504 62.35-6.5 11.325-17.93 24.825-35.477 24.825-7.588 0-14.404-3.117-18.705-8.551-4.063-5.137-5.402-11.773-3.768-18.689 1.846-7.814 4.363-15.965 6.799-23.845 4.443-14.392 8.643-27.985 8.643-38.83 0-18.55-11.404-31.014-28.375-31.014-21.568 0-38.465 21.906-38.465 49.871 0 13.715 3.645 23.973 5.295 27.912-2.717 11.512-18.865 79.953-21.928 92.859-1.771 7.534-12.44 67.039 5.219 71.784 19.841 5.331 37.576-52.623 39.381-59.172 1.463-5.326 6.582-25.465 9.719-37.845 9.578 9.226 25 15.463 40.006 15.463 28.289 0 53.73-12.73 71.637-35.843 17.367-22.418 26.932-53.664 26.932-87.978 0-26.826-11.52-53.272-31.604-72.556z"/></svg></a>
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