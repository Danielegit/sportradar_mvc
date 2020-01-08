<?php 
/**
 * 
 */
class Event extends Controller
{
	public static $events= [];
	public static $oneEvent;

	public static function showAll($where = ''){

		$table = 'game';
		$fields = 'game.id as id, t1.name as team1 ,t2.name as team2,';
		$fields .= 'event_date as date,category_name as category';
		$join = ' JOIN category ON game._CATEGORY = category.id ';
		$join .= ' JOIN team as t1 ON game._TEAM_ONE = t1.id ';
		$join .=' JOIN team as t2 ON game._TEAM_TWO = t2.id ';		 			
		self::$events = self::read($table,$join,$fields,$where);
		return self::$events;
	}
	public static function showOne($id){
		$table = 'game';
		$fields = 'game.id as id, t1.name as team1 ,t2.name as team2,';
		$fields .= 'event_date as date,category_name as category';
		$join = ' JOIN category ON game._CATEGORY = category.id ';
		$join .= ' JOIN team as t1 ON game._TEAM_ONE = t1.id ';
		$join .=' JOIN team as t2 ON game._TEAM_TWO = t2.id ';
		$where = ' where game.id = '.$id;
		self::$oneEvent = self::readOne($table, $join, $fields, $where);	
		return self::$oneEvent;
	}
	public static function filter($condition){
		$where = " where category_name = '$condition'";
		self::$events = self::showAll($where);
		return self::$events;
	}
	public static function save(){

		if(isset($_POST)){
			$teamOne = $_POST['teamOne'];
			$teamTwo = $_POST['teamTwo'];
			$category = $_POST['category'];
			$date = $_POST['date'];
			$table = 'game';
			$columns = '_TEAM_ONE, _TEAM_TWO, event_date, _CATEGORY';
			$push = " $teamOne, $teamTwo, '$date', $category ";
			$result = self::create($table, $columns, $push);
			if($result == true){
				echo '<script>newEvent();</script>';
			}else{
				echo '<script>error();</script>';
			}

		}

	}
}


?>