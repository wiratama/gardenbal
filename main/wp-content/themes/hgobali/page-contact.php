<?php
/**
 * Template Name: Contact
 */

get_header(); ?>

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
            <h3 class="text-center"><?php the_title(); ?></h3>
            <?php the_content(); ?>
        </div>
    </div>
  </div>
  <div class="row main-box">
      <div class="col-md-7 col-sm-7">
        <?php the_field('map'); ?>
      </div>
      <div class="col-md-5 col-sm-5">
        <div class="contact-box">
          <?php the_field('contact'); ?>
          <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]' ); ?>
        </div>
      </div>
  </div>
</div>
<?php endwhile; // End of the loop. ?>
<footer style="position:relative;">
  <?php get_template_part( 'template-parts/footer' ); ?>
</footer> 
<?php get_footer(); ?>