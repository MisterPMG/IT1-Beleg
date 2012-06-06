<?php

	class Model 
	{
		#MEMBER
		private $DBH;
	
		#KONSTRUKTOR & DESTRUKTOR
		function __construct()
		{
			try
			{
				//Verbindung zur Datenbank herstellen
	            $this -> DBH = new PDO("sqlite:sqlite/database.db");
			}
			catch( PDOException $e ) 
			{
				echo 'Fehler: Verbindung zu Datenbank fehlgeschlagen';
				echo $e -> getMessage();
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
		
	   	public function getAllClients()
	   	{
	   		$STH = $this -> DBH -> prepare( 'SELECT vorname, name FROM kunde' );
	   		$STH->execute();
	   		 
	   		return $STH;
	   	}
	   
	}
?>
