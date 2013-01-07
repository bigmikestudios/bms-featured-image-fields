<?php
/**
 * @package BMS_Portfolio
 * @author Mike Lathrop
 * @version 0.0.1
 */
/*
Plugin Name: BMS Portfolio
Plugin URI: http://bigmikestudios.com
Depends: bms-smart-meta-box/bms_smart_meta_box.php
Description: Adds fields for use with featured images.
Version: 0.0.1
Author URI: http://bigmikestudios.com
*/

$cr = "\r\n";

// =============================================================================

//////////////////////////
//
// ADD META BOX
//
//////////////////////////

if (is_admin()
	// and get_option('page_on_front') != $_GET['post'] // not if we're editting the front page...
	) {
		
	if (!class_exists('SmartMetaBox')) {
		require_once("../wp-content/plugins/bms-smart-meta-box/SmartMetaBox.php");
	}
		
	new SmartMetaBox('bms-smb-featured-image-fields', array(
		'title'     => 'Featured Image',
		'pages'     => array('page'),
		'context'   => 'normal',
		'priority'  => 'high',
		'fields'    => array(
			array(
				'name' => 'Title',
				'id' => 'featured-image-title',
				'type' => 'text',
			),
			array(
				'name' => 'Caption',
				'id' => 'featured-image-caption',
				'type' => 'textarea',
			),
			array(
				'name' => 'Link Text',
				'id' => 'featured-image-link-text',
				'type' => 'text',
			),
			array(
				'name' => 'Link URL',
				'id' => 'featured-image-link-url',
				'type' => 'text',
				'desc' => 'include "http://"',
			),
			array(
				'name' => 'Image(s)',
				'id' => 'featured-image-images',
				'type' => 'relationship',
				'post_type' => 'attachment',
			),
			
		)
	));
}


?>