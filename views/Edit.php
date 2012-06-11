<!-- Detail -->
<?php
		$result = $data['getClient']->fetchAll();
		extract($result[0]);
		$anrede_id=$anrede;
		$branche_id=$branche;
		$zeit_id=$zeitraum;
		if( count( $result )==1 ) {			
			echo "<h2>Detail: ".$vorname." ".$name. "</h2>";
		} else {
			echo "Keine Ergebnisse vorhanden.";
		}
		
		$result2 = $data['showDetail'];
		extract($result2);
	
	$option_anrede = '<select name="Anrede">'."\n";
    foreach ($anrede as $row)
    {
    	if($anrede_id==$row[0]){$option_anrede.= '<option selected=\"selected\" value='.$row[0].'>'.$row[1]. '</opiton>'."\n";
    	}else{
        $option_anrede.= '<option value='.$row[0].'>'.$row[1]. '</opiton>'."\n";
    	}
    }
    $option_anrede .="</select>\n";
    
    $option_branche = '<select name="Branche">'."\n";
    foreach ($branche as $row)
    {
    	if($branche_id==$row[0]){$option_branche.= '<option selected=\"selected\" value='.$row[0].'>'.$row[1]. '</opiton>'."\n";
    	}else{
    	$option_branche.= '<option value='.$row[0].'>'.$row[1]. '</opiton>'."\n";
    	}
    }
    $option_branche .="</select>\n";
    
    $option_zeit = '<select name="Zeitraum">'."\n";
    foreach ($zeit as $row)
    {
    	if($zeit_id==$row[0]){$option_zeit.= '<option selected=\"selected\" value='.$row[0].'>'.$row[3].'</opiton>'."\n";
    	}else{
    	$option_zeit.= '<option value='.$row[0].'>'.$row[3].'</opiton>'."\n";
    	}
    }
    $option_zeit .="</select>\n";
?>

<form action="index.php?View=Edit&id=<?php echo $kunde_id;?>" method="POST" >
         <ul id="list">
          <li>
           <div class="list_label">Anrede</div>
           <div class="list_input"><?php echo $option_anrede; ?></div>
          </li>
          <li>
           <div class="list_label"><label for="name">Name</label></div>
           <div class="list_input"><input type="text" name="Name" id="name" value="<?php echo $name;?>"/>     </div>
          </li>
          <li>
           <div class="list_label"><label for="vorname">Vorname</label></div>
           <div class="list_input"><input type="text" name="Vorname" id="vorname" value="<?php echo $vorname;?>"/>  </div>
          </li>
          <li>
           <div class="list_label"><label for="firma">Firma</label></div>
           <div class="list_input"><input type="text" name="Firma" id="firma" value="<?php echo $firma;?>" />     </div>
          </li>
          <li>
           <div class="list_label"><label for="adresse">Adresse</label></div>
           <div class="list_input"><input type="text" name="Adresse" id="adresse" value="<?php echo $adresse;?>" />     </div>
          </li>
          <li>
           <div class="list_label"><label for="telefon">Telefon</label></div>
           <div class="list_input"><input type="text" name="Telefon" id="telefon" value="<?php echo $telefon;?>" /> </div>
          </li>
          <li>
           <div class="list_label"><label for="mobil">Mobil</label></div>
           <div class="list_input"><input type="text" name="Mobil" id="mobil" value="<?php echo $mobil;?>" /> </div>
          </li>
          <li>
           <div class="list_label"><label for="fax">Fax</label></div>
           <div class="list_input"><input type="text" name="Fax" id="fax" value="<?php echo $fax;?>" />  </div>
          </li>
          <li>
           <div class="list_label"><label for="email">E-Mail</label></div>
           <div class="list_input"><input type="text" name="Email" id="email" value="<?php echo $email;?>"/> </div>
          </li>
          <li>
           <div class="list_label">Branche</div>
           <div class="list_input"><?php echo $option_branche; ?></div>
          </li>
          <li>
           <div class="list_label"><label for="www">Homepage</label></div>
           <div class="list_input"><input type="text" name="www" id="www" value="<?php echo $homepage;?>" /></div>
          </li>
          <li>
           <div class="list_label"><label for="position">Position</label></div>
           <div class="list_input"><input type="text" name="Position" id="position" value="<?php echo $position;?>" />  </div>
          </li>
          <li>
           <div class="list_label"><label for="abteilung">Abteilung</label></div>
           <div class="list_input"><input type="text" name="Abteilung" id="abteilung" value="<?php echo $abteilung;?>" /> </div>
          </li>
          <li>
           <div class="list_label">Schulung</div>
           <div class="list_input"><?php echo $option_zeit ?></div>
          </li>
          <li>
           <div class="list_label"><label for="zusatz">Zusatz</label></div>
           <div class="list_input"><input type="text" name="Zusatz" id="zusatz" value="<?php echo $zusatz;?>" /> </div>
          </li>
          <li>
           <div class="list_button"><input type="submit" name="Ändern" value="Ändern" /></div>
          </li>
         </ul>
 </form>
