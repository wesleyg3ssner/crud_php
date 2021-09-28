<?php 

namespace App\Controller;

abstract class TwigController 
{
	public static function render(string $page, $params)
	{
		$loader = new \Twig\Loader\FilesystemLoader("app/View");
		$twig = new \Twig\Environment($loader);

		echo $twig->render($page, $params);
	}
}