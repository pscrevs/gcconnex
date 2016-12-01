<?php

/**
 * GC-Information Banne
 * 
 * @author Government of Canada
 */

elgg_register_event_handler('init', 'system', 'gcconnex_theme_init');

function gcconnex_theme_init() {
    elgg_register_page_handler('hello', 'gcconnex_theme_page_handler');

    //menu item for career dropdown
    elgg_register_menu_item('site', array(
    		'name' => 'career',
    		'href' => '#career_menu',
    		'text' => elgg_echo('career') . '<span class="expicon glyphicon glyphicon-chevron-down"></span>'
    ));
}
