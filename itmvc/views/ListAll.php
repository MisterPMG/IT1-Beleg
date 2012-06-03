<!-- ListAll -->

<h1> Liste aller Kunden </h1>

<p>
	<?php
		foreach ( $data as $row )
		{
			echo $row[0] . " " . $row[1] . "<br />" ;
		}
	?>
</p>