			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
				<div class="mobile-navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- <div class="navbar-brand">
							<a href="<?php the_field('url_booking' , 'option'); ?>">BOOK NOW</a> <a href="<?php the_field('url_contact' , 'option'); ?>">Contact US</a>
						</div> -->
						<div class="navbar-brand">
							<img src="<?php the_field('logo_mobile', 'option'); ?>" class="img-responsive mylogo">							
							<img src="<?php echo get_template_directory_uri(); ?>/images/mobile-icon1.png" class="icon1 img-responsive">
							<a href="<?php the_field('url_booking' , 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/mobile-icon2.png" class="icon2 img-responsive"></a>
							<a href="<?php the_field('url_contact' , 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/mobile-icon3.png" class="icon3 img-responsive"></a>
						</div>
					</div>

					<div class="navbar-collapse collapse">
						<?php
	                        wp_nav_menu( array(
	                        'menu'             => 'primary',
	                        'theme_location'   => 'primary',
	                        'depth'            => 2,
	                        'container'        => '',
	                        'container_class'  => '',
	                        'menu_class'       => 'nav navbar-nav',
	                        'fallback_cb'      => 'wp_bootstrap_navwalker::fallback',
	                        'walker'           => new wp_bootstrap_navwalker())
	                        );
	                    ?>
					</div><!--/.nav-collapse -->
				</div>
				</div>
			</div>