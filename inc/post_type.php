<?
function create_restaurant_menu() {
	$labels = array(
		'name'                => 'Menu',
		'singular_name'       => 'Menu',
		'menu_name'           => 'Menu',
		'parent_item_colon'   => 'Parent Menu:',
		'all_items'           => 'All Menu',
		'view_item'           => 'View Menu',
		'add_new_item'        => 'Add New Menu',
		'add_new'             => 'New Menu',
		'edit_item'           => 'Edit Menu',
		'update_item'         => 'Update Menu',
		'search_items'        => 'Search Menu',
		'not_found'           => 'No Menu found',
		'not_found_in_trash'  => 'No Menu found in Trash',
	);

	$args = array(
		'label'               => 'Menu',
		'description'         => 'Menu post type',
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'thumbnail', 'revisions', 'page-attributes', 'editor'),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'capability_type'     => 'page',
		//'menu_icon' => plugins_url( 'gm_icon_bw.png', __FILE__ ),
	);

	register_post_type( 'restaurant_menu', $args );
}

// Hook into the 'init' action
add_action( 'init', 'create_restaurant_menu', 0 );
?>