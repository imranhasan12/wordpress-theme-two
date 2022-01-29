<?php




function hello_enqueue_scripts(){
	
	wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/assets/css/bootstrap.min.css');
	wp_enqueue_style('awesome',get_template_directory_uri().'/assets/css/font-awesome.css');
	wp_enqueue_style('templatemo',get_template_directory_uri().'/assets/css/templatemo-training-studio.css');
	//wp_enqueue_style('',get_template_directory_uri().'');
	//wp_enqueue_style('',get_template_directory_uri().'');
	
	
	wp_enqueue_script('jequery',get_template_directory_uri().'/assets/js/jquery-2.1.0.min.js');
	wp_enqueue_script('popper',get_template_directory_uri().'/assets/js/popper.js');
	wp_enqueue_script('bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js');
	wp_enqueue_script('scrollreveal',get_template_directory_uri().'/assets/js/scrollreveal.min.js');
	wp_enqueue_script('',get_template_directory_uri().'/assets/js/waypoints.min.js');
	wp_enqueue_script('jequery-2',get_template_directory_uri().'/assets/js/jquery.counterup.min.js');
	wp_enqueue_script('imgfix',get_template_directory_uri().'/assets/js/imgfix.min.js');
	wp_enqueue_script('imxitup',get_template_directory_uri().'/assets/js/mixitup.js');
	wp_enqueue_script('accordions',get_template_directory_uri().'/assets/js/accordions.js');
	wp_enqueue_script('custom',get_template_directory_uri().'/assets/js/custom.js');
	
	
	
}
add_action('wp_enqueue_scripts','hello_enqueue_scripts');