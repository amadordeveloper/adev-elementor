<?php
/*
Plugin Name: Adev-Elementor
Plugin URI: https://amadordeveloper.com
Description: Este plugin permite agregar addons nuevos para Elementor
Version:1.0.0
Author: Amador developer
Author URI: https://amadordeveloper.com
License: GPL
*/

require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/amadordeveloper/adev-elementor',
	__FILE__,
	'adev-elementor'
);

//Optional: Set the branch that contains the stable release.
$myUpdateChecker->setBranch('master');

function register_adev_elementor_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/adev-blind-tab.php' );

	$widgets_manager->register( new \Adev_Blind_Tab() );

}
add_action( 'elementor/widgets/register', 'register_adev_elementor_widget' );