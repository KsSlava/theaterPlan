<?php 


/**
* 
*/
class Router 
{

   	private  function getURL()
   	{

		if(!empty($_SERVER['REQUEST_URI'])) {

			return trim($_SERVER['REQUEST_URI'], '/');

		}        

   	}


	
}




?>
