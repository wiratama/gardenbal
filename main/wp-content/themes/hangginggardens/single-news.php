<?php get_header(); ?>

<div id="carousel-banner" class="carousel slide custom-h" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">
				<img src="http://hanginggardensofbali.com/wp-content/uploads/2015/11/Discovering-the-Hanging-Gardens-of-Bali.jpg" />
			</div>
		</div>
	</div>
	<h2><?php if(function_exists('bcn_display')){bcn_display();}?></h2>
</div> 

<?php while ( have_posts() ) : the_post(); ?>
<section>
	<div class="container content-news">
		<div class="row">
			<div class="col-md-12">
				<h1><?php the_title(); ?></h1>
				<h1><?php echo get_the_date(); ?></h1>
				<hr />
				<br />
				<div class="row">
					<div class="col-md-5">
					<?php the_post_thumbnail('', array('class' => 'img-responsive')); ?>
					</div>
					<div class="col-md-7">
					<?php the_content(); ?>

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
			</div>
		</div>
	</div>
</section>


<?php endwhile; // End of the loop. ?>
<?php get_footer(); ?>