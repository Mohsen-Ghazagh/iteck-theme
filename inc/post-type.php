<?php 

// Register team Post Type
add_action( 'init', 'team_post_type', 0 );
function team_post_type() {
	$labels = array(
		'name'                => __( 'تیم', 'webtinus' ),
		'singular_name'       => __( 'تیم', 'webtinus' ),
		'menu_name'           => __( 'تیم', 'webtinus' ),
		'name_admin_bar'      => __( 'تیم', 'webtinus' ),
		'add_new_item'          => __( 'افزودن تیم', 'webtinus' ),
		'add_new'               => __( 'افزودن تیم', 'webtinus' ),
		'new_item'              => __( 'تیم جدید', 'webtinus' ),
	);
	$args = array(
		'label'               => __( 'تیم', 'webtinus' ),
		'description'         => __( 'تیم شرکت', 'webtinus' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 6,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false, 
		'publicly_queryable'  => false,
		'rewrite'             => true,
		'show_in_rest' 		  => true, // Disable Gutenberg
		'capability_type'     => 'post',
	);
	register_post_type( 'team', $args );
}


// category team
add_action('init', 'register_team_cat');
function register_team_cat() {
	register_taxonomy('cat_team', 'team', 
		array(
			'labels'            => array(
				'name'              => __('دسته بندی تیم', 'webtinus'),
				'singular_name'     => __('دسته بندی', 'webtinus'),
				'search_items'      => __('جستجو', 'webtinus'),
				'all_items'         => __('همه دسته بندی ها', 'webtinus'),
				'parent_item'       => __('دسته بندی اصلی', 'webtinus'),
				'edit_item'         => __('ویرایش دسته بندی', 'webtinus'),
				'update_item'       => __('بروزرسانی دسته بندی', 'webtinus'),
				'add_new_item'      => __('افزودن دسته بندی جدید', 'webtinus'),
				'new_item_name'     => __('دسته بندی جدید', 'webtinus'),
			),
			'hierarchical'      => TRUE,
			'show_ui'           => TRUE,
			'show_tagcloud'     => TRUE,
			'public'            => TRUE,
			'rewrite'           => array( 'slug' => 'team-cat' ),
			'show_in_nav_menus' => TRUE,
			'show_in_rest' 		  => true, // Disable Gutenberg
		)
	);
} 
















?>