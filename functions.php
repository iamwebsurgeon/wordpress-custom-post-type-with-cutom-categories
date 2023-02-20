<?php
function cpt_people_posttype() {
	register_post_type( 'cpt_people',
		array(
			'labels' => array(
			'name' => __('People'),
			'singular_name' => __('People'),
			'add_new_item' => __('Add New'),
            'edit_item' => __('Edit'),
            'new_item' => __('Add New'),
            'view_item' => __('View'),
		),
		'public' => true,
		'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes'),
		'capability_type' => 'post',
		)
	);
}
add_action('init', 'cpt_people_posttype');

register_taxonomy('people_category','cpt_people',array(
	'hierarchical' => true,
	'labels' => array(
		'name' => _x( 'People Categories', 'taxonomy general name' ),
		'singular_name' => _x( 'People Category', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Categories' ),
		'popular_items' => __( 'Popular Categories' ),
		'all_items' => __( 'All Categories' ),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __( 'Edit People Category' ), 
		'update_item' => __( 'Update People Category' ),
		'add_new_item' => __( 'Add New People Category' ),
		'new_item_name' => __( 'New People Category Name' ),
		'separate_items_with_commas' => __( 'Separate People category with commas' ),
		'add_or_remove_items' => __( 'Add or remove People category' ),
		'choose_from_most_used' => __( 'Choose from the most used People category' )
	),
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => false,
));

?>
