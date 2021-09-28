<?php 

namespace App\Model;

use Lib\Database\Connection as Connection;

class Product
{
	private $id;
	private $name;
	private $price;
	private $category;

	public function readAll()
	{
		$conn = Connection::getConn();

		$sql = "SELECT p.id, p.nome, p.preco, c.titulo FROM produto AS p JOIN categoria AS c ON p.categoria_id = c.id ORDER BY p.nome ASC ";

		$stmt = $conn->prepare($sql);
		$stmt->execute();

		$result = array();

		while($row = $stmt->fetchObject())
		{
			$result[] = $row;
		}

		if($stmt->rowCount())
		{
			return $result;
		}

		throw new \Exception("Nenhum registro encontrado no banco de dados");
	}

	public function readOne()
	{
		$conn = Connection::getConn();

		$sql = "SELECT * FROM produto WHERE id = :id";

		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":id", $this->id);
		$stmt->execute();

		if($stmt->rowCount())
		{
			$result = $stmt->fetch();

			return $result;
		}

		throw new \Exception("Produto não encontrado na base de dados");		
	}

	public function create()
	{
		$conn = Connection::getConn();

		$sql = "INSERT INTO produto (categoria_id, nome, preco) VALUES (:categoria_id, :name, :price)";

		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":categoria_id", $this->category);
		$stmt->bindValue(":name", $this->name);
		$stmt->bindValue(":price", $this->price);
		
		if($stmt->execute())
		{
			return true;
		} 

		throw new \Exception("Não foi possível cadastrar o produto");
	}

	public function update()
	{
		$conn = Connection::getConn();

		$sql = "UPDATE produto SET categoria_id = :categoria_id, nome = :name, preco = :price WHERE id = :id";

		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":id", $this->id);
		$stmt->bindValue(":categoria_id", $this->category);
		$stmt->bindValue(":name", $this->name);
		$stmt->bindValue(":price", $this->price);
		$res = $stmt->execute();

		if($stmt->rowCount())
		{
			return true;
		}

		throw new \Exception("Não foi possível cadastrar o produto");
	}

	public function delete()
	{
		$conn = Connection::getConn();

		$sql = "DELETE FROM produto WHERE id = :id";

		$stmt = $conn->prepare($sql);	
		$stmt->bindValue(":id", $this->id);
		$stmt->execute();

		if($stmt->rowCount())
		{
			return true;
		}

		throw new \Exception("Não foi possível deletar o produto.");
	}


	// Setters
	public function setId($id)
	{
		$this->id = $id;
	}

	public function setName($name)
	{	
		$this->name = $name;
	}

	public function setPrice($price)
	{
		$this->price = $price;
	}

	public function setCategory($category)
	{
		$this->category = $category;
	}
}