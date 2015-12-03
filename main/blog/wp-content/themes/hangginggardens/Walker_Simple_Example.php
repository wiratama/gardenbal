<?php
class Walker_Simple_Example extends Walker_Category {  
	function start_el(&$output, $item, $depth=0, $args=array()) {  
        $output .= "<div class=\"col-sm-6 col-md-6 clear-padd-cat\"><a class=\"btn btn-category\">".esc_attr( $item->name );
    }  

    function end_el(&$output, $item, $depth=0, $args=array()) {  
        $output .= "</a></div>\n";  
    }  
}  

wp_list_categories(array('walker'=> new Walker_Simple_Example));
?>