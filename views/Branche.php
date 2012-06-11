<!-- ListBranche -->

<h2> Liste aller Branchen </h2>

<form action="index.php?View=Branche" method="POST">
	<ul id="list">
		<li class="head">
			<div class="list_id">ID</div>
			<div class="list_branche">Branche</div>
		</li>
		<?php
			if( is_array($data)) {extract ($data);}
				if( count( $branche ) ) {
					foreach ($branche as $row) {
						echo "<li><div class=\"list_id\">". $row[0]."</div><div class=\"list_branche\">" . $row[1]. "</div></li>";}
			} else {
						echo "Keine Ergebnisse vorhanden.";
			}
		?>
		<li>
			<div class="list_branche"><input type="submit" name="Anlegen" value="Anlegen" /></div>
			<div class="list_id"><input type="text" name="Branche" id="branche" /></div>
		</li>
	</ul>
</form>