<?php

class UserModel extends Model {
	public function register() {
		$post = filter_input_array( INPUT_POST, FILTER_SANITIZE_STRING );
		
		$options       = array( 'cost' => 11, );
		$password_hash = password_hash( $post['password'], PASSWORD_BCRYPT, $options );
		
		if ( $post['submit'] ) {
			if ( $post['name'] == "" || $post['email'] == "" || $post['password'] == "" ) :
				MessageAlerts::setMsg( 'Please fill in all the fields!', 'error' );
			endif;
			$this->query( 'INSERT INTO users ( firstname, lastname, email, password ) VALUES ( :firstname, :lastname, :email, :password )' );
			$this->bind( ':firstname', $post['firstname'] );
			$this->bind( ':lastname', $post['lastname'] );
			$this->bind( ':email', $post['email'] );
			$this->bind( ':password', $password_hash );
			$this->execute();
			
			if ( $this->lastInsertId() ) :
				header( 'Location: ' . ROOT_URL . 'users/login' );
			endif;
		}
		
		return;
	}
	
	public function login() {
		$post = filter_input_array( INPUT_POST, FILTER_SANITIZE_STRING );
		
		$options       = array( 'cost' => 11, );
		$password_hash = password_hash( $post['password'], PASSWORD_BCRYPT, $options );
		
		if ( $post['submit'] ) {
			$this->query( 'SELECT * FROM users WHERE email = :email AND password = :password' );
			$this->bind( ':email', $post['email'] );
			$this->bind( ':password', $password_hash );
			
			$user_exist = $this->single();
			
			if ( $user_exist && password_verify( $post['password'], $password_hash ) ) {
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data']    = array(
					'id'        => $user_exist['id'],
					'firstname' => $user_exist['firstname'],
					'lastname'  => $user_exist['lastname'],
					'email'     => $user_exist['email'],
				);
				header( 'Location: ' . ROOT_URL . 'stocks' );
			} else {
				MessageAlerts::setMsg( 'Incorrect email or password', 'error' );
			}
		}
		
		return;
	}
}