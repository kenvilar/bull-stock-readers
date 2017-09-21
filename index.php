<?php

session_start();

// TODO create config

// Classes
require 'classes/Bootstrap.php';
require 'classes/Controller.php';

// Controllers
require 'controllers/home.php';

$bootstrap = new Bootstrap( $_GET );
// TODO instantiate controller class
