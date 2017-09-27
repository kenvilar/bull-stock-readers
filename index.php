<?php

session_start();

// Config
require 'config.php';

// Classes
require 'classes/Bootstrap.php';
require 'classes/MessageAlerts.php';
require 'classes/Controller.php';
require 'classes/Model.php';

// Controllers
require 'controllers/home.php';

// Models
require 'models/home.php';

$bootstrap  = new Bootstrap( $_GET );
$controller = $bootstrap->createController();
if ( $controller ) {
	$controller->executeAction();
}
