<?php
/**
 * Template Name: Artcuisine
 */
get_header(); ?>
	<div id="carousel-banner" class="carousel slide custom-h" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">
				<img src="<?php the_field('image_background'); ?>" />
			</div>
		</div>
	</div>
	<h2><?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?></h2>
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
	</div>
</section>

<section>
	<div class="content-pack">
	<?php 
		//$key =0;
		if( have_rows('page_part') ): 
		while ( have_rows('page_part') ) : the_row(); 
	?>	

		<div class="row <?php the_sub_field('layout_style'); ?>">
			<div class="col-xs-12 col-md-8">
					<div id="carousel-one<?php the_sub_field('id_slide'); ?>" class="carousel slide carousel-fade" data-ride="carousel">
						<div class="carousel-inner">
							<?php 
		   			      		$i =0;
		   			      		if( have_rows('slider') ):
		   				      	while(have_rows('slider')): the_row();
								$image = get_sub_field('image');

		   				    ?>
							<div class="item <?php if ($i===0): echo('active'); endif; ?>">
	   							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	   						</div>
							<?php $i++; endwhile; endif; ?>
						</div>
						<a class="left carousel-control" href="#carousel-one<?php the_sub_field('id_slide'); ?>" data-slide="prev">
							<span class="control-left"></span>
						</a>
						<a class="right carousel-control" href="#carousel-one<?php the_sub_field('id_slide'); ?>" data-slide="next">
							<span class="control-right"></span>
						</a>
					</div>
			</div>
			<div class="col-xs-12 col-md-4">
   		        <h1><?php the_sub_field('title'); ?></h1>
   		        <p><?php the_sub_field('text'); ?></p>
				<a href="<?php the_sub_field('reserve_url'); ?>">RESERVE NOW</a>
			</div>
		</div>
	<?php endwhile; else : endif; ?>
	</div>
</section>
<?php endwhile; // End of the loop. ?>
<?php get_footer(); ?>

