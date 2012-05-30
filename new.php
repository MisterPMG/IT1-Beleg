<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
    <title>IT-Beleg: Addressverwaltung</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <header>
                <h1>IT-Beleg</h1>
                <nav>
                        <ul>
                                <li><a href="index.php">Suche</a></li>
                                <li><a href="list.php">Anzeigen</a></li>
                                <li><a href="#">Anlegen</a></li>
                        </ul>
                </nav>
        </header>

        <div>
                 <form action="detail.php">

                         <table id="anlegen">
                          <tr>
                           <td>Anrede</td>
                           <td><select><option value="herr">Herr</option><option value="frau">Frau</option><option value="blabla">BlaBla</option></select></td>
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
                           <td><select><option value="Industrie">Industrie</option><option value="Dienstleistung">Dienstleistung</option><option value="blabla">BlaBla</option></select></td>
                          </tr>
                          <tr>
                           <td><label for="www">Homepage</label></td>
                           <td><input type="text" name="www" id="www" /></td>
                          </tr>
                          <tr>
                           <td><label for="position">Position</label></td>
                           <td><input type="text" name="Postion" id="position" />  </td>
                          </tr>
                          <tr>
                           <td><label for="abteilung">Abteilung</label></td>
                           <td><input type="text" name="Abteilung" id="abteilung" /> </td>
                          </tr>
                          <tr>
                           <td>Zeitraum</td>
                           <td><select><option value="von">von</option><option value="bis">bis</option><option value="blabla">BlaBla</option></select></td>
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
        </div>


</body>
</html>