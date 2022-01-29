<?php

function hello_post(){
	$labels = array(
		'name'               => _x( 'protfolio', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'protfolio', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'protfolio', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'protfolio', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'book', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Book', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Book', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Book', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Book', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Books', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Books', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Books:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No books found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No books found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'protfolio', $args );
}

add_action('init','hello_post');



function hello_mypost() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'categories', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'categories', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search categories  ', 'textdomain' ),
        'all_items'         => __( 'All categories  ', 'textdomain' ),
        'parent_item'       => __( 'Parent categories', 'textdomain' ),
        'parent_item_colon' => __( 'Parent categories:', 'textdomain' ),
        'edit_item'         => __( 'Edit categories', 'textdomain' ),
        'update_item'       => __( 'Update categories', 'textdomain' ),
        'add_new_item'      => __( 'Add New categories', 'textdomain' ),
        'new_item_name'     => __( 'New categories Name', 'textdomain' ),
        'menu_name'         => __( 'categories', 'textdomain' ),
    );
 
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'protfolio' ),
    );
 
    register_taxonomy( 'categories', array( 'protfolio' ), $args );

}

add_action('init','hello_mypost');

function hello_mytags() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'tags', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'tags', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search tags  ', 'textdomain' ),
        'all_items'         => __( 'All tags  ', 'textdomain' ),
        'parent_item'       => __( 'Parent tags', 'textdomain' ),
        'parent_item_colon' => __( 'Parent tags:', 'textdomain' ),
        'edit_item'         => __( 'Edit tags', 'textdomain' ),
        'update_item'       => __( 'Update tags', 'textdomain' ),
        'add_new_item'      => __( 'Add New tags', 'textdomain' ),
        'new_item_name'     => __( 'New tags Name', 'textdomain' ),
        'menu_name'         => __( 'tags', 'textdomain' ),
    );
 
    $args = array(
        'hierarchical'      => false,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'protfolio' ),
    );
 
    register_taxonomy( 'tags', array( 'protfolio' ), $args );

}

add_action('init','hello_mytags');

function protfolio_add_meta_box(){
	
	add_meta_box(
	
	'protfolio_section_id',//id
	'protfolio metabox',//title
	'protfolio_section_callback',//callback
	'protfolio',//screen
	'normal',//context
	'defoult'//priority
	
	);
}

add_action('add_meta_boxes','protfolio_add_meta_box');


function protfolio_section_callback (){ ?>
	
	
	<p>
	<label>title</label>
	<input type="text" name="title" valu="" />
	</P>
	
	
	
	
<?php }


?>


