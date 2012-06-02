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
				<ul>
					<li><a href="index.php">Home / Suche</a></li>
					<li><a href="index.php?View=ListAll">Anzeigen</a></li>
					<li><a href="index.php?View=Create">Anlegen</a></li>
				</ul>
			</nav>
			<!-- Ende Navigation -->
			
		</header>
		
		<!-- Beginn dynamisch erzeugter Inhalt  -->
		
		<?php
		
			ini_set('display_errors', 1);
			
			require 'app/mvc.php';
			
			if( isset( $_POST ) )
			{
				$Controller -> load -> GetView( $_POST['View'], $_POST );
			}
			else 
			{
				echo 'keine Parameter gefunden';
			}
		?>
		
		<!-- Ende dynamisch erzeugter Inhalt -->
		
	</body>
</html>
	
	
