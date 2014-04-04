<?php
    $lezen = fopen("datadmv.csv" , "r");
    
    while($record = fgetcsv($lezen, 1000, ",")){
        echo "Naam " . $record[0] . " ";
        echo "Achternaam " . $record[1] . " ";
        echo "Leeftijd " . $record[2] . "<br>";
    }
?>