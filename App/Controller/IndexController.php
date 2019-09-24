<?php 
	namespace App\Controller;

	use MF\Controller\Action;

	/**
	 * 
	 */
	class IndexController extends Action
	{	
		public function index()
		{	
			$this->view->dados = array("sofa", "cama", "cadeira");
			$this->render('index', 'layoutPage');
		}

		public function sobreNos()
		{
			$this->view->dados = array("Redmi 7", "A10", "G10");
			$this->render('sobreNos', 'layoutPage');
		}
	}
?>