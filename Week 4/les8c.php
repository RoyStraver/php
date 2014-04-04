<?php
$open = fopen("datadmv.csv", "r");

while($record = fgetcsv($open,1000,";")){
echo $record[0] . "<br>";
}

?>