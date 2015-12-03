<?php
/**
 * Template Name: Homepage
 */
get_header(); ?>

	<!--<div id="carousel-banner" class="carousel slide carousel-fade custom-h" data-ride="carousel">
		<div class="carousel-inner">
			<?php 
	      		/*$i =0;
		      	while(have_rows('image_slider', 'option')): the_row();
		      	$image = get_sub_field('image' , 'option');*/
		    ?>
			<div class="item <?php //if ($i===0): echo('active'); endif; ?>">
					<img src="<?php //echo ($image); ?>"  >
				</div>
			<?php //$i++; endwhile; ?>
		</div>
	</div>-->
	
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/supersized.3.2.7.min.js"></script>
<script type="text/javascript">
    jQuery(function($){
        $.supersized({slide_interval : 3000, transition : 1, transition_speed: 1000, slide_links:'blank', 
            slides: [
            <?php 
				$i =0;
		      	while(have_rows('image_slider', 'option')): the_row();
		      	$image = get_sub_field('image' , 'option');
		    ?>
            {image : '<?php echo ($image); ?>', title : 'Hanging Gardens Of Bali'},            
            <?php $i++; endwhile; ?>
            ]  
        });
    });       
</script>
</div>
<?php get_footer(); ?>