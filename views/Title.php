<!-- ListTitle -->

<h2> Liste aller Anreden </h2>

<p>
<form action="index.php?View=Title" method="POST">
	<table>
		<tr>
			<th>Nr</th> <th>Anrede</th>
		</tr>
		<?php
			
			// Gute Methode
			if( is_array($data)) {extract ($data);}
			if( count( $anrede ) ) {
				foreach ($anrede as $row) {
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
			<th><input type="text" name="Anrede" id="anrede" /></th>
			
		</tr>	
	
	</table>
</form>
</p>