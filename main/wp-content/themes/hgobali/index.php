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
 * @package hgobali
 */
get_header(); ?>

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
<div class="top-btn">
    <a href="<?php the_field('book_url', 'option'); ?>" class="btn btn-book">BOOK NOW</a>
</div>

<?php get_template_part( 'template-parts/nav' ); ?>

<footer>  
  <?php get_template_part( 'template-parts/footer' ); ?>
</footer>
<?php get_footer(); ?>