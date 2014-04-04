<?php
	$leeftijd = 0;
	$geld = 1;
	
	$jonger18 = 18;
	$bedrag = 10;
	$color = "white";
	$white = "white";
	$black = "black";
	
	echo  "Komt een man bij de kassa... <br> ";
	
	if ( $leeftijd >= $jonger18 && $geld >= $bedrag )
	{
		echo "Hij mag en kan deze drank kopen <br>";
	}
	else
	{
		echo "Hij kan deze drank niet kopen! <br>";
	}
	
	echo "Man verlaat de winkel! <br>";
	
	echo "<hr>";

	echo  "Komt een man bij de kassa... <br> ";
	
	if ( $leeftijd >= $jonger18 && $geld >= $bedrag )
	{
		echo "Hij mag en kan deze drank kopen <br>";
	}
	elseif ($color = $black)
	{
		echo "Hij mag kan deze drank stelen <br>";
	}
	else
	{
		echo "Hij kan deze drank niet kopen! <br>";
	}
	
	echo "Man verlaat de winkel! <br>";
?>