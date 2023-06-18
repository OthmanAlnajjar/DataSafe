<?php

try {              
                                                // Verschucht
$pdo = new PDO("mysql:host=localhost;dbname=datasafe","root","",[  // eine Verbindung zur Datenbank herzustellen
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION    
]);
}
catch(PDOException $php_errormsg) {                                 // erzeugt einen Fehler
    echo "Probleme mit der Datenbank<br>";
    echo $php_errormsg;                                             // Ausgabe des Fehlers, nur bei Entwicklung
    die();                                                          // bei Fehler Script beenden.
}

?>

