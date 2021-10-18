<?php
/**
 * Plugin Name: Shortcode Plugin
 * Plugin URI: https://www.example.com
 * Description: Display content using a shortcode to insert in a page or post
 * Version: 0.1
 * Text Domain: my-plugin-demo
 * Author: jamsheed
 * Author URI: https://www.example.com
 */
if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly
    }
if( ! class_exists( 'ShortcodePlugin' ) ) {
	class ShortcodePlugin {

		public function __construct()
		{
			add_shortcode('plugin-demo', array($this, 'custom_plugin'));
		}	
		public function custom_plugin($attr)
		{
			 $args = shortcode_atts( array(
	     
	            'color' => '#F0F'
	 
	        ), $attr );		
			$Content = '<marquee onMouseOver="this.stop()" onMouseOut="this.start()"><h3 style="color:'.$args['color'].';">This header is work by using a custom plugin with user given color!</h3></marquee>';
			 
		    return $Content;
		}
	}
	$pluginobject = new ShortcodePlugin();
}
else {
	exit();
}
?>