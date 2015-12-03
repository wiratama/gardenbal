<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hangginggardens
 */
get_header(); ?>
	<div id="carousel-banner" class="carousel slide custom-h" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">
				<img src="<?php echo get_template_directory_uri(); ?>/images/img-3.jpg" alt="First slide">
			</div>
		</div>
	</div>
	<h2><?php if(function_exists('bcn_display')){bcn_display();}?></h2>
</div>
<section>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>   
	<div class="container blog-holder">
		<div class="row">
		<div class="col-md-8">
			<h1><?php the_title(); ?> </h1> 
			<h2>by : <?php the_field('author_blog'); ?> | Date : <?php the_date(); ?></h2>
			<?php the_content(); ?>
			
			<div class="myshare">
				<span class='st_facebook_custom' displayText='Facebook'></span>
				<span class='st_twitter_custom' displayText='Tweet'></span>
				<span class='st_pinterest_custom' displayText='Pinterest'></span>
				<span class='st_email_custom' displayText='Email'></span>
				<!-- <div class="fancylike-fb-like"></div> -->
			</div>
			
			<?php comments_template(); ?>
		</div>
		<div class="col-md-4">			
			<?php get_sidebar(); ?>
		</div>
		</div>

	</div>
	<?php endwhile; endif; wp_reset_query(); ?>
</section>
<!-- </section> -->
<!-- end copy -->
<?php get_footer(); ?>