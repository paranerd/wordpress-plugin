<?php

/**
* Plugin Name: Test plugin
* Plugin URI: https://example.com
* Description: Some very useful stuff
* Version: 0.0.1
* Author: paranerd
* Author URI: https://example.com
* License: GPL2
*/

add_action( 'wp_footer', 'my_function' );

function my_function() {
  echo 'hello world';
}

?>
