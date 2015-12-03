<?php
/**
 * Template Name: Compare
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
          </div>
      </div>
    </div>
    <div class="row">
      <?php if( have_rows('data') ): while ( have_rows('data') ) : the_row(); ?>
      <div class="col-md-3 col-sm-6">
        <table class="table">
          <tbody class="tablecompare">          
            <tr><td><h3><?php the_sub_field('name'); ?></h3></td></tr>
            <tr><td><img src="<?php the_sub_field('image'); ?>" class="img-responsive" /></td></tr>
            <?php 
              while(have_rows('field')): the_row(); 
              $info = get_sub_field('info');
            ?>
            <tr><td><p><?php echo ($info); ?></p></td></tr>
            <?php endwhile; ?>
            <tr><td><a href="<?php the_sub_field('url_book'); ?>" class="btn btn-compare">BOOK NOW</a></td></tr>          
          </tbody>
        </table>
      </div>
      <?php endwhile; else : endif; ?>
    </div>
</div>
<?php endwhile; // End of the loop. ?>
<footer style="position:relative;">
  <?php get_template_part( 'template-parts/footer' ); ?>
</footer> 
<?php get_footer(); ?>