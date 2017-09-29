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
	
	public function createController() {
		if ( class_exists( $this->controller ) ) {
			$parent_class = class_parents( $this->controller );
			if ( in_array( 'Controller', $parent_class ) ) {
				if ( method_exists( $this->controller, $this->action ) ) {
					return new $this->controller( $this->action, $this->request );
				} else {
					echo '<p>Method does not exist.</p>';
					header( 'Location: ' . ROOT_URL );
					
					return;
				}
			} else {
				echo '<p>Base class does not exist.</p>';
				header( 'Location: ' . ROOT_URL );
				
				return;
			}
		} else {
			echo '<p>Controller class does not exist.</p>';
			header( 'Location: ' . ROOT_URL );
			
			return;
		}
	}
}
