<h3>php lab 01</h3>
<?php
$merk = " Toshiba Satellite ";
$merk2 = " Acer Aspire ";
$model = " A100 ";
$model2 = " 5732Z ";
$os = " Windows XP ";
$os2 = "Linux";
$voorraad = 80;
$voorraad2 = 0;
$prijs = 999;
$prijs2 = 888;
$totaal = 0;
$totaal += $prijs + $prijs2;

echo("<table border ='1'> " . " <caption><strong>SML laptops</strong></caption>
<thead>
<tr><th>Merk</th><th>Model</th><th>Operating system</th><th>Voorraad</th><th>Prijs</th></tr>
</thead>
<tbody>
<tr><td>" . $merk . "</td>" . "<td>" . $model . "</td>" . "<td>" . $os . "</td>" . "<td>" . $voorraad . "</td>" . "<td>" . $prijs . "</td>" . "</tr>
<tr><td>" . $merk2 . "</td>" . "<td>" . $model2 . "</td>" . "<td>" . $os2 . "</td>" . "<td>" . $voorraad2 . "</td>" . "<td>" . $prijs2 . "</td>" . "</tr>
<tfoot>
<tr> <td colspan='4'>Totaal</td><td>" . $totaal . "</td></tr>
</tfoot>
</table>");
?>