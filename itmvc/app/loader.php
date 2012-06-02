<?php

	/* Den Loader könnte man auch weglassen, aber ich finde das so übersichtlicher
	 * in die Views ( unter views/ ) kommt alles, was in den einzelnen awf im html body erscheinen soll...
	 * $data kann dort genutz werden, ohne weiteres */

	class Load {
		
	   function ShowView( 
			$file_name, 		// View, die angezeigt werden soll
			$data = null 		// Daten, die die View benötigt
			) 
	   {
			include 'views/' . $file_name;
	   }
	}

?>