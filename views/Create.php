<!-- Create View -->
<?php
	if( is_array($data)) {extract ($data);}
	
	$option_anrede = '<select name="Anrede">'."\n";
    foreach ($anrede as $row)
    {
        $option_anrede.= '<option value='.$row[0].'>'.$row[1]. '</opiton>'."\n";
    }
    $option_anrede .="</select>\n";
    
    $option_branche = '<select name="Branche">'."\n";
    foreach ($branche as $row)
    {
    	$option_branche.= '<option value='.$row[0].'>'.$row[1]. '</opiton>'."\n";
    }
    $option_branche .="</select>\n";
    
    $option_zeit = '<select name="Zeitraum">'."\n";
    foreach ($zeit as $row)
    {
    	$option_zeit.= '<option value='.$row[0].'>'.$row[3].'</opiton>'."\n";
    }
    $option_zeit .="</select>\n";
?>
<h2> Neuen Kunden Anlegen </h2>


  <form action="index.php?View=Create" method="POST" >
         <ul id="list">
          <li>
           <div class="list_label">Anrede</div>
           <div class="list_input"><?php echo $option_anrede; ?><a href="index.php?View=Title">neu</a></div>
          </li>
          <li>
           <div class="list_label"><label for="name">Name</label></div>
           <div class="list_input"><input type="text" name="Name" id="name" />     </div>
          </li>
          <li>
           <div class="list_label"><label for="vorname">Vorname</label></div>
           <div class="list_input"><input type="text" name="Vorname" id="vorname" />  </div>
          </li>
          <li>
           <div class="list_label"><label for="firma">Firma</label></div>
           <div class="list_input"><input type="text" name="Firma" id="firma" />     </div>
          </li>
          <li>
           <div class="list_label"><label for="adresse">Adresse</label></div>
           <div class="list_input"><input type="text" name="Adresse" id="adresse" />     </div>
          </li>
          <li>
           <div class="list_label"><label for="telefon">Telefon</label></div>
           <div class="list_input"><input type="text" name="Telefon" id="telefon" /> </div>
          </li>
          <li>
           <div class="list_label"><label for="mobil">Mobil</label></div>
           <div class="list_input"><input type="text" name="Mobil" id="mobil" /> </div>
          </li>
          <li>
           <div class="list_label"><label for="fax">Fax</label></div>
           <div class="list_input"><input type="text" name="Fax" id="fax" />  </div>
          </li>
          <li>
           <div class="list_label"><label for="email">E-Mail</label></div>
           <div class="list_input"><input type="text" name="Email" id="email" /> </div>
          </li>
          <li>
           <div class="list_label">Branche</div>
           <div class="list_input"><?php echo $option_branche; ?><a href="index.php?View=Branche">neu</a></div>
          </li>
          <li>
           <div class="list_label"><label for="www">Homepage</label></div>
           <div class="list_input"><input type="text" name="www" id="www" /></div>
          </li>
          <li>
           <div class="list_label"><label for="position">Position</label></div>
           <div class="list_input"><input type="text" name="Position" id="position" />  </div>
          </li>
          <li>
           <div class="list_label"><label for="abteilung">Abteilung</label></div>
           <div class="list_input"><input type="text" name="Abteilung" id="abteilung" /> </div>
          </li>
          <li>
           <div class="list_label">Schulung</div>
           <div class="list_input"><?php echo $option_zeit ?></div>
          </li>
          <li>
           <div class="list_label"><label for="zusatz">Zusatz</label></div>
           <div class="list_input"><input type="text" name="Zusatz" id="zusatz" /> </div>
          </li>
          <li>
           <div class="list_button"><input type="submit" name="Anlegen" value="Anlegen" /></div>
          </li>
         </ul>
 </form>
