<?php
                         $dir = 'sqlite:sqlite/database.db';
                         $dbh = new PDO($dir) or die ("cannot open database");

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

                         try{
                         $sql = "insert into kunde(name,vorname,anrede,firma,adresse,telefon,mobil,fax,email,branche,homepage,position,abteilung,zeitraum,zusatz)values($name,$vorname,$anrede,$firma,$adresse,$telefon,$mobil,$fax,$email,$branche,$homepage,$position,$abteilung,$zeitraum,$zusatz)";
                         echo $sql;
                         $result=$dbh->exec($sql);
                         var_dump($result);
                         $dbh = NULL;
                         }catch(PDOExecption $e){
                         print "Error!: ".$e->getMessage(). "<br />";}




?>