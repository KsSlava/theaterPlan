<?php 


Class Db
{

	public static function getConnection()
	{

		$params= require_once (ROOT.'/app/config/Db_params.php');
		
		$dsn = 'mysql:host='.$params['host'].';dbname='.$params['name'];

       	$db = new PDO($dsn, $params['user'], $params['pass']);

		return $db;

	}
}








    



?>
