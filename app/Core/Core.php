<?php 

namespace App\Core;

class Core
{	
	private $url;
	private $controller = "App\\Controller\\HomeController";
	private $method = "index";
	private $params;
	
	public function start($request)
	{
		if(isset($request["url"]))
		{
			$this->url = explode("/", $request["url"]);

			$controller_1 = ucfirst($this->url[0]);

			$this->controller = "App\\Controller\\{$controller_1}Controller";
			array_shift($this->url);

			$this->method = $this->url[0];
			array_shift($this->url);

			$this->params = $this->url[0];	
		}

		call_user_func(array(new $this->controller, $this->method), $params);
	}
}

