<?php
$blog_id = get_current_blog_id();
$mode = get_field('mode', 'option');
?>
<!doctype html>
<html lang="<?php if ( $blog_id == 1 ) { ?>nl<?php } elseif ( $blog_id == 2 && ICL_LANGUAGE_CODE == 'fr' ) { ?>fr<?php } else { ?>en<?php } ?>">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta htta-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<?php if ( $blog_id == 1 ) { ?>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/src/img/brand/detijd/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/src/img/brand/detijd/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/src/img/brand/detijd/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/src/img/brand/detijd/favicon-16x16.png">
<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/src/img/brand/detijd/safari-pinned-tab.svg" color="#0e2a4c">
<meta name="theme-color" content="#0e2a4c">
<meta name="msapplication-navbutton-color" content="#0e2a4c">
<meta name="apple-mobile-web-app-status-bar-style" content="#0e2a4c">
<?php } elseif ( $blog_id == 2) { ?>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/src/img/brand/lecho/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/src/img/brand/lecho/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/src/img/brand/lecho/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/src/img/brand/lecho/favicon-16x16.png">
<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/src/img/brand/lecho/safari-pinned-tab.svg" color="#420b0b">
<meta name="theme-color" content="#420b0b">
<meta name="msapplication-navbutton-color" content="#420b0b">
<meta name="apple-mobile-web-app-status-bar-style" content="#420b0b">
<?php } ?>
<link rel="dns-prefetch" href="google-analytics.com">
<?php wp_head(); ?>
<?php if ( true ) { ?>
<?php if ( $blog_id == 1 ) { ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-74211934-21"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  //gtag('config', 'UA-74211934-21');
</script>

<?php } ?>
<?php if ( $blog_id == 2 ) { ?>
	
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-74211934-22"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  //gtag('config', 'UA-74211934-22');
</script>


<?php } ?>
<?php } ?>

</head>
<body>
	<div id="barba-wrapper">
		<div <?php body_class('barba-container'); ?> data-namespace="<?php if (is_home()) { ?>home<?php } elseif ( is_single() ) { ?>article<?php } else { ?>page<?php } ?>">
			<?php get_template_part('templates/articles', 'overlay'); ?>
			<header class="l-header<?php if ( $blog_id == 2 ) { ?> l-header--lecho<?php } ?>">
				<div class="l-header__inner row">
					<div class="l-header__brand">
						<?php if ( $blog_id == 1 ) { ?>
						<a href="https://www.tijd.be/" target="_blank" class="l-header__logo"><img src="<?php echo get_template_directory_uri(); ?>/src/img/brand/logo-tijd.svg" alt="De Tijd"></a>
						<?php } ?>
						<?php if ( $blog_id == 2 ) { ?>
						<a href="https://www.lecho.be/" target="_blank" class="l-header__logo"><img src="<?php echo get_template_directory_uri(); ?>/src/img/brand/logo-lecho.svg" alt="L'Echo"></a>
						<?php } ?>
					</div>
					<div class="l-header__nav">
						<?php if ( $blog_id == 1 ) { ?>
						<ul>
							<li><a href="https://www.tijd.be/" target="_blank">Nieuws</a></li>
							<li><a href="https://www.tijd.be/markten-live/overzicht.html" target="_blank">Markten<span>Live</span></a></li>
							<li><a href="https://www.tijd.be/netto/" target="_blank">Netto</a></li>
						</ul>
						<?php } ?>
						<?php if ( $blog_id == 2 ) { ?>
						<ul>
							<li><a href="https://www.lecho.be/" target="_blank">Accueil</a></li>
							<li><a href="https://www.lecho.be/les-marches/apercu.html" target="_blank">Les Marchés<span>Live</span></a></li>
							<li><a href="https://www.lecho.be/monargent/" target="_blank">Mon Argent</a></li>
						</ul>
						<?php } ?>
					</div>
					<div class="l-header__clientlogo">
						<a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/src/img/brand/next-logo.png" alt="Next"></a>
					</div>
					<div class="l-header__lang">
						<ul class="lang-list">
							<li<?php if ( $blog_id == 1 ) { ?> class="active"<?php } ?>><a href="<?php echo get_site_url(1); ?>" class="no-barba">NL</a></li>
							<li<?php if ( $blog_id == 2 ) { ?> class="active"<?php } ?>><a href="<?php echo get_site_url(2); ?>" class="no-barba">FR</a></li>
						</ul>
					</div>
				</div>

			</header>
