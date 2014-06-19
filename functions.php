<?php

define('PADD_THEME_NAME','Magnesiumize');
define('PADD_THEME_VERS','1.0');
define('PADD_THEME_SLUG','magnesiumize');
define('PADD_NAME_SPACE','padd');
define('PADD_GALL_THUMB_W',309);
define('PADD_GALL_THUMB_H',205);
define('PADD_LIST_THUMB_W',258);
define('PADD_LIST_THUMB_H',180);
define('PADD_SRESULT_THUMB_W',115);
define('PADD_SRESULT_THUMB_H',115);
define('PADD_YTUBE_W',250);
define('PADD_YTUBE_H',224);
define('PADD_THEME_FWVER','2.5.1');

define('PADD_THEME_PATH',get_theme_root() . DIRECTORY_SEPARATOR . PADD_THEME_SLUG);
define('PADD_FUNCT_PATH',PADD_THEME_PATH . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR);

remove_action('wp_head','wp_generator');

add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');

register_nav_menus(array('main' => 'Main Menu'));

set_post_thumbnail_size(PADD_LIST_THUMB_W,PADD_LIST_THUMB_H,true);
add_image_size('gallery',PADD_GALL_THUMB_W,PADD_GALL_THUMB_H,true);
add_image_size('search-result',PADD_SRESULT_THUMB_W,PADD_SRESULT_THUMB_H,true);

function padd_widgets_init() {
	register_sidebar(array(
		'name' => 'Sidebar',
		'before_widget' => '<div id="%1$s" class="box %2$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<div class="title"><h3>',
		'after_title' => '</h3></div><div class="interior">',
	));
	register_sidebar(array(
		'name' => 'Footer 1',
		'before_widget' => '<div id="%1$s" class="box %2$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3><div class="interior">',
	));
	register_sidebar(array(
		'name' => 'Footer 2',
		'before_widget' => '<div id="%1$s" class="box %2$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3><div class="interior">',
	));
	register_sidebar(array(
		'name' => 'Footer 3',
		'before_widget' => '<div id="%1$s" class="box %2$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3><div class="interior">',
	));
	register_sidebar(array(
		'name' => 'Footer 4',
		'before_widget' => '<div id="%1$s" class="box %2$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3><div class="interior">',
	));
}
add_action('widgets_init','padd_widgets_init');

require PADD_FUNCT_PATH . 'library.php';
require PADD_FUNCT_PATH . 'hooks.php';

require PADD_FUNCT_PATH . 'classes' . DIRECTORY_SEPARATOR . 'socialnetwork.php';
require PADD_FUNCT_PATH . 'classes' . DIRECTORY_SEPARATOR . 'socialbookmark.php';
require PADD_FUNCT_PATH . 'classes' . DIRECTORY_SEPARATOR . 'advertisement.php';
require PADD_FUNCT_PATH . 'classes' . DIRECTORY_SEPARATOR . 'widgets.php';
require PADD_FUNCT_PATH . 'classes' . DIRECTORY_SEPARATOR . 'twitter.php';
require PADD_FUNCT_PATH . 'classes' . DIRECTORY_SEPARATOR . 'pagination.php';
require PADD_FUNCT_PATH . 'classes' . DIRECTORY_SEPARATOR . 'input' . DIRECTORY_SEPARATOR . 'input-option.php';
require PADD_FUNCT_PATH . 'classes' . DIRECTORY_SEPARATOR . 'input' . DIRECTORY_SEPARATOR . 'input-socialnetwork.php';
require PADD_FUNCT_PATH . 'classes' . DIRECTORY_SEPARATOR . 'input' . DIRECTORY_SEPARATOR . 'input-advertisement.php';

require PADD_FUNCT_PATH . 'defaults.php';

require PADD_FUNCT_PATH . 'administration' . DIRECTORY_SEPARATOR . 'options-functions.php';
require PADD_FUNCT_PATH . 'administration' . DIRECTORY_SEPARATOR . 'posting-functions.php';

require PADD_FUNCT_PATH . 'launch.php';