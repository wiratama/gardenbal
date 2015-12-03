<?php
/**
 * Template Name: Villa
 */
global $data;

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
	</div>
	<div class="compare">
		<a href="<?php the_field('page_link'); ?>">COMPARE VILLA</a>
	</div>
</section>

<section>
	<div class="content-pack">
	<?php 
		$key = 0;
			wp_reset_query(); 	
		$args = array(
				'post_type' => 'villa', 
			'orderby' => 'rand', 
			'order' => 'asc',
				);
		    $event_loop = new WP_Query($args);
		    	if($event_loop->have_posts()):
		    	while($event_loop->have_posts()):$event_loop->the_post();
	    $key++;
    ?>    

	<div class="row <?php if($key % 2 == 0) {echo 'model-pack-one';} else {echo 'model-pack-two';} ?>">
		<div class="col-xs-12 col-md-8 col-lg-8">
			<div id="carousel-one" class="carousel slide" data-ride="carousel">

			<div class="carousel-inner">
					<?php 
	                    $i =0;
	                    while(have_rows('slide_image')): the_row();
	                    $image = get_sub_field('image');
                	?>
	                <div class="item <?php if ($i===0): echo('active'); endif; ?>">
	                  	<img src="<?php echo $image['sizes']['slide_img']; ?>" class="img-responsive"  >
	                </div>
              		<?php $i++; endwhile; ?>
				</div>
				<a class="left carousel-control" href="#carousel-one" data-slide="prev">
					<span class="control-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-one" data-slide="next">
					<span class="control-right"></span>
				</a>
			</div>
		</div>
		<div class="col-xs-12 col-md-4 col-lg-4">
			<h1><?php the_title(); ?></h1>
	        <p><?php the_excerpt(); ?></p>		
			<a href="<?php the_permalink(); ?>">VIEW DETAILS</a>	
			<a href="https://bookings.ihotelier.com/Hanging-Gardens-Ubud%2C-Bali/bookings.jsp?hotelId=96619&themeId=12229" target="_blank">RESERVE NOW</a>
		</div>
	</div>
	<?php endwhile; endif;?>
	<div class="row model-pack-two">
		<div class="col-xs-12 col-md-8">
			<div id="carousel-one" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<?php 
	                    /*$i =0;
	                    while(have_rows('slide_image')): the_row();
	                    $image = get_sub_field('image');*/
                	?>
	                <div class="item active">
	                  	<img src="http://hanginggardensofbali.com/wp-content/uploads/2015/11/w-hanging-gardens-of-bali-best-villas-luxurious-private-suite-ubud.jpg" class="img-responsive"  >
	                </div>
              		<?php //$i++; endwhile; ?>
				</div>
				<a class="left carousel-control" href="#carousel-one" data-slide="prev">

				<span class="control-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-one" data-slide="next">
					<span class="control-right"></span>
				</a>
			</div>
		</div>

	<div class="col-xs-12 col-md-4">
			<h1>CLUB RESIDENCE</h1>
	        <p>Club Residence is perfectly suited to accommodating a large family and its accompanying entourage. Guests have a choice of luxurious individual suites including the Emperor Suite, Presidential Suite, Grande Executive Suite, and the Executive Garden Suites.</p>		
			<a href="/sandbox/club-residence/">VIEW DETAILS</a>	
			<a href="https://bookings.ihotelier.com/Hanging-Gardens-Ubud%2C-Bali/bookings.jsp?hotelId=96619&themeId=12229" target="_blank">RESERVE NOW</a>
		</div>
	</div>
	</div>
</section>
<?php endwhile; // End of the loop. ?>
<?php get_footer(); ?>