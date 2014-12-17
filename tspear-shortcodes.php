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


function ts_lorem_function(){ ?>
<p>lorem ipsum dolor sit amet.lorem ipsum dolor sit amet. lorem ipsum dolor sit amet.lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet.</p>
<?php }

add_shortcode('lorem', 'ts_lorem_function');


function ts_responsive_gallery(){
	$imgurl = "thumb.png";
	$markup = sprintf("<img src=%s class='img-responsive'>", $imgurl);	
	echo $markup;
};
add_shortcode('tsgallery', 'ts_responsive_gallery');
