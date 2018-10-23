<?php
/**
 * The default template for a 404-error page.
 *
 * @subpackage Master
 * @since Master 1.0
 */
get_header(); ?>

<div class="error-container">
	<div class="error-container__inner">
		<h1><?php the_field('404_title', 'option'); ?></h1>
		<a href="<?php echo home_url(); ?>">&#60; <?php the_field('label_back', 'option'); ?></a>
	</div>
	<div class="error-container__image u-full u-cover--center lazy" data-src="<?php the_field('404_image', 'option'); ?>"></div>
</div>

<?php get_footer(); ?>
