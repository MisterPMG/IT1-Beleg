<!-- Create View -->
<?php
	if( is_array($data)) {extract ($data);}
	
	$option_anrede = '<select name="Anrede">'."\n";
    foreach ($anrede as $row)
    {
        $option_anrede.= '<option value='.$row[0].'>'.$row[1]. '</opiton>'."\n";
    }
    $option_anrede .="</select>\n";
                         

?>
<h2> Neuen Kunden Anlegen </h2>

<p>
      <form action="index.php" method="POST" >

                         <table id="anlegen">
                          <tr>
                           <td>Anrede</td>
                           <td><?php echo $option_anrede; ?></td>
                          </tr>
                          <tr>
                           <td><label for="name">Name</label></td>
                           <td><input type="text" name="Name" id="name" />     </td>
                          </tr>
                          <tr>
                           <td><label for="vorname">Vorname</label></td>
                           <td><input type="text" name="Vorname" id="vorname" />  </td>
                          </tr>
                          <tr>
                           <td><label for="firma">Firma</label></td>
                           <td><input type="text" name="Firma" id="firma" />     </td>
                          </tr>
                          <tr>
                           <td><label for="adresse">Adresse</label></td>
                           <td><input type="text" name="Adresse" id="adresse" />     </td>
                          </tr>
                          <tr>
                           <td><label for="telefon">Telefon</label></td>
                           <td><input type="text" name="Telefon" id="telefon" /> </td>
                          </tr>
                          <tr>
                           <td><label for="mobil">Mobil</label></td>
                           <td><input type="text" name="Mobil" id="mobil" /> </td>
                          </tr>
                          <tr>
                           <td><label for="fax">Fax</label></td>
                           <td><input type="text" name="Fax" id="fax" />  </td>
                          </tr>
                          <tr>
                           <td><label for="email">E-Mail</label></td>
                           <td><input type="text" name="Email" id="email" /> </td>
                          </tr>
                          <tr>
                           <td>Branche</td>
                           <td><?php ?></td>
                          </tr>
                          <tr>
                           <td><label for="www">Homepage</label></td>
                           <td><input type="text" name="www" id="www" /></td>
                          </tr>
                          <tr>
                           <td><label for="position">Position</label></td>
                           <td><input type="text" name="Position" id="position" />  </td>
                          </tr>
                          <tr>
                           <td><label for="abteilung">Abteilung</label></td>
                           <td><input type="text" name="Abteilung" id="abteilung" /> </td>
                          </tr>
                          <tr>
                           <td>Zeitraum</td>
                           <td><?php ?></td>
                          </tr>
                          <tr>
                           <td><label for="zusatz">Zusatz</label></td>
                           <td><input type="text" name="Zusatz" id="zusatz" /> </td>
                          </tr>
                          <tr>
                           <td><input type="submit" value="Anlegen" /></td>
                          </tr>
                         </table>


                 </form>
</p>