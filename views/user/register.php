<?php
/** Registration Page **/

if ( ! isset( $_SESSION['is_logged_in'] ) ) : ?>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Register User</h3>
		</div>
		<div class="panel-body">
			<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
				<div class="form-group">
					<label for="firstname">First name</label>
					<input type="text" name="firstname" id="firstname" class="form-control" aria-required="true"
					       required maxlength="50"/>
				</div>
				<div class="form-group">
					<label for="lastname">Last name</label>
					<input type="text" name="lastname" id="lastname" class="form-control" aria-required="true"
					       required maxlength="50"/>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" class="form-control" aria-required="true" required/>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control" aria-required="true"
					       required/>
				</div>
				<div class="form-group">
					<label for="password2">Confirm Password</label>
					<input type="password" name="password2" id="password2" class="form-control" aria-required="true"
					       required/>
				</div>
				<input class="btn btn-primary btn-lg" name="submit" type="submit" value="Register"/>
			</form>
		</div>
	</div>

<?php else :
	header( 'Location: ' . ROOT_URL );
endif;
