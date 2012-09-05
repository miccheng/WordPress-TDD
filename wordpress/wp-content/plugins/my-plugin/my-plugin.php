<?php if ( ! defined( 'ABSPATH' ) ) exit;
/*
Plugin Name: My Plugin
Description: Example using <a href="https://github.com/nb/wordpress-tests">WordPress Tests</a> in your plugin.
Author: ampt
Version: 0.0.1
*/

if ( ! class_exists( 'My_Plugin' ) ) :

class My_Plugin {
    /**
     * Setup our filters
     *
     * @return void
     */
    public function __construct() {
        add_filter( 'the_content', array( $this, 'append_content' ) );
    }

    /**
     * Appends "Hello WordPress Unit Tests" to the content of every post
     *
     * @param string $content
     * @return string
     */
    public function append_content( $content ) {
        return $content . "<p>Hello WordPress Unit Tests</p>";
    }
}

$GLOBALS['my_plugin'] = new My_Plugin();

endif;