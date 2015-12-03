<?php
/**
 * Template Name: Contact
 */
get_header(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/supersized.3.2.7.min.js"></script>
<script type="text/javascript">
    jQuery(function($){
        $.supersized({slide_interval : 3000, transition : 1, transition_speed: 1000, slide_links:'blank', 
            slides: [
            
            {image : '<?php the_field('image_background'); ?>', title : 'Hanging Gardens Of Bali'},
            ]  
        });
    });       
</script>
<?php while ( have_posts() ) : the_post(); ?>
<!-- contact content -->
	<div class="mycontact-holder">
				<div class="row">
					<div class="col-xs-12 col-sm-5 col-md-6">
						<!-- Google map -->
						<!-- <div id="map-container"></div>
						    					<script src="http://maps.google.com/maps/api/js?sensor=true"></script> -->
    					<!-- End google map -->
    					<?php the_field('map'); ?>
					</div>
					<div class="col-xs-12 col-sm-7 col-md-6">
					<?php the_field('contact'); ?>

					<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]' ); ?>

					</div>
				</div>
	</div>
<!-- contact ENDs -->
</div> 
<?php endwhile; // End of the loop. ?>
<?php get_footer(); ?>