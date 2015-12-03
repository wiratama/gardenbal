		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-4 img-url">
				<?php
					if( have_rows('social_media', 'option') ) : while ( have_rows('social_media', 'option') ) : the_row();
				?>
					<a href="<?php the_sub_field('url', 'option' ); ?>" target="_blank">
					<img src="<?php the_sub_field('icon', 'option' ); ?>">
					</a>
				<?php 
					endwhile; else : endif; 
				?>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-4 link-center">
				<!-- <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-chevron-right"></i> <?php the_field('middle_text', 'option'); ?> </a> -->

					<!-- Button trigger modal -->
					<a href="#" data-toggle="modal" data-target="#myModal">
					 <i class="fa fa-chevron-right"></i> <?php the_field('middle_text', 'option'); ?>
					</a>

					<!-- Modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title text-center" id="myModalLabel" >THE CLUB RESIDENCE</h4>
					      </div>
					      <div class="modal-body">
					        <p class="text-center">LOG IN</p>
					        <p class="text-center">if you are already a Resident please login below:</p>
					        <form class="myformlogin" action="#"> <!--START FORM -->
					     		<div class="form-group">
		        					<input id="fname" name="name" type="text" placeholder="User Name" class="form-control">
		      					</div>
		      					<div class="form-group">
		        					<input id="fname" name="name" type="password" placeholder="Password" class="form-control">
		        					
		      					</div>
		      					<div class="form-group">
		      					<div class="row">
		      						<div class="col-xs-6 col-sm-6 col-md-6">
		        					</div>		      						
		      						<div class="col-xs-6 col-sm-6 col-md-6">
		        						<button type="submit" class="btn btn-login">SUBMIT</button>
		        					</div>
		        				</div>
		      					</div>
		      				</form> <!-- END form -->
					      </div>
					      <div class="modal-footer">
					        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
					        
							<p class="text-center">If you would like to enquire about becoming a Resident of Hanging Gardens <br /> of Bali - please go to our membership page here <br /> If you have forgotten your username and password please click here.</p>

					      </div>
					    </div>
					  </div>
					</div>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-4">
			<h2><i class="fa fa-copyright"></i> <?php echo(date("Y")); ?> <?php the_field('copyright', 'option'); ?> </h2>
			</div>
		</div>