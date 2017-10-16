<?php
/**
 * WP Google Cloud Vision API
 *
 * @link https://cloud.google.com/vision/docs/reference/rest/
 * @package WP-API-Libraries\WP-Cloud-Vision-API
 */
/*
* Plugin Name: WP Google Cloud Vision API
* Plugin URI: https://github.com/wp-api-libraries/wp-google-vision-api
* Description: Perform API requests to Google Cloud Vision in WordPress.
* Author: WP API Libraries
* Version: 1.0.2
* Author URI: https://wp-api-libraries.com
* GitHub Plugin URI: https://github.com/wp-api-libraries/wp-google-vision-api
* GitHub Branch: master
*/
/* Exit if accessed directly. */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/* Check if class exists. */
if ( ! class_exists( 'GoogleCloudVisionAPI' ) ) {
	
	/**
	 * GoogleCloudComputeEngineAPI Class.
	 */
	class GoogleCloudComputeEngineAPI {
		
		/**
		 * BaseAPI Endpoint
		 *
		 * @var string
		 * @access protected
		 */
		protected $base_uri = 'https://vision.googleapis.com';
		
		public function discovery() {
			// $discovery/rest?version=v1
		}
		
		
		/**
		 * annotate_image function.
		 * 
		 * @docs https://cloud.google.com/vision/docs/reference/rest/v1/images/annotate
		 * @access public
		 * @return void
		 */
		public function annotate_image() {
			
		}
		

	}
	
}