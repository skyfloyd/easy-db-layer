<?php
class TestTable implements DatabaseTables {
	private static $tableName  = "test";
	private static $fields = array(
								"app_field_1" => "db_field_1",
								"app_field_2" => "db_field_2",
								"app_field_3" => "db_field_3"
							 );
	

	
	public static function getTableName(){
		return self::$tableName;
	}
	
	public static function getTableFields(){
		return self::$fields;
	}
	
	public static function getAllFields(){
		$db = new DBconnection();
		
		$result = $db->select( self::getTableName(), self::getTableFields() );
	
		return $result;
	}
	
	/*
	 * your functions here
	 */
}