<!-- ListAll -->

<h2> Liste aller Kunden </h2>


<ul id="list">
	<li class="head">
		<div class="list_vorname">Vorname</div>
		<div class="list_name">Nachname</div>
	</li>
	<?php
		$result = $data->fetchAll();
		if( count( $result ) ) {
			foreach ($result as $row) {
		echo "<li><div class=\"list_vorname\"><a href=\"index.php?View=Edit&id=".$row[0]."\">". $row[1]."</div><div class=\"list_name\">" . $row[2]. "</a></div></li>";}
		} else {
			echo "Keine Ergebnisse vorhanden.";
		}
	?>
</ul>
