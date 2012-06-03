<!-- ListAll -->

<h2> Liste aller Kunden </h2>

<p>
	<?php
		foreach ( $data as $row )
		{
			echo $row[0] . " " . $row[1] . "<br />" ;
		}
	?>
</p>