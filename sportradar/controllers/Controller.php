<?php
include './models/Core.php';


class Controller extends Core
{
	

	public static function CreateView($view){

		require_once("views/".$view.".php");
	
	}
	
}

?>