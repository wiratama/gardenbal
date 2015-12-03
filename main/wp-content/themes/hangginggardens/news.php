<?php
/**
 * Template Name: News & Reviews
 */
get_header(); ?>

	<div id="carousel-banner" class="carousel slide custom-h" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">
				<img src="<?php the_field('image_background'); ?>" alt="First slide">
			</div>
		</div>
	</div>
	<h2><?php if(function_exists('bcn_display')){bcn_display();}?></h2>
</div> 
<?php while ( have_posts() ) : the_post(); ?>

<section>
	<div class="container content-holder">
		<div class="row">
			<div class="col-md-12">
				<?php the_content(); ?>
			</div>
			<div class="col-md-12">
				<div class="myshare">
					<span class='st_facebook_custom' displayText='Facebook'></span>
					<span class='st_twitter_custom' displayText='Tweet'></span>
					<span class='st_pinterest_custom' displayText='Pinterest'></span>
					<span class='st_email_custom' displayText='Email'></span>
					<!-- <div class="fancylike-fb-like"></div> -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- news start here -->
<div class="newsreview">
	<div class="container content-holder">
		<div class="row">
			<div class="col-md-12 logo-news">
			<?php
				if( have_rows('logo_awards') ) : while ( have_rows('logo_awards') ) : the_row();
			?>
				<img src="<?php the_sub_field('logo' ); ?>" class="img-responsive">
			<?php 
				endwhile; else : endif; 
			?>
				
			</div>
		</div>
		<?php echo_newspage(); ?>
	</div>
<!-- end copy -->
<?php endwhile; // End of the loop. ?>
<?php get_footer(); ?>