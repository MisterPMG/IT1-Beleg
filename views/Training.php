<!-- ListTraining -->

<h2> Liste aller Schulungen </h2>

<p>
	<table>
		<tr>
			<th>Von</th> <th>Bis</th> <th>Schulung</th>
		</tr>
		<?php
			
			// Gute Methode
			if( is_array($data)) {extract ($data);}
			if( count( $zeit ) ) {
				foreach ($zeit as $row) {
					echo "<tr>";
					echo "<td>" . $row[ 1 ] . "</td><td>" . $row[ 2 ] ."</td><td>". $row[3]. "</td>";
					echo "</tr>";
				}
			} else { 
				echo "Keine Ergebnisse vorhanden.";
			}
		?>
	
	</table>
</p>