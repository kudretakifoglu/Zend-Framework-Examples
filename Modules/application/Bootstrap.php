<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	protected function _initPluginsAndModules()
	{
		$this->bootstrap('modules');
		$frontController = $this->getResource('frontcontroller');
		$frontController->registerPlugin(new Zend_Controller_Plugin_ErrorHandler(
			array(
				'module' => 'web',
				'controller' => 'error',
				'action' => 'error'
		)));
		
		$frontController->setDefaultModule('web');
		$frontController->setBaseUrl(BASE_URL);
	}
}
