<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hangginggardens
 */

get_header(); ?>

	<div id="carousel-banner" class="carousel slide custom-h" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">
				<img src="<?php echo get_template_directory_uri(); ?>/images/img-1.jpg" alt="First slide">
			</div>
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/images/img-2.jpg" alt="First slide">
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
