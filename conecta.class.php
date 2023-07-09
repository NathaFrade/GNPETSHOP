<?php
   class Conecta {
	   public static $conn;
	   public static function abrirConexao(){
		   if (!isset (self::$conn)){
			   self::$conn=new PDO('mysql:host=localhost;dbname=gnpetshop','root','',
							array (PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		   }
		   return self::$conn;
	   }   
   }
?>   