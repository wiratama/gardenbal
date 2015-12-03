<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hgobali
 */

?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-select.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<!-- navigation -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/zepto-1.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/default.randheli.min.js"></script>
<script>
    var app = null;
    $(function()
    {
        app = new App(
            null,
            {
                header_open : true,
                is_tablet   : false,
                is_mobile   : false
            }
        );
    });
</script>
<!-- navigation -->

<?php wp_footer(); ?>
</body>
</html>