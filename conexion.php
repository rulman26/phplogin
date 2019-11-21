<?php
/**
 * Rulman Ferro
 */
header('Access-Control-Allow-Origin: *');  
error_reporting(E_ALL);
ini_set('display_errors', 1);
date_default_timezone_set('America/Lima');
class baseDatos 
{
	
	private static $cont  = null;
	public function __construct() {
		exit('FUncion Inicio No permitida');
	}	
	public static function conectar()
	{
	   // One connection through whole application
       if ( null == self::$cont )
       {      
	        try 
	        {
				  self::$cont = new PDO("mysql:dbname=demo;host=localhost;port=3306;charset=utf8mb4","demo","94312426");
				  //self::$cont= mysqli_connect("localhost","demo","94312426","demo");
	        }
	        catch(PDOException $e) 
	        {
	          die($e->getMessage());  
	        }
       }  
       return self::$cont;
	}
	public static function desconectar()
	{
		self::$cont = null;
	}
	
}
  
?>