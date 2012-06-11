<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <title>IT-Beleg: Addressverwaltung</title>
	    <link rel="stylesheet" href="css/style.css">    
	</head>
	<body>
		<header>
	    	<h1>IT-Beleg</h1>
	    	
			<!-- Beginn Navigation -->
			<nav>
				<ul id="index">
					<li> <a href="index.php">Home / Suche</a> </li>
					<li> <a href="index.php?View=ListAll">Anzeigen</a> </li>
					<li> <a href="index.php?View=Create">Anlegen</a> </li>
					<li> <a href="index.php?View=Training">Schulungen</a> </li>
				</ul>
			</nav>
			<!-- Ende Navigation -->
			
		</header>
		
		<div>
		<!-- Beginn dynamisch erzeugter Inhalt  -->
		
		<?php
	
			ini_set('display_errors', 1);			
			require 'app/mvc.php';
			
			// das hier unten ist noch nicht richtig, nur zu testzwecken...
			if( isset( $_GET['View'] ) )
			{
				$Controller -> exec( $_GET[ 'View' ] );
			}
			else 
			{
				
				echo 'keine Parameter gefunden';				
				//$Controller -> exec( ... );
			}
		?>
		
		<!-- Ende dynamisch erzeugter Inhalt -->
		</div>
	</body>
</html>
	
	
