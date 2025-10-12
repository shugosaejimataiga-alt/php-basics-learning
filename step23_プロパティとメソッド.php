
<?php

class Animal {
  public $name;
  public $age = 0;

  function introduce() {
    echo "名前:{$this->name},年齢:{$this->age}\n";
  }

  function birthday() {
    $this->age += 1;
    echo "年齢:{$this->age}\n";
  }
}

$animal1 = new Animal();

$animal1->name = "ポチ";
$animal1->age = 3;

$animal1->introduce();
$animal1->birthday();

?>

<?php

class Car {
  public $brand;
  public $speed = 0;

  function run() {
    echo "{$this->brand}が走り始めました\n";
  }

  function accelerate() {
    $this->speed += 10;
    echo "スピードが{$this->speed}km/hになりました\n";
  }

  function brake() {
    $this->speed -= 5;
    echo "ブレーキ！スピードが{$this->speed}km/hになりました\n";
  }
}

$car1 = new Car();

$car1->brand = "Toyota";
$car1->speed = 60;

$car1->run();
$car1->accelerate();
$car1->brake();

?>