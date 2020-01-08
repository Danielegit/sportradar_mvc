<?php 
/**
 * 
 */
class Team extends Controller
{
	public static $team;
	public static function showTeams($category){

		$table = 'team';
		$fields = ' team.name as team, team.id as id, category.id as cat_id ';
		$join = ' JOIN category ON team._CATEGORY = category.id ';
		$where = " where category_name = '$category'";			
		self::$team = self::read($table,$join,$fields,$where);
		return self::$team;
	}
	public static function save(){

		if(isset($_POST)){
			$category = $_POST['category'];
			$team_name = $_POST['team_name'];
			$table = 'team';
			$columns = 'name, _CATEGORY';
			$push = "'$team_name',$category";
			$result = self::create($table, $columns, $push);
			if($result == true){
				echo '<script>newteam("'.$team_name.'");</script>';
			}else{
				echo '<script>error();</script>';
			}
		}

	}


}



?>