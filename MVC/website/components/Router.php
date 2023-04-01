<?php
class Router
{

	private $routes; // Array contain routers

	public function __construct()
	{
		$routesPath = ROOT . '/config/routes.php';
		$this->routes = include $routesPath;
	}

	private function getURI()
	{
		if (isset($_SERVER['REQUEST_URI'])) {
			$uri = $_SERVER['REQUEST_URI'];
			$uri = str_replace('/phpcourse/MVC/website/', "", $uri);
			return $uri;
		}
	}
	public function run()
	{
		// Nhan request

		$uri = $this->getURI();

		//Kiem tra co hay khong request do
		foreach ($this->routes as $uriPattern => $path) {
			if (preg_match("~{$uriPattern}~", $uri)) {
				//Neu co o trong routes thi xac dinh dau la controller, 
				//dau la action
				echo '<p>Tim theo request nguoi dung:<p>' . $uri;
				echo '<p>Tim theo khuon mau:<p>' . $uriPattern;
				echo '<p>Ai phu trach:<p>' . $path;

				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);
				echo '<h3>Can format:<h3>' . $internalRoute;

				$segments = explode("/", $internalRoute);
				$controllerName = array_shift($segments) . 'Controller';
				$controllerName = ucfirst($controllerName);
				$actionName = 'action' . ucfirst(array_shift($segments));
				$parameters = $segments;
				// print_r($segments);



				//Nhan file class Controller
				$pathFileController = ROOT . '/controllers/' . $controllerName . '.php';
				
				if (file_exists($pathFileController)) {
					include_once $pathFileController;
				}

				// Tao doi tuong, goi method (t.e action)
				$controllerObject = new $controllerName;
				$result = call_user_func_array(array($controllerObject,$actionName),$parameters);
				if ($result !== null) {
					break;
				}

				//get internalroutes

				// echo $internalRoute;
			}
		}
	}
}
