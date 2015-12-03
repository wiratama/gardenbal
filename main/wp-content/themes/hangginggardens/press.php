<?php
/**
 * Template Name: Press
 */
get_header(); ?>

	<div id="carousel-banner" class="carousel slide custom-h" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">
				<img src="<?php the_field('image_background'); ?>" />
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
				<!--<h1><?php the_title(); ?></h1>-->
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
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
		<?php
			if( have_rows('data_perss') ): 
			while ( have_rows('data_perss') ) : the_row(); 
		?>	
		<div class="col-md-3 col-xs-12">
		    <a href="<?php the_sub_field('pdf_file'); ?>" class="link-press" target="_blank">
		        <img src="<?php the_sub_field('image'); ?>" class="img-responsive" />
		        <div class="media-box">
		        <p><?php the_sub_field('caption'); ?></p>
		        </div>
		    </a>
		</div>
		<?php endwhile; else : endif; ?>
		</div>
	</div>
</section>
<?php endwhile; // End of the loop. ?>
<?php get_footer(); ?>