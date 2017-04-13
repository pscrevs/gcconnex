<?php
/**
 * Register the ElggBlog class for the object/blog subtype
 */

if (get_subtype_id('object', 'blog')) {
	update_subtype('object', 'blog', 'ElggBlog');
} else {
	add_subtype('object', 'blog', 'ElggBlog');
}
elgg_register_event_handler('init','system','carpool_init');

function carpool_init() {

	$root = dirname(__FILE__);

	// actions
	$action_path = "$root/actions/";
	elgg_register_action('gccarpool/driverSave', "$action_path/DriverDataEntry.php");


	elgg_register_menu_item('site', array(
		'name' => 'carpool_init',
		'text' => elgg_echo('Carpool'),
		'href' => 'Carpool/all'

	));
	elgg_register_page_handler('Carpool', 'Carpool_page_handler');
}

function Carpool_page_handler($page) {

		if (!isset($page[0])) {
		$page[0] = 'all';
	}




	$pages = dirname(__FILE__) . '/pages/';

	switch ($page[0]) {
		case "all":
			include "$pages/main.php";
			break;

		case "Driver":
			include "$pages/temp.php";
			break;
		case "Passenger":
			include "$page/Search.php";
			break;
		default:
			return false;
	}

	//elgg_pop_context();
	return true;
}
