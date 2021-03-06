<?php
/*
 * Plugin Name: Tim's Shortcodes
 * Plugin URI: http://tspear.com/blog/tspear-shortcodes
 * Description: My shortcodes
 * Author: Tim Spear
 * Version: 0.1
 * Author URI: http://tspear.com
 * License: GPL2+
 * Text Domain: tspear-shortcodes
 */


function ts_lorem_function(){ 
	return '<p>lorem ipsum dolor sit amet.lorem ipsum dolor sit amet. lorem ipsum dolor sit amet.lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet.</p>';
};
add_shortcode('tslorem', 'ts_lorem_function');


function ts_bs3_gallery($attr){

	$imglist = explode(',', $attr['ids']);
	
	if (count($imglist) > 0) {
		// wrapper div
		$output ='<div class="tsbs3gallery">';
		$output .='<div class="row">';
		foreach ($imglist as $value) {
			$url = wp_get_attachment_image_src($value,'full');
			$output.= '<div class="col-lg-6"><img src="'.$url[0].'" class="img-responsive"></div>';
		}
		// close wrappers
		$output .='</div>';
		$output .='</div>';
	}
	
	return $output;
};
add_shortcode('tsbs3gallery', 'ts_bs3_gallery');

