<?php

class MessageAlert {
	public function setMsg( $text, $type ) {
		if ( $_SESSION['error'] == 'error' ) {
			$_SESSION['errorMsg'] == $text;
		} else {
			$_SESSION['successMsg'] == $text;
		}
	}
	
	public function display() {
		if ( isset( $_SESSION['errorMsg'] ) ) {
			echo '<div class="alert alert-danger">' . $_SESSION['errorMsg'] . '</div>';
		} else {
			echo '<div class="alert alert-success">' . $_SESSION['successMsg'] . '</div>';
		}
	}
}