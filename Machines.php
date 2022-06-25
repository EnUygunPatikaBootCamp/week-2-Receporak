<?php

abstract class Vehicle {
    public $plateNo;
    public $brand;
    public $model;
    public $wheelCount;
    public $wingspan;
}


class Car extends Vehicle {
    public function __construct($plateNo, $brand, $model, $wheelCount) {
        $this->plateNo = $plateNo;
        $this->brand = $brand;
        $this->model = $model;
        $this->wheelCount = $wheelCount;
    }

    public function getInfo() {
        echo "Plaka:". $this->plateNo . "\nMarka: " . $this->brand . "\nModel: " . $this->model . "\nTekerlek Sayısı: " . $this->wheelCount;
    }
}

class MotoCycle extends Vehicle {
    public function __construct($plateNo, $brand, $model, $wheelCount) {
        $this->plateNo = $plateNo;
        $this->brand = $brand;
        $this->model = $model;
        $this->wheelCount = $wheelCount;
    }   

    public function getInfo() {
        echo  "Plaka: ".$this->plateNo . "\nMarka: " . $this->brand ."\nModel: ". $this->model . "\nTekerlek Sayısı: " . $this->wheelCount;
    }
}

class AirPlane extends Vehicle {
    public function __construct($brand, $model, $wingspan) {
        $this->brand = $brand;
        $this->model = $model;
        $this->wingspan = $wingspan;
    }

    public function getInfo() {
        echo  "Marka: " . $this->brand . "\nModel: " . $this->model . "\nKanat Açıklığı: " .$this->wingspan;
    }
}

$car = new Car("12 AS 45", "BMW", "X5", 4);
$motoCycle = new MotoCycle("54 TK 321", "Honda", "CBR", 2);
$airPlane = new AirPlane("Airbus", "A380", "50m");

echo "<h1>Araba</h1>\n";
$car->getInfo();
echo "\n\n<h1>Motor</h1>\n";
$motoCycle->getInfo();
echo "\n\n<h1>Uçak</h1>\n";
$airPlane->getInfo();

?>