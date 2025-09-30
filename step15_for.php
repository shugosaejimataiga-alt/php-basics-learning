<?php

for ($i = 1; $i <= 10; $i++){
  if ($i % 2 == 0){
    echo $i . "\n";
  }
}

?>

<?php
$sum = 0;

for ($i = 1; $i <= 100; $i++){
  $sum += $i;
}
echo $sum . "\n";

?>

<?php

for ($i =1; $i <= 9; $i++){
  for ($j = 1; $j <= 9; $j++){
    echo $i . "×" . $j . " = " . ($i*$j) . "\n"; 
  }
}

?>