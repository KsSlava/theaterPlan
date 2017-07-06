<?php 


/**
* Router
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
 	 		
 	 		if(preg_match('~'.$url.'~', $this->getURL() ))
 	 		{

 	 			$internalRoute = preg_replace('~'.$url.'~', $ControllerAction, $this->getURL() );

 	 		    $segments = explode('/', $internalRoute);

 	 		    /**
				The first (0) segment unuse, becouse its a foldername of script.
 	 		    */
			    array_shift($segments);


                	$controllerName = ucfirst(array_shift($segments)).'Controller';
                	
		 		    $action     = ucfirst(array_shift($segments));

		 		    $params		= $segments;	

 		   		 	
					
						$controllerFile = ROOT.'/app/controllers/'.$controllerName.'.php'; 

						if(file_exists($controllerFile)) 
						{

							include_once($controllerFile);

							$controllerObj = new $controllerName;

							//$result = $controllerObj->$action($params);


				
							$result = call_user_func_array( array($controllerObj, $action), $params );

						}	

  							return $result; 

					

 	 		}

 	 	}
 	 	
   	}
	
}




?>
