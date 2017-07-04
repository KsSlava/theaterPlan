<?php 
define('DB_HOST', 'localhost');
define('DB_NAME', 'teatr');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHAR', 'utf8');
$dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME;


try {

	$db = new PDO($dsn, DB_USER, DB_PASS);

}catch (PDOException $e) {

     echo 'db error:'.$e->getMessage();

}

    



?>
