<?php
$array1 = array(array("0" , "1" , "2") , array("a" , "b" , "c"));

echo "<table border='1px'>";
    echo "<tr>";
foreach ($array1 as $value) {
    foreach ($value as $subvalue) {
        echo "<td>" . $subvalue . "</td>";
        
    }
    echo "</tr>";
}
    echo "</tr>";
echo "</table>";
?>