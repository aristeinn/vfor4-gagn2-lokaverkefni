<?php 
class Connection {
	public static function make()
	{
		try {
			return new PDO(
				'mysql:host=127.0.0.1;dbname=lokaverkefni',
				'root',
				'',
				array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
			);
		} catch(PDOException $e) {
			die('Whoops something went wrong');
		}
	}
}