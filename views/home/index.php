<?php
/** Home Page **/
?>

<div class="text-center">
	<h1>Welcome To Bull Stock Readers</h1>
	<?php if ( isset( $_SESSION['is_logged_in'] ) ) : ?>
		<a class="btn btn-primary text-center" href="<?php echo ROOT_PATH; ?>stocks">List of Stocks</a>
	<?php else : ?>
		<div class="container">
			<div class="row">
				<div class="col-md-6 jumbotron">
					<h2>What is Bull Stock Readers?</h2>
					<p>A <span class="bullstockreader-type-animation" bull-stock-reader-text-animation-interval="2000"
					           bull-stock-reader-text-animation='[  "simple", "pure", "fun" ]'></span> stock market
						news, analysis and blog sharing web app for traders and investors.</p>
				</div>

				<div class="col-md-6 text-center">
					<h2>Philippine Stock Market</h2>
					<div class="good_days_chart">
						<div class="home-right-column home-right-column-bg-img">
							<p class="invisible"></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
</div>
