<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hgclub
 */
?>
	<section>
		<div class="foot-fixed"></div>
		<div class="inside-footer">
		<?php get_template_part('template-parts/footer') ; ?>
		</div>
	</section>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-select.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

	
	<script>
       /*var app = null;
        $(function(){
            app = new App({
                header_open : true
            });
        });*/
    </script>
    
	
		
	
<?php wp_footer(); ?>
</body>
</html>