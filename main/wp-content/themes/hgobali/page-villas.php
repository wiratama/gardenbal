<?php
/**
 * Template Name: Villas
 */

get_header(); ?>
	
<div class="top-btn">
    <a href="#" class="btn btn-book">BOOK NOW</a>
    <a href="#" class="btn btn-contact">CONTACT US</a>
</div>

<?php get_template_part( 'template-parts/nav' ); ?>

<div class="top">
    <img src="<?php the_field('image_background'); ?>" />
</div>

<?php while ( have_posts() ) : the_post(); ?>
<div class="container-fuild">
  	<div class="row">
      	<div class="col-md-12">
          	<div class="breadcrumb pull-right" xmlns:v="http://rdf.data-vocabulary.org/#">
			    <?php if(function_exists('bcn_display'))
			    {
			        bcn_display();
			    }?>
			</div>
      	</div>
  	</div>
  	<div class="container">
	    <div class="row">
	      <div class="col-md-12 box-content">
	       		<h3 class="text-center"><?php the_title(); ?></h3>
		      	<?php the_content(); ?>
	       </div>
	    </div>
	</div>

	<div class="row">
	    <div class="col-md-12 ">
	      <a href="<?php the_field('page_link'); ?>" class="btn btn-reserve pull-right">COMPARE VILLAS</a>
	    </div>
	</div>

	<?php wp_reset_query();  
	
	$args = array(
		'post_type' => 'villa', 
		'orderby' => 'rand', 
		'order' => 'asc',
		);

    $event_loop = new WP_Query($args);
    	if($event_loop->have_posts()):
    	while($event_loop->have_posts()):$event_loop->the_post();
    ?>
    
    <div class="row main-box">
	    <div class="col-md-4">
	      	<div class="info-box">
	        	<h3><?php the_title(); ?></h3>
	        	<p><?php the_excerpt(); ?></p>
	        	<a href="<?php the_permalink(); ?>" class="btn btn-reserve">VILLA DETAIL</a>
	        	<a href="" class="btn btn-reserve">RESERVE NOW</a>
	        </div>
	    </div>
	    <div class="col-md-8">
	      	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	        	<div class="carousel-inner" role="listbox">
	          		<?php 
	                    $i =0;
	                    while(have_rows('slide_image')): the_row();
	                    $image = get_sub_field('image');
                	?>
	                <div class="item <?php if ($i===0): echo('active'); endif; ?>">
	                  	<img src="<?php echo ($image); ?>" class="img-responsive"  >
	                </div>
              		<?php $i++; endwhile; ?>
	        	</div>

		        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		          <span class="sr-only">Previous</span>
		        </a>
		        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		          <span class="sr-only">Next</span>
		        </a>
	      	</div>
	    </div> 
	</div>
</div>
<?php endwhile; endif;?>
<?php endwhile; // End of the loop. ?>
<footer style="position:relative;">
	<?php get_template_part( 'template-parts/footer' ); ?>
</footer>	
<?php get_footer(); ?>