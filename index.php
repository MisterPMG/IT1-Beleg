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
                                <li><a href="#">Suche</a></li>
                                <li><a href="list.php">Anzeigen</a></li>
                                <li><a href="new.php">Anlegen</a></li>
                        </ul>
                </nav>
        </header>

        <div>
                <form action="detail.php">
                         Suche: <input type="text" name="search" />
                         <select>
                                 <option value="opt_name">Name</option>
                                 <option value="opt_vorname">Vorname</option>
                                 <option value="opt_firma">Firma</option>
                                 <option value="opt_branche">Branche</option>
                         </select>
                         <input type="submit" value="Suchen" />
                </form>
        </div>


</body>
</html>