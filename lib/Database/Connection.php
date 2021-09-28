<?php

namespace Lib\Database;

abstract class Connection
{
	private static $conn;

	public static function getConn()
	{
		try 
		{
			if(!isset(self::$conn))
			{
				self::$conn = new \PDO("mysql: host=localhost; dbname=shop; charset=utf8;", "root", "");
			}
				
			return self::$conn;
		} catch(\PDOException $error)
		{
			return $error->getMessage();
		}
	}
}


