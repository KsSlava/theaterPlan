<?php 

include_once (ROOT.'/app/models/Plan.php');


class PlanController{


	public static function View($id)
	{

	    
          
           $r = Plan::ViewPlanById($id);
           return  $r;
	}



}


?>