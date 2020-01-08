<?php 
class Route
{
	private static $routes = [];
	public static $page_matched;
	public static function set($route, $function){
		self::$routes[]=$route;
		self::$page_matched = false;

		if(isset($_GET['method']) and $_GET['url'].'/'.$_GET['method']===$route){
			self::$page_matched = true;
			$function->__invoke();
			exit;
		}elseif($_GET['url']===$route){
			self::$page_matched = true;
			$function->__invoke();
			exit;
		}

	}
}
 ?>