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
                         $dbhandle = sqlite_open('sqlite/database', 0666, $error);
                         if (!$dbhandle) die (§error);
                         $query = "SELECT name, vorname FROM kunde";
                         $result = sqlite_query($dbhandle, $query);
                         if (!$result) die("Cannot execute query.");
                         $row=sqlite-fetch-array($result, SQLITE_ASSOC);
                         print_r($row);
                         echo "<br />";
                         sqlite_rewind($result);
                         $row=sqlite_fetch-array($result, SQLITE_NUM);
                         print-r($row);
                         echo "<br />";
                         sqlite-rewind($result);
                         $row=sqlite_fetch_array($result, SQLITE_BOTH);
                         print_r($row);
                         echo "<br />";
                         sqlite_close($dbhandle);
                ?>
        </div>


</body>
</html>