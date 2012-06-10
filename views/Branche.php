<!-- ListBranche -->

<h2> Liste aller Branchen </h2>

<p>
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
	
	</table>
</p>