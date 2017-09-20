<?php

class Bootstrap {
	private $controller;
	private $action;
	private $request;
	
	public function __construct( $request ) {
		$this->request = $request;
		
		if ( $this->request['controller'] == "" ) {
			//TODO
		} else {
			//TODO
		}
		
		if ( $this->request['action'] == "" ) {
			//TODO
		} else {
			//TODO
		}
	}
}