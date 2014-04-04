<?php
$array1 = array(array("1" , "2") , array("a" , "b"));

foreach ($array1 as $value) {
    foreach ($value as $subvalue) {
        echo $subvalue . "<br>";
    }
}
?>