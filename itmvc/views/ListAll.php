<!-- ListAll -->

<h2> Liste aller Kunden </h2>

<p>
	<table>
		<tr>
			<th>Vorname</th> <th>Name</th>
		</tr>
		<?php
			
			// Gute Methode
			$result = $data->fetchAll();
			if( count( $result ) ) {
				foreach ($result as $row) {
					echo "<tr>";
					echo "<td>" . $row[ 0 ] . "</td><td>" . $row[ 1 ] ."</td>";
					echo "</tr>";
				}
			} else { 
				echo "Keine Ergebnisse vorhanden.";
			}
			
			
			//ALTERNATIV (-->  LazyWay ;)  <--)
			/* while ( $row = $data -> fetch() ) {
				echo "<tr>";
				echo "<td>" . $row[ 0 ] . "</td><td>" . $row[ 1 ] ."</td>";
				echo "</tr>";
			} */
		?>
	
	</table>
</p>