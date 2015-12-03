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
				<img src="<?php the_field('image_background', 'option' ); ?>" alt="Blog Hanging Gardens of Bali">
			</div>
		</div>
	</div>
	<h2><?php if(function_exists('bcn_display')){bcn_display();}?></h2>
</div> 

<?php //while ( have_posts() ) : the_post(); ?>
<section>
	<div class="container blog-holder">
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<?php echo_blogpage(); ?>
				</div>
			</div>
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>
<?php// endwhile;?>
<?php get_footer(); ?>