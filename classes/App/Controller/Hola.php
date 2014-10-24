<?php
namespace App\Controller;

class Hola extends \App\Page {

	public function action_index() {
	
		//Show a list of fairies
		$this->view->subview = 'hola';
		
	}
	
}