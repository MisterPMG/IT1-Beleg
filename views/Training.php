<!-- ListTraining -->

<h2> Liste aller Schulungen </h2>

<ul id="list">
	<li class="head">
		<div class="list_schulung">Schulung</div>
		<div class="list_von">Von</div>
		<div class="list_bis">Bis</div>
	</li>
	<?php
		if( is_array($data)) {extract ($data);}
		if( count( $zeit ) ) {
			foreach ($zeit as $row) {
			echo "<li><div class=\"list_schulung\">". $row[3]."</div><div class=\"list_von\">" . $row[1]. "</div><div class=\"list_bis\">". $row[2]."</div></li>";}
		} else {
			echo "Keine Ergebnisse vorhanden.";
		}
	?>
</ul>