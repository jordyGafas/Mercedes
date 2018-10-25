<?php get_header(); ?>
<div class="header_image" style='background-image:url(<?php the_field("banner_image") ?>);'>
<div class="single-article__back">
		<div class="back-row">
			<a href="<?php echo get_site_url();?>"><div>
			<svg width="9" height="14" viewBox="0 0 9 14" xmlns="http://www.w3.org/2000/svg"><path d="M8.286 12.785L7 14.071-.071 7 7-.071l1.286 1.286L2.5 7l5.786 5.785z" fill="white" fill-rule="evenodd"></path></svg>
			</div><div><?php the_field('homepage_link_title', 'option'); ?></div></a>
		</div>
	</div>
</div>
<div class="row">
	<div class="title-block">
		<div class="titlecontainer">
		<span class="title-block-pretitle">01</span>
		<div class="title"><h1><?php the_title() ?></h1></div>
		</div>
	</div>
	
	<?php the_content() ?>
	
</div>

<?php get_footer(); ?>
