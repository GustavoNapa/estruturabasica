<?php 
	namespace App;

	use MF\Init\Bootstrap;

	/**
	 * 
	 */
	class Route extends Bootstrap
	{	
		protected function initRoutes()
		{
			$routes['home'] = array(
				'route' => '/',
				'controller' => 'indexController',
				'action' => 'index'
			);

			$routes['sobre_nos'] = array(
				'route' => '/sobre_nos',
				'controller' => 'indexController',
				'action' => 'sobreNos'
			);

			$routes['site'] = array(
				'route' => '/site',
				'controller' => 'indexController',
				'action' => 'site'
			);

			$this->setRoutes($routes);
		}
	}
?>