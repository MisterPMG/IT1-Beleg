<!-- ListBranche -->

<h2> Liste aller Branchen </h2>

<p>
<form action="index.php?View=Branche" method="POST">
	<table>
		<tr>
			<th>Nr</th> <th>Branche</th>
		</tr>
		<?php
			
			// Gute Methode
			if( is_array($data)) {extract ($data);}
			if( count( $branche ) ) {
				foreach ($branche as $row) {
					echo "<tr>";
					echo "<td>" . $row[ 0 ] . "</td><td>" . $row[ 1 ] ."</td>";
					echo "</tr>";
				}
			} else { 
				echo "Keine Ergebnisse vorhanden.";
			}
		?>
		<tr>
			<th><input type="submit" name="Anlegen" value="Anlegen" /></th>
			<th><input type="text" name="Branche" id="branche" /></th>
			<META HTTP-EQUIV="refresh" CONTENT="2">
		</tr>	
	
	</table>
</form>
</p>