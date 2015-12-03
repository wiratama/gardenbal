<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hangginggardens
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
		$(window).scroll(function(event) {
               if($(this).scrollTop() > '120'){
                       $('.frontpage').addClass('fixed-top');
               }else{
                       $('.frontpage').removeClass('fixed-top');
               }
       });
	</script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancylike.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".fancylike-fb-like").fancylike();
		});
	</script>
	
<?php wp_footer(); ?>
</BODY>
</html>