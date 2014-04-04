<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Mijn php-scirpt</title>
    </head>
    <body>
        <?php
        $list = array (
            array('Parijs' , 'FR' , '0'),
            array('Rotterdam' , 'NL' , '1'),
            array('Engeland' , 'EN' , '2')
        );
        
        $fp = fopen('file.csv' , 'w');
        
        foreach ($list as $fields){
            fputcsv($fp , $fields);
        }
        echo "succes";
        fclose($fp);
        ?>
    </body>