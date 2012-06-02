<?php

	require 'loader.php';	//zum anzeigen der ergebnisse
	require 'model.php';	//für den Zugriff auf die DB
	
	require 'controller.php';	//interaktion Model <-> View (/USER)
	
	$Controller = new Controller(); 
	
	$Controller->ShowTestView();

?>