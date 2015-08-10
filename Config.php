<?php
class Config {
	private static $dbHost = "localhost";
	private static $dbName = "test";
	private static $dbUser = "root";
	private static $dbPass = "";
	
	public static function getDBhost(){
		return self::$dbHost;
	}
	
	public static function getDBuser(){
		return self::$dbUser;
	}
	
	public static function getDBpass(){
		return self::$dbPass;
	}
	
	public static function getDBname(){
		return self::$dbName;
	}
	
}