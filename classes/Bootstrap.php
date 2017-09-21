<?php

class Bootstrap {
	private $controller;
	private $action;
	private $request;
	
	public function __construct( $request ) {
		$this->request = $request;
		
		if ( $this->request['controller'] == "" ) {
			$this->controller = 'home';
		} else {
			$this->controller = $this->request['controller'];
		}
		
		if ( $this->request['action'] == "" ) {
			$this->action = 'index';
		} else {
			$this->action = $this->request['action'];
		}
	}
}