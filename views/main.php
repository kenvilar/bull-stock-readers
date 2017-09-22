<?php
/** Main View **/
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bull Stock Readers</title>
	<!--<link rel="stylesheet" href="<?php /*echo ROOT_PATH; */ ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css">-->
	<link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/styles.css">
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
			<a class="navbar-brand" href="#">Bull Stock Readers</a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li><a href="">Home</a></li>
				<li><a href="">Stocks</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="">Welcome, {your_name}!</a></li>
				<li><a href="">Logout</a></li>
				<li><a href="">Login</a></li>
				<li><a href="">Register</a></li>
			</ul>
		</div>
	</div>
</nav>

<script src="../vendor/twbs/bootstrap/docs/assets/js/vendor/jquery.min.js"></script>
<script src="../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
