<?php get_header(); ?>

<div class="top-btn">
    <a href="#" class="btn btn-book">BOOK NOW</a>
    <a href="#" class="btn btn-contact">CONTACT US</a>
</div>
<?php get_template_part( 'template-parts/nav' ); ?>

<div class="top">
    <img src="<?php the_field('image_background'); ?>" />
</div>

<?php while ( have_posts() ) : the_post(); ?>
<div class="container-fuild">
    <div class="row">
      <div class="col-md-12">
        <div class="breadcrumb pull-right" xmlns:v="http://rdf.data-vocabulary.org/#">
          <?php if(function_exists('bcn_display'))
          {
              bcn_display();
          }?>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
          <div class="col-md-12 box-content">
              <h3 class="text-center">VILLAS</h3>
              <h2 class="text-center"><?php the_title(); ?></h2>                
              <?php the_content(); ?>
          </div>
      </div>
    </div>

    <div class="row main-box">
        <div class="col-md-4">
            <div class="detail-box">
            <h3>FACILITIES</h3>
            <p>
            <ul class="facilities">
            <?php 
              while(have_rows('facilities')): the_row(); 
              $list = get_sub_field('list');
            ?>
              <li><?php echo ($list); ?></li>
             <?php endwhile; ?> 
            </ul>
          </p>
            <a href="<?php the_field('url_reserve'); ?>" class="btn btn-reserve">RESERVE NOW</a>
            </div>
        </div>
        <div class="col-md-8">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <?php 
                        $i =0;
                        while(have_rows('slide_image')): the_row();
                        $image = get_sub_field('image');
                    ?>
                    <div class="item <?php if ($i===0): echo('active'); endif; ?>">
                      <img src="<?php echo ($image); ?>"  >
                    </div>
                  <?php $i++; endwhile; ?>
                    
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
            </div>
        </div>        
    </div>
    <hr class="visible-xs" />
</div>
<?php endwhile; // End of the loop. ?>

<footer style="position:relative;">
  <?php get_template_part( 'template-parts/footer' ); ?>
</footer> 
<?php get_footer(); ?>