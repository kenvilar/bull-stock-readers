<?php

function my_autoload_register( $class ) {
	$classPath = str_replace( '\\', '/', $class );
	require_once __DIR__ . '/classes/' . $classPath . '.php';
}

spl_autoload_register( 'my_autoload_register' );
