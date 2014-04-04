<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Mijn php-scirpt</title>
    </head>
    <body>
        <h3>hash-arrays</h3>
        <?php
        $hoofdstad = array("DE"=>"Berlijn <br>", "BE"=>"Brussel <br>", "FR"=>"Parijs <br>", "GB"=>"Londen <br>");
        $hoofdstad["NL"] = "Amsterdam";
        echo($hoofdstad["DE"] . "<br>" . $hoofdstad["BE"] . "<br>" . $hoofdstad["FR"] . "<br>" . $hoofdstad["GB"] . "<br>" . $hoofdstad["NL"]);
        ?>
    </body>