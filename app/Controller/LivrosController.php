<?php
class LivrosController extends AppController {


	public function view($url){
		$this->loadModel('generos');
		$generos = $this->generos->find('all');
		$this->set('generos', $generos);
	}
}