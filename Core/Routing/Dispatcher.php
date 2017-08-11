<?php
namespace Core\Routing;

use Core\Exception\UnknownControllerException;

class Dispatcher {

	private $request;


	public function __construct() {
		$this->request = new Request();
		Router::parse($this->request->url, $this->request);

		// On appele le Controller qui gère cette page
		$controller = $this->loadController();
		$action     = $this->request->action;

		$controller->$action($this->request->params);
	}


	private function loadController() {
	    $ctrl = ucfirst($this->request->controller);
		$name = "\App\Controller\\{$ctrl}Controller";

		// Si le controller n'existe pas, on lance une erreur
		if (!file_exists(ROOT . str_replace('\\', DS, $name) . '.php'))
		    throw new UnknownControllerException(["Controller" => $ctrl]);

		return new $name();
	}

}
?>