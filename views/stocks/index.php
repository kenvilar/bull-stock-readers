<?php
/** Stocks Page **/

if ( isset( $_SESSION['is_logged_in'] ) ) : ?>

	<div class="container">
		<?php foreach ( $rows as $row ) : ?>
			<div class="well">
				<h3><?php echo $row['title']; ?></h3>
				<small><?php echo $row['create_date']; ?></small>
				<hr/>
				<p><?php echo $row['body']; ?></p>
			</div>
		<?php endforeach; ?>
	</div>

<?php endif;
