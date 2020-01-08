<?php 
 /**
 * 
 */

class Core {

  private static $db_name = 'sport_events';
	private static $db_user = 'root';
	private static $db_pass = '';
	private static $db_host = 'localhost';
  private static $conn;

  private static function connection() {
		self::$conn = new mysqli( self::$db_host, self::$db_user, self::$db_pass, self::$db_name );
		if (self::$conn->connect_error) {
    		die("Connection failed: " .self::$conn->connect_error);
		}
	}
	protected static function read($table, $join='',  $fields='*',$where='' ){

		self::connection();
		$sql = "SELECT ".$fields." FROM ".$table." ".$join." ".$where." ;";
		$result = self::$conn->query($sql);
    self::$conn->close();
    if($result->num_rows == 0){
      $res = null;
    }else{
      $res = $result->fetch_all(MYSQLI_ASSOC);
    }
    return $res;
	}

	protected static function readOne($table, $join='', $fields='*',$where='' ){

		self::connection();
		$sql = "SELECT ".$fields." FROM ".$table." ".$join." ".$where." ;";
		$result = self::$conn->query($sql);	
    self::$conn->close();
    if($result->num_rows == 0){
       $res = null;
    }else{
      $res = $result->fetch_object();
    }
    return $res;
	}

  protected static function create($table, $columns, $push){
      self::connection();
      $query = 'INSERT INTO '.$table.'('.$columns.') VALUES ('.$push.')';
      if (self::$conn->query($query)) {
        $res = true;
      } else {
        $res = false;
      }
      self::$conn->close();
      return $res;
    }
}

?>