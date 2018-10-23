<?php
/*
	Template Name: Home
*/
get_header(); ?>
    <?php
		$args = array(
		'post_type' => 'post',
		'posts_per_page' => 1,
	);
	?>
	<?php $loop = new WP_Query( $args ); ?>
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="header_image" style='background-image:url(<?php the_field("banner") ?>);'>
        
        </div>
        <div class="row">
            <div class="title-block">
                <div class="dateContainer">
                    <div class="day"><?php the_time('d'); ?></div>
                    <div class="month"><?php echo substr(get_the_time('F'), 0, 4); ?></div>
                    <div class="year"><?php the_time('Y'); ?></div>
                </div>
                <div class="titlecontainer">
                <div class="subtitle"><h3><?php the_field("subtitle") ?></h3></div>
                <div class="title"><h1><?php the_title() ?></h1></div>
                </div>
            </div>
            
            <?php the_content() ?>
            
        </div>
        <?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
        
<?php get_footer(); ?>
