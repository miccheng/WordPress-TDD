<?php
// Load WordPress test environment
// https://github.com/nb/wordpress-tests
//
// The path to wordpress-tests
// eg. $path = '/var/www/wordpress-tests/bootstrap.php';
$path = dirname(__FILE__) . '/../../../../../wordpress-tests/bootstrap.php';

if( file_exists( $path ) ) {
    require_once $path;
} else {
    exit( "Couldn't find path to wordpress-tests/bootstrap.php\n" );
}