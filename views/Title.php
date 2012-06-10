<!-- ListTitle -->

<h2> Liste aller Anreden </h2>

<form action="index.php?View=Title" method="POST">
	<ul id="list">
		<li class="head">
			<div class="list_id">ID</div>
			<div class="list_anrede">Anrede</div>
		</li>
		<?php
			if( is_array($data)) {extract ($data);}
			if( count( $anrede ) ) {
					foreach ($anrede as $row) {
						echo "<li><div class=\"list_id\">". $row[0]."</div><div class=\"list_anrede\">" . $row[1]. "</div></li>";}
			} else {
						echo "Keine Ergebnisse vorhanden.";
			}
		?>
		<li>
			<div class="list_id"><input type="submit" name="Anlegen" value="Anlegen" /></div>
			<div class="list_anrede"><input type="text" name="Anrede" id="anrede" /></div>
		</li>
	</ul>
</form>