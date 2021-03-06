<?php
/** Main View **/
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bull Stock Readers</title>
	<link rel="shortcut icon" type="image/png" href="<?php echo ROOT_PATH; ?>favicon.png"/>
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/styles.css">
</head>
<body>

<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
			        aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo ROOT_URL; ?>">Bull Stock Readers</a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo ROOT_URL; ?>">Home</a></li>
				<?php if ( isset( $_SESSION['is_logged_in'] ) ) : ?>
					<li><a href="<?php echo ROOT_URL; ?>stocks">Stocks</a></li>
				<?php endif; ?>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<?php if ( isset( $_SESSION['is_logged_in'] ) ) : ?>
					<li>
						<a href="<?php echo ROOT_URL; ?>">Welcome, <?php echo $_SESSION['user_data']['firstname'] . ' ' . $_SESSION['user_data']['lastname'] ?></a>
					</li>
					<li><a href="<?php echo ROOT_URL ?>user/logout">Logout</a></li>
				<?php else : ?>
					<li><a href="<?php echo ROOT_URL; ?>user/login">Login</a></li>
					<li><a href="<?php echo ROOT_URL; ?>user/register">Register</a></li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</nav>

<div class="container">
	<div class="row">
		<?php MessageAlerts::display(); ?>
		<?php require $view; ?>
	</div>
</div>

<script src="<?php echo ROOT_PATH; ?>vendor/twbs/bootstrap/docs/assets/js/vendor/jquery.min.js"></script>
<script src="<?php echo ROOT_PATH; ?>vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo ROOT_PATH; ?>assets/js/global.js"></script>

</body>
</html>
