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
                                 <li><a href="#">Anzeigen</a></li>
                                 <li><a href="new.php">Anlegen</a></li>
                        </ul>
                </nav>
        </header>

        <div>
                <?php
                         $dir = 'sqlite:sqlite/database.db';
                         $dbh = new PDO($dir); //or die ("cannot open database");
                         $query = "SELECT * FROM kunde";
                         foreach ($dbh->query($query) as $row)
                         {
                                 echo $row[2];echo " ";echo $row[1];echo "<br />" ;
                         }
                ?>
        </div>


</body>
</html>