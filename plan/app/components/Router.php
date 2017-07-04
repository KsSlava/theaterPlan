<?php 


/**
* 789
*/
class Router 
{

    private $routes; 

    function __construct() {

    	$this->routes = include(ROOT.'/app/config/Routes.php');
    }



   	private function getURL()
   	{

		if(!empty($_SERVER['REQUEST_URI'])) {

			return trim($_SERVER['REQUEST_URI'], '/');

		}        

   	}


   	public function run() 
   	{

 	 	foreach ($this->routes as $url => $ControllerAction) {
 	 		
 	 		if(preg_match('~'.$url.'~', $this->getURL()))
 	 		{
 	 			$segments = explode('/', $ControllerAction);

 	 			$controllerName  = $segments[0];

 	 			 $controllerName.'Controller.php'; 
 	 			 $actionName 
 	 		}

 	 	}

 	 	; 
   	}




	
}




?>
