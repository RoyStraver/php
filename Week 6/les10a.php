<?php
class Car {
    public $color;
    public $manufacturer;
    public $diesel;

    function sound(){
        echo "vroemmmm";
    }
}

$beetle = new Car();
$beetle -> color = "red";
$beetle -> manufacturer = "Volkswagen";
$beetle -> sound();
?>