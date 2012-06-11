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
                                 $this -> DBH = new PDO("sqlite:sqlite/database.sqlite");
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
                
                	public function updateClient()
                	{
                		$anrede=$_POST['Anrede'];
	                   	$name=$_POST['Name'];
	                   	$vorname=$_POST['Vorname'];
	                   	$firma=$_POST['Firma'];
	                   	$adresse=$_POST['Adresse'];
	                   	$telefon=$_POST['Telefon'];
	                   	$mobil=$_POST['Mobil'];
	                   	$fax=$_POST['Fax'];
	                   	$email=$_POST['Email'];
	                   	$branche=$_POST['Branche'];
	                   	$homepage=$_POST['www'];
	                   	$position=$_POST['Position'];
	                   	$abteilung=$_POST['Abteilung'];
	                   	$zeitraum=$_POST['Zeitraum'];
	                   	$zusatz=$_POST['Zusatz'];
	                   	$id=$_GET['id'];
                		$STH=$this-> DBH -> query ("UPDATE kunde SET name='$name',vorname='$vorname',anrede=$anrede,firma='$firma',adresse='$adresse',telefon='$telefon',mobil='$mobil',fax='$fax',email='$email',branche=$branche,homepage='$homepage',position='$position',abteilung='$abteilung',zeitraum=$zeitraum,zusatz='$zusatz' WHERE kunde_id=$id");
                		return $STH;
                	}
                   
                   //einen kunden anzeigen
                   public function getClient()
                   {
                   		$id=$_GET['id'];
                   		$STH =$this -> DBH -> query ("SELECT * FROM kunde where kunde_id=$id");
                   		return $STH;
                   }
        		   
        		   //abrufen aller kundendaten
                   public function getAllClients()
                   {
                           $STH = $this -> DBH -> query( 'SELECT * FROM kunde' );
                           return $STH;
                   }

				   //anlegen eines kunden
                   public function insertNewClient()
                   {      
		                   	$anrede=$_POST['Anrede'];
		                   	$name=$_POST['Name'];
		                   	$vorname=$_POST['Vorname'];
		                   	$firma=$_POST['Firma'];
		                   	$adresse=$_POST['Adresse'];
		                   	$telefon=$_POST['Telefon'];
		                   	$mobil=$_POST['Mobil'];
		                   	$fax=$_POST['Fax'];
		                   	$email=$_POST['Email'];
		                   	$branche=$_POST['Branche'];
		                   	$homepage=$_POST['www'];
		                   	$position=$_POST['Position'];
		                   	$abteilung=$_POST['Abteilung'];
		                   	$zeitraum=$_POST['Zeitraum'];
		                   	$zusatz=$_POST['Zusatz'];
 							$STH = $this -> DBH -> query( "insert into kunde(name,vorname,anrede,firma,adresse,telefon,mobil,fax,email,branche,homepage,position,abteilung,zeitraum,zusatz)values('$name','$vorname','$anrede','$firma','$adresse','$telefon','$mobil','$fax','$email','$branche','$homepage','$position','$abteilung','$zeitraum','$zusatz')");
                        	return $STH;
                   }
                   
                   //anlegen einer anrede
                   public function insertTitle()
                   {
                   			$anrede=$_POST['Anrede'];
                   			$STH = $this-> DBH -> query ("insert into anrede(anrede) values ('$anrede')");
                   			return $STH;
                   }
                   
                   //anlegen der branche
                   public function insertBranche()
                   {
		                   	$branche=$_POST['Branche'];
		                   	$STH = $this-> DBH -> query ("insert into branche(branche) values ('$branche')");
		                   	return $STH;
                   }
                   
                   //anlegen von schulungen
                   public function insertTraining()
                   {
                   		$schulung=$_POST['Schulung'];
                   		$von=$_POST['Von'];
                   		$bis=$_POST['Bis'];
                   		$STH = $this-> DBH -> query ("insert into zeitraum(von,bis,schulung) values ('$von','$bis','$schulung')");
                   		return $STH;
                   }
                   
                   //funktion hohlt daten anrede, branche und zeitraum aus der db
                   public function showDetail()
                   {
		                   	$anrede = $this -> DBH -> query('SELECT * FROM anrede');
		                   	$branche = $this -> DBH -> query('SELECT * FROM branche');
		                   	$zeit = $this -> DBH -> query('SELECT * FROM zeitraum');
		                   	$result = array('anrede' => $anrede,
		                   					'branche' => $branche,
		                   					'zeit' => $zeit
		                   	);
                   			return $result;
                   }

         
        }
?>