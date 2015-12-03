	<div class="container-fuild">
		<div class="row">
			<div class="col-md-4 myfooter">
				<div class="social-media">
					<?php
						if( have_rows('social_media', 'option') ) : while ( have_rows('social_media', 'option') ) : the_row();
					?>
						<a href="<?php the_sub_field('url', 'option' ); ?>">
						<img src="<?php the_sub_field('icon', 'option' ); ?>">
						</a>
					<?php 
						endwhile; else : endif; 
					?>
				</div>				
			</div>
			<div class="col-md-2 myfooter">
				<p>BECOME THE CLUB RESIDENT</p>
				<div class="social-media">
					<?php
						//if( have_rows('social_media', 'option') ) : while ( have_rows('social_media', 'option') ) : the_row();
					?>
						<!-- <a href="<?php the_sub_field('url', 'option' ); ?>">
						<img src="<?php the_sub_field('icon', 'option' ); ?>">
						</a> -->
					<?php 
						//endwhile; else : endif; 
					?>
				</div>				
			</div>
			<div class="col-md-6 myfooter">
				<p> &copy;<?php echo(date("Y")); ?> <?php the_field('copyright', 'option'); ?> </p>
			</div>
		</div>
	</div>