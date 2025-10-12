<?php

class Dog {
    public $name;
    public $breed;

    public function bark() {
        echo "{$this->name}:{$this->breed}がワンワン！と吠えました";
    }
}

$myDog = new Dog();

$myDog->name = "Pochi";
$myDog->breed = "Shiba";

echo "犬の名前:{$myDog->name}\n";
echo "犬種:{$myDog->breed}\n";
$myDog->bark();

?>



<?php

class Car {
    public $brand;
    public $color;
    public $speed = 0;

    function run() {
        echo "{$this->brand}が走り始めました\n";
    }

    function accelerate() {
        $this->speed += 10;
        echo "スピードが{$this->speed}km/hになりました\n";
    }
}

$car1 = new Car();
$car2 = new Car();

$car1->brand = "Toyota";
$car1->color = "red";

$car2->brand = "Honda";
$car2->color = "blue";


$car1->run();
$car1->accelerate();

$car2->run();
$car2->accelerate();

?>