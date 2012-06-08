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
                           $STH = $this -> DBH -> query( 'SELECT vorname, name FROM kunde' );
                           return $STH;
                   }

                   public function insertNewClient()
                   {
                           $STH = $this -> DBH -> query( 'SELECT vorname, name FROM kunde' );
                           $STH1 = $this -> DBH -> query('SELECT * FROM anrede');
                           $result = array( 'kunde' => $STH, 
											'anrede' => $STH1 );
                           return $result;
                   }

         
        }
?>