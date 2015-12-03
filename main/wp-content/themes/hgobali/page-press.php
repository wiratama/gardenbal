<?php
/**
 * Template Name: Press
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

  <?php
    $galleries = get_field('data_perss'); if(!empty($galleries)){
  ?>
  <div class="row">
    <?php foreach ($galleries as $key => $images) { ?>
    <div class="col-md-c5 col-xs-12">
        <img src="<?php echo $images['sizes']['media_thumb']; ?>" class="img-responsive" />
        <div class="media-box">
        <p><?php echo $images['caption'];?></p>
        </div>
    </div>
    <?php } ?>
  </div>
  <?php }
  ?>
</div>

<?php endwhile; // End of the loop. ?>
<footer style="position:relative;">
  <?php get_template_part( 'template-parts/footer' ); ?>
</footer> 
<?php get_footer(); ?>