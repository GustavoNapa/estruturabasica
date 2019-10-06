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

		public function site()
		{
			$this->render('site', 'layoutPage');
		}

		public function alerta()
		{
			$this->render('alerta', 'layoutPage');
		}
	}
?>