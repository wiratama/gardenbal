<?php
/**
 * Template Name: Sitemap
 */
get_header(); ?>

	<div id="carousel-banner" class="carousel slide custom-h" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">
				<img src="<?php the_field('image_background'); ?>" alt="" />
			</div>
		</div>
	</div>
	<h2><?php if(function_exists('bcn_display')){bcn_display();}?></h2>
</div> 

<?php //while ( have_posts() ) : the_post(); ?>
<section>
	<div class="container content-holder">
		<div class="row">
		<h1>SITEMAP</h1>
			<div class="col-md-6 sitemap">
				
				<ul>
					<?php
						wp_list_pages(
						  array(
						    'exclude' => '',
						    'title_li' => '',
						  )
						);
					?>
				</ul>
			</div>
			<div class="col-md-6 sitemap">			
				<?php
					foreach( get_post_types( array('public' => true) ) as $post_type ) {
					  if ( in_array( $post_type, array('post','page','attachment') ) )
					    continue;

					  $pt = get_post_type_object( $post_type );

					  //echo '<h1>'.$pt->labels->name.'</h1>';
					  echo '<ul>';

					  query_posts('post_type='.$post_type.'&posts_per_page=-1');
					  while( have_posts() ) {
					    the_post();
					    echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
					  }

					  echo '</ul>';
					}
				?>
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


<?php //endwhile; // End of the loop. ?>
<?php get_footer(); ?>