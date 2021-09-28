<?php

namespace App\Controller;

use App\Model\Product as Product;

class ProductController
{
	public function index()
	{
		TwigController::render("cad_product.html", []);
	}

	public function insert()
	{
		try 
		{
			$product = new Product;		
			$product->setName($_POST["name"]);
			$product->setPrice($_POST["price"]);
			$product->setCategory($_POST["category"]);

			$product->create();

			header("Location: http://localhost/crud_php/home/index");
			
		} catch(\Exception $error)
		{
			echo $error->getMessage();
			header("Location: http://localhost/crud_php/product/index");
		}
	}

	public function change()
	{
		try
		{
			$url_id =  explode("/", $_GET["url"]);

			$product = new Product;
			$product->setId(end($url_id));

			$data_product = $product->readOne();

			$params = array();
			$params["id"] = $data_product["id"];
			$params["name"] = $data_product["nome"];
			$params["price"] = $data_product["preco"];
			$params["category"] = $data_product["categoria_id"];

			TwigController::render("update.html", $params);
		} catch(\Exception $error)
		{
			echo $error->getMessage();
			header("Location: http://localhost/crud_php/product/insert");
		}
	}

	public function edit()
	{
		try
		{
			$product = new Product;
			
			$product->setId($_POST["id"]);
			$product->setName($_POST["name"]);
			$product->setPrice($_POST["price"]);
			$product->setCategory($_POST["category"]);

			$product->update();

			header("Location: http://localhost/crud_php/");
		} catch(\Exception $error)
		{
			echo $error->getMessage();

			header("Location: http://localhost/crud_php/");
		}
	}

	public function remove()
	{
		try
		{
			$url_id = explode("/", $_GET["url"]);

			$product = new Product;
			$product->setId(end($url_id));
			$product->delete();

			header("Location: http://localhost/crud_php/");

		} catch(\Exception $error)
		{
			echo $error->getMessage();
		}
	}
}

