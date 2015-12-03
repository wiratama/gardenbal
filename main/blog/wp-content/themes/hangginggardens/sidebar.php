<?php

/**

 * The sidebar containing the main widget area.

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package hangginggardens

 */



if ( ! is_active_sidebar( 'sidebar-1' ) ) {

	return;

}

?>



	<div class="menu-kanan">

		<div class="row">

			<div class="col-md-12"><!-- menu-->

			<!-- <img src="<?php echo get_template_directory_uri();?>/images/tripadvisor.png" class="img-responsive center-block">

			 -->

			<?php dynamic_sidebar( 'sidebar-1' ); ?>

			 </div>

		</div>

		<!-- <div class="row"> -->

			<h2>CATEGORIES</h2> 

			<?php 

				class Walker_Simple_Example extends Walker_Category {  

					function start_el(&$output, $item, $depth=0, $args=array()) {  

				        $output .= "<a>".esc_attr( $item->name );

				    }  



				    function end_el(&$output, $item, $depth=0, $args=array()) {  

				        $output .= "</a>";  

				    }  

				}

				wp_list_categories(array(

					'orderby'            => 'name',

					'order'              => 'ASC',

					'style'              => 'none',

					'show_count'         => 0,

					'hide_empty'         => 1,

					'use_desc_for_title' => 1,

					'child_of'           => 0,

					'hierarchical'       => 1,

					'title_li'           => __( 'Categories' ),

					'show_option_none'   => __( '' ),

					'number'             => null,

					'echo'               => 1,

					'depth'              => 0,

					'current_category'   => 0,

					'pad_counts'         => 0,

					'taxonomy'           => 'category',

					'walker'=> new Walker_Simple_Example)

				);

			?>

			<!-- <a href="#">FOOD</a>

			<a href="#">POOL</a>

			<a href="#">ADVENTURE</a>

			<a href="#">SPA</a>

			<a href="#">GALA DINNER</a> -->

		<!-- </div> -->

		<!-- <div class="row archives">
		
			<h2>ARCHIVE</h2>
		
			<?php wp_get_archives('format=custom'); ?>
		
		</div> -->

	</div>



	<!-- Right Content -->

	

	</div>