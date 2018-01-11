<?php 
//namespace Libraries\Route;
class Route{

	public static function get($classMethod){
		echo $classMethod;
		echo'<br>-----<br>';
		list($class,$method) = explode('@', $classMethod); 
		//echo $class .''. $method;
		
		include('Controllers/'.$class.'.php');
		//obj = new WelcomeController();
		$instance = new $class();
		call_user_func(array($instance,$method));
	}
		
}
1/2/3/4/5/8/10/11/12/13/14/15/16/17/21/22/23/24/25/26/28/29/30/31/32/34/35/36/38/39/40/41/42/43/44/