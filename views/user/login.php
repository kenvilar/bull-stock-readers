<?php
/** Login Page **/

if ( ! isset( $_SESSION['is_logged_in'] ) ) : ?>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">User Login</h3>
		</div>
		<div class="panel-body">
			<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" name="email" id="email" class="form-control"/>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control"/>
				</div>
				<input class="btn btn-primary btn-lg" type="submit" name="submit" value="Log in">
			</form>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<p>If you don't have an account you can <a href="<?php echo ROOT_URL; ?>user/register">sign up</a> for one
				now.</p>
		</div>
	</div>

<?php else :
	header( 'Location: ' . ROOT_URL );
endif;
