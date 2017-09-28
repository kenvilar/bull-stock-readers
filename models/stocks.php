<?php

class StocksModel extends Model {
	public function Index() {
		$this->query( 'SELECT * FROM stocks ORDER BY title ASC ' );
		$rows = $this->resultSet();
		
		return $rows;
	}
}
