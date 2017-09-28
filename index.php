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
require 'controllers/user.php';
require 'controllers/stocks.php';

// Models
require 'models/home.php';
require 'models/user.php';
require 'models/stocks.php';

$bootstrap  = new Bootstrap( $_GET );
$controller = $bootstrap->createController();
if ( $controller ) {
	$controller->executeAction();
}
