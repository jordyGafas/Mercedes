<?php get_header(); ?>
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
		<div class="socialContainer">
			<div class="socialIcon"><svg width="18" height="15" xmlns="http://www.w3.org/2000/svg"><path d="M18 1.743a7.374 7.374 0 0 1-2.12.581A3.708 3.708 0 0 0 17.503.283a7.444 7.444 0 0 1-2.347.896 3.693 3.693 0 0 0-6.292 3.367A10.483 10.483 0 0 1 1.254.688a3.664 3.664 0 0 0-.5 1.856 3.69 3.69 0 0 0 1.643 3.073 3.693 3.693 0 0 1-1.673-.464V5.2A3.696 3.696 0 0 0 3.686 8.82a3.74 3.74 0 0 1-.973.13c-.238 0-.469-.024-.695-.07a3.694 3.694 0 0 0 3.449 2.565A7.408 7.408 0 0 1 .88 13.023c-.298 0-.592-.018-.881-.05a10.438 10.438 0 0 0 5.66 1.661c6.793 0 10.506-5.626 10.506-10.505l-.013-.478A7.374 7.374 0 0 0 18 1.743z" fill="#FFF" fill-rule="nonzero"/></svg></div>
			<div class="socialIcon"><svg width="18" height="18" xmlns="http://www.w3.org/2000/svg"><path d="M16.637 0H1.327C.594 0 0 .576 0 1.287v15.389c0 .71.594 1.287 1.327 1.287h15.31c.733 0 1.326-.577 1.326-1.287V1.287C17.963.577 17.37 0 16.637 0zM5.446 15.036H2.732v-8.11h2.714v8.11zM4.089 5.818h-.018c-.91 0-1.5-.622-1.5-1.401 0-.795.607-1.401 1.535-1.401.929 0 1.5.605 1.518 1.4 0 .78-.59 1.402-1.535 1.402zm11.14 9.218h-2.713v-4.339c0-1.09-.393-1.834-1.374-1.834-.75 0-1.196.502-1.392.986-.072.173-.09.416-.09.657v4.53H6.947s.035-7.35 0-8.11H9.66v1.15c.36-.553 1.004-1.34 2.445-1.34 1.785 0 3.124 1.158 3.124 3.65v4.65zM9.642 8.141c.012-.02.029-.042.045-.065v.065h-.045z" fill="#FFF" fill-rule="nonzero"/></svg></div>
			<div class="socialIcon"><svg width="18" height="12" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><rect fill="#FFF" width="18" height="11.25" rx="1"/><path d="M17.253.008H.74A.741.741 0 0 0 0 .749v10.092c0 .41.332.741.741.741h16.512c.41 0 .741-.332.741-.741V.749a.741.741 0 0 0-.741-.741zM.74.59h16.512a.16.16 0 0 1 .151.113L8.997 5.954.59.703A.16.16 0 0 1 .741.59zm-.159.776L6.63 5.143.582 9.94V1.366zm16.83 9.47a.16.16 0 0 1-.16.16H.743a.16.16 0 0 1-.16-.16v-.154l6.571-5.194 1.689 1.056c.095.06.215.06.31 0l1.689-1.056 6.571 5.194v.155zm0-.896l-6.063-4.782 6.063-3.757v8.54z" fill="#90A5AB" fill-rule="nonzero"/></g></svg></div>
		</div>
	</div>
	
	<?php the_content() ?>
	
</div>

<?php get_footer(); ?>
