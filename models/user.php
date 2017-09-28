<?php

class UserModel extends Model {
	protected function register() {
		$post = filter_input_array( INPUT_POST, FILTER_SANITIZE_STRING );
		
		$password = md5( $post['password'] );
		
		if ( $post['submit'] ) {
			if ( $post['name'] == "" || $post['email'] == "" || $post['password'] == "" ) {
				MessageAlerts::setMsg( 'Please fill in all the fields!', 'error' );
			}
			$this->query( 'INSERT INTO users ( name, email, password ) VALUES ( :name, :email, :password )' );
			$this->bind( ':name', $post['name'] );
			$this->bind( ':email', $post['email'] );
			$this->bind( ':password', $password );
			$this->execute();
		}
		
		return;
	}
	
	public function login() {
		$post = filter_input_array( '', '' );
		
		$password = md5( $post['password'] );
		
		if ( $post['submit'] ) {
			$this->query( 'SELECT * FROM users WHERE email = :email AND password = :password' );
			$this->bind( ':email', $post['email'] );
			$this->bind( ':password', $password );
			
			$user_exist = $this->single();
			
			if ( $user_exist ) {
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data']    = array(
					'id'    => $user_exist['id'],
					'name'  => $user_exist['name'],
					'email' => $user_exist['email'],
				);
				header( 'Location: ' . ROOT_URL . 'stocks' );
			} else {
				MessageAlerts::setMsg( 'Incorrect email or password', 'error' );
			}
		}
		
		return;
	}
}