<?php

$count = 1;
$sum = 0;

while ($count <= 10){
  echo $count . "\n";
  $sum += $count;
  $count++;
}

echo "合計:" . $sum . "\n";

?>

<?php

$i = 1;
$sum = 0;

while (true) {
    if ($i % 2 != 0) { 
        $i++;
        continue;
    }

    $sum += $i;
    echo "加算: {$i} / 合計: {$sum}\n";

    if ($sum > 100) {
        echo "しきい値を超えたので終了\n";
        break;
    }

    $i++;
}
?>


<?php

$i = 1;

while($i <= 10){
    if($i %2 == 0){
        echo "{$i}\n"; 
    }
    $i++;
}

?>


<?php

$x = 1;

do {
    echo"xの値は{$x}\n";
    $x++;
}while($x <= 5);

?>



<?php

$number = 1;

while($number <= 20){
    if(%3 == 0){
        echo"{$number}\n";
    }
    number++;
}

?>


<?php

$number = 1;

do{
    if($number %3 == 0){
        echo "{$number}\n";
    }
    $number++;
}while($number <= 20);

?>

