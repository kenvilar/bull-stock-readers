<?php
/** Home Page **/
?>

<div class="text-center">
	<h1>Welcome To Bull Stock Reader</h1>
	<?php if ( isset( $_SESSION['is_logged_in'] ) ) : ?>
		<a class="btn btn-primary text-center" href="<?php echo ROOT_PATH; ?>stocks">List of Stocks</a>
	<?php endif; ?>
</div>
