<?php

namespace App\Controller;

use App\Model\Product as Product;

class HomeController
{
	public function index()
	{
		try 
		{
			$product = new Product;

			$data_product = $product->readAll();
			
			$products = array();
			$products["products"] = $data_product;

			TwigController::render("home.html", $products);

		} catch(\Exception $error)
		{
			echo $error->getMessage();

			header("Location: http://localhost/crud_php/product/insert");
		}
	}
}

