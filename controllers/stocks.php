<?php

class Stocks extends Controller {
	protected function Index() {
		$viewmodel = new StocksModel();
		$this->returnView( $viewmodel->Index(), true );
	}
}