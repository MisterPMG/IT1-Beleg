<?php

	/* Den Loader k�nnte man auch weglassen, aber ich finde das so �bersichtlicher
	 * in die Views ( unter views/ ) kommt alles, was in den einzelnen awf im html body erscheinen soll...
	 * $data kann dort genutz werden, ohne weiteres */

	class Load {
		
	   	function GetView( 
			$viewName, 			// View, die angezeigt werden soll (ohne .php)
			$data = null 		// Daten, die die View ben�tigt
			) 
	   	{
			include 'views/' . $viewName . '.php';
		}
	}

?>