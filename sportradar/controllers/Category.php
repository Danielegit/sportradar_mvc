<?php 
/**
 * 
 */
class Category extends Controller
{
	public static $categories;
	public static $category_id;

	public static function category_show(){
		$table = 'category';
		self::$categories = self::read($table);	
		return self::$categories;
	}
	public static function categoryId($cat){
		$table = 'category';
		$fields = ' category.id as id ';
		$where = " WHERE category_name ='$cat' " ;
		self::$category_id = self::readOne($table, $join='', $fields ,$where );
		return self::$category_id;
	}
}

 ?>