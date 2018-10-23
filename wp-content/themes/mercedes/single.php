<?php get_header(); ?>
<div class="header_image" style='background-image:url(<?php the_field("banner_image") ?>);'>

</div>
<div class="row">
	<div class="title-block">
		<div class="titlecontainer">
		<div class="title"><h1><?php the_title() ?></h1></div>
		</div>
	</div>
	
	<?php the_content() ?>
	
</div>

<?php get_footer(); ?>
