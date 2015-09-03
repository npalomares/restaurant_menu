<?

/* shortcodes */
function restaurant_menu_shortcode( $atts ) {
	// set default values if no attributes passed
	extract( shortcode_atts( array(
		'orderby' => 'date', // by post date
		'order' => 'ASC', // newest first by default
		'meta_key' => '', // meta_key
		'display' => 'content',
	), $atts ) );

	$db_args = array(
		'post_type' => 'restaurant_menu',
		'order' => $order,
		'orderby' => $orderby,
		'meta_key' => $meta_key,
	);
	
	$menu_loop = new WP_Query( $db_args );
	if($menu_loop->have_posts()) {

		$content .= "<div class=\"menu_wrapper\">";
		while( $menu_loop->have_posts() ) : $menu_loop->the_post();

			$content .= "<div class=\"media menu_single item_".get_the_ID()."\">";
			$content .= "<div class=\"menu_image pull-left\">".get_the_post_thumbnail()."</div>";
			$content .= "<div><h3 class=\"media-header text-center item_title\">".get_the_title()."</h3></div>";
			$content .= "<div class=\"media-body item_description\"><p>".get_the_content()."</p></div>";
			//the price will go here
			$content .= "<div class=\"price\"><p class=\"text-center text-center\">Price</p></div>";

			$content .= "</div>";
		endwhile;
		$content .= "</div>";
	
			
	}
	$wp_query = null;
	$wp_query = $original_query;
	wp_reset_postdata();
	return $content;
				
}
add_shortcode( 'restaurant_menu', 'restaurant_menu_shortcode' );

