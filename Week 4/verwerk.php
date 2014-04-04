<?php
if(empty($_POST["voornaam"])){
    echo 'vul alle tekstvelden in';
    return false;
}
echo $_POST["voornaam"] . "<br>";
echo $_POST["achternaam"] . "<br>";
echo $_POST["leeftijd"] . "<br>";
?>