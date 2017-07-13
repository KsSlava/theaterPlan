<?php 

include_once (ROOT.'/app/models/Plan.php');


class PlanController{


	public static function View($id)
	{
	             
           $result = Plan::ViewPlanById($id);
           
           return  $result;
	}



	public static function ViewList()
	{
	             
           $result = Plan::ViewPlanList();
           
           return  $result;
	}










}


?>