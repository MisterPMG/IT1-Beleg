<?php

	class Model 
	{
		#MEMBER
		public $DBH;
	
		#KONSTRUKTOR & DESTRUKTOR
		function __construct()
		{
			try
			{
				//Verbindung zur Datenbank herstellen
	            $DBH = new PDO("sqlite:sqlite/database.db");
			}
			catch( PDOException $e ) 
			{
				
			}
		}
		
		function __destruct()
		{
			$DBH = null;
		}
		
		#METHODEN	
	   public function myMethod()
	   {
			
	   }
	}
?>
