<?php

class UserModel extends Model {
	public function register() {
		$post = filter_input_array( INPUT_POST, FILTER_SANITIZE_STRING );
		
		$options       = array( 'cost' => 11, );
		$password_hash = password_hash( $post['password'], PASSWORD_BCRYPT, $options );
		
		$firstname = htmlspecialchars( trim( $post['firstname'] ) );
		$lastname  = htmlspecialchars( trim( $post['lastname'] ) );
		$email     = htmlspecialchars( trim( $post['email'] ) );
		
		if ( $post['submit'] ) {
			if ( $firstname == "" || $lastname == "" || $email == "" || $post['password'] == "" ) :
				MessageAlerts::setMsg( 'Please fill in all the fields!', 'error' );
			elseif ( $post['password'] !== $post['password2'] ) :
				MessageAlerts::setMsg( 'Passwords do not match', 'error' );
			else :
				$this->query( 'INSERT INTO users ( firstname, lastname, email, password ) VALUES ( :firstname, :lastname, :email, :password )' );
				$this->bind( ':firstname', $firstname );
				$this->bind( ':lastname', $lastname );
				$this->bind( ':email', $email );
				$this->bind( ':password', $password_hash );
				$this->execute();
				
				if ( $this->lastInsertId() ) :
					header( 'Location: ' . ROOT_URL . 'user/login' );
				endif;
			endif;
		}
		
		return;
	}
	
	public function login() {
		$post = filter_input_array( INPUT_POST, FILTER_SANITIZE_STRING );
		
		$email = htmlspecialchars( trim( $post['email'] ) );
		
		if ( $post['submit'] ) {
			$this->query( 'SELECT * FROM users WHERE email = :email LIMIT 1' );
			$this->bind( ':email', $email );
			
			$user_exist = $this->single();
			
			if ( $email == "" || $post['password'] == "" ) {
				MessageAlerts::setMsg( 'Please fill in all the fields!', 'error' );
			} else {
				if ( count( $user_exist ) > 0 && password_verify( $post['password'], $user_exist['password'] ) ) {
					$_SESSION['is_logged_in'] = true;
					$_SESSION['user_data']    = array(
						'id'        => $user_exist['id'],
						'firstname' => $user_exist['firstname'],
						'lastname'  => $user_exist['lastname'],
						'email'     => $user_exist['email'],
					);
					header( 'Location: ' . ROOT_URL . 'stocks' );
				} elseif ( ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
					MessageAlerts::setMsg( 'Invalid email format!', 'error' );
				} else {
					MessageAlerts::setMsg( 'Incorrect email or password', 'error' );
				}
			}
		}
		
		return;
	}
}
