<div class="header-mask"></div>

	<nav>

		<h1><a href="<?php echo home_url('/' ); ?>" class="ajax"><img class="full" src="<?php the_field('logo', 'option'); ?>" alt="Hanging Garden Spa" /></a></h1>

		<div class="list-container">

			<ul>

				<?php

					if( have_rows('menus', 'option') ) : while ( have_rows('menus', 'option') ) : the_row();

				?>

					<li><a href="<?php the_sub_field('url', 'option' ); ?>" class="ajax" data-target-subnav="<?php the_sub_field('target_sub_menu', 'option' ); ?>"><?php the_sub_field('title_menu', 'option' ); ?></a></li>

				<?php 

					endwhile; else : endif; 

				?>

			</ul>

			<span class="arrow"><span class="inner"></span></span>

		</div>		



		<div class="handle">

			<div class="thearrow"><img src="<?php echo get_template_directory_uri(); ?>/images/tarrow.png"></div>

			<div class="mtitle">BLOG</div>

		</div>

	</nav>

	

	<div class="subnavs">

			<?php

				if( have_rows('sub_menus', 'option') ) : while ( have_rows('sub_menus', 'option') ) : the_row();

			?>

				<div class="subnav <?php the_sub_field('target_sub_menu', 'option' ); ?> <?php the_sub_field('column_menu', 'option' ); ?>">

					<?php

						if( have_rows('sub_menu_list', 'option') ) : while ( have_rows('sub_menu_list', 'option') ) : the_row();

					?>

						<!-- <a href="<?php //the_sub_field('url', 'option' ); ?>" class="ajax item"> -->

						<a href="<?php the_sub_field('url', 'option' ); ?>" class="item">

							<span class="title"><span class="inner"><?php the_sub_field('title_menu', 'option' ); ?></span></span>

							<!-- <span class="picture retina" style="background-image:url('<?php the_sub_field('image', 'option' ); ?>'); display: block!important;">

								<img class="retina" height="100%" />

							</span> -->

							<span class="picture">

								<img src="<?php the_sub_field('image', 'option' ); ?>"  width="100%" height="auto" />

							</span> 



							<span class="separator"></span>

						</a>

					<?php 

						endwhile; else : endif; 

					?>



				</div>

			<?php 

				endwhile; else : endif; 

			?>

		

		<?php

			if( have_rows('sub_menus', 'option') ) : while ( have_rows('sub_menus', 'option') ) : the_row();

		?>	

		<div class="subnav more">

		<ul>

			<?php

				if( have_rows('sub_menu_list', 'option') ) : while ( have_rows('sub_menu_list', 'option') ) : the_row();

			?>

				<li><a href="<?php the_sub_field('url', 'option' ); ?>"><?php the_sub_field('title_menu', 'option' ); ?></a></li>

			<?php 

				endwhile; else : endif; 

			?>

		</ul>	

		</div>

		<?php 

			endwhile; else : endif; 

		?>

	</div>

	<!-- mobile menu -->

	<div class="mobile-nav">

		<?php get_template_part( 'template-parts/mobile-nav'); ?>

</div>