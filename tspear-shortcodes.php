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


function ts_responsive_gallery($attr){

	// get_post_gallery_images


	$img_ids_array = explode(',', $attr['ids']);

	$imgattrs = array('class' => 'img-responsive');
	
	$image_output = '';
	foreach ($img_ids_array as $value) {
		$image_output .= wp_get_attachment_image($value, $size, false, $imgattrs);
	}

	return $image_output;
};
add_shortcode('tsgallery', 'ts_responsive_gallery');



function ts_bs3_gallery($attr){

	$imglist = explode(',', $attr['ids']);
	
	if (count($imglist) > 0) {
		$output ='';
		foreach ($imglist as $url) {
			$output.= '<div class="col-lg-3"><img src="'.$url.'" class="img-responsive"></div>';
		}
	}
	
	return $output;
};
add_shortcode('tsbs3gallery', 'ts_bs3_gallery');

