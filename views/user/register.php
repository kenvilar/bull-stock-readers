<?php
/** Registration Page **/
?>

<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Register User</h3>
	</div>
	<div class="panel-body">
		<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label for="firstname">First name</label>
				<input type="text" name="firstname" id="firstname" class="form-control"/>
			</div>
			<div class="form-group">
				<label for="lastname">Last name</label>
				<input type="text" name="lastname" id="lastname" class="form-control"/>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" name="email" id="email" class="form-control"/>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control"/>
			</div>
			<div class="form-group">
				<label for="password2">Confirm Password</label>
				<input type="password" name="password2" id="password2" class="form-control"/>
			</div>
			<input class="btn btn-primary" name="submit" type="submit" value="Submit"/>
		</form>
	</div>
</div>
