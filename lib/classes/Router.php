<?php

class Router{

	private $defaultPage = 'home';

	public function get(){
		if(isset($_GET['p'])) {
			$page = $_GET['p'];
		} else {
			$page = $this->defaultPage;
		}
		require BASE . 'views/'.$page.'.php';
	}
}