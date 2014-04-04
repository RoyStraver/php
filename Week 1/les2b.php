<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Mijn php-script</title>
    </head>
    <body>
        <h3>Variabelen</h3>
        <?php
        $breedte = 10;
        $lengte = 2*$breedte;
        $hoogte = 5;
        $inhoud = $lengte * $hoogte;
        $oppervlakte = $lengte * $breedte;
        $volume = $oppervlakte * $hoogte;
        echo("Oppervlakte is: " . $oppervlakte . "<br />");
        echo("Volume is: " . $volume . "<br />");
        echo("Half volume is: " . $volume / 2 . "<br />");
        echo("Inhoud is: " . $inhoud . "<br />");
        
        ?>
    </body>
</html>