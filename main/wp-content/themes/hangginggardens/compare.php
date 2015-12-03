<?php
/**
 * Template Name: Compare
 */

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
</section>

<section>
	<!-- <div class="content-pack"> -->
	<div class="tblcom">
		<?php if( have_rows('data') ): while ( have_rows('data') ) : the_row(); ?>
		
	      	<div class="col-md-c5 col-sm-6">
	      	<h3><?php the_sub_field('name'); ?></h3>
	      	<img src="<?php the_sub_field('image'); ?>" class="img-responsive" />
  			<?php 
              while(have_rows('field')): the_row(); 
              $info = get_sub_field('info');
            ?>
            	<p><?php echo ($info); ?></p>
            <?php endwhile; ?>

            <a href="<?php the_sub_field('url_book'); ?>" target="_blank" class="btn btn-compare">BOOK NOW</a>

		       <!--  <table class="table "> -->
		          <!-- <tbody class="tablecompare"> -->                     
	            <!-- <tr>
		            <td><h3><?php the_sub_field('name'); ?></h3></td>
		            </tr>
		            <tr>
		            <td><img src="<?php the_sub_field('image'); ?>" class="img-responsive" /></td>
		            </tr>
		                    <?php 
		              while(have_rows('field')): the_row(); 
		              $info = get_sub_field('info');
		            ?>
		            
		            	<tr><td><p><?php echo ($info); ?></p></td></tr>
		            <?php endwhile; ?>
		            		            
		            <tr><td><a href="<?php the_sub_field('url_book'); ?>" target="_blank" class="btn btn-compare">BOOK NOW</a></td></tr>          
		            		          --><!--  </tbody>
		         	        </table> -->
	      	</div>
	     <?php endwhile; else : endif; ?>
	</div>
</section>

<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>