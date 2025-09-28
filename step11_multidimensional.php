<?php

$scores = [
  [80, 90, 70],
  [60, 75, 85],
  [100, 95,90]
];

echo "1人目の数学" . $scores[1][0] . "点\n";
echo "2人目の数学" . $scores[1][1] . "点\n";
echo "3人目の数学" . $scores[1][2] . "点\n";
var_dump($scores);
?>

<?php

$scores = [
  ["Taro",   80, 90, 70],
  ["Hanako", 60, 75, 85],
  ["Jiro",   100, 95, 90]
];

echo "Taroの英語は" . $scores[0][3] . "点\n";
echo "Hanakoの英語は" . $scores[1][3] . "点\n";
echo "Jiroの英語は" . $scores[2][3] . "点\n";

var_dump($scores);
?>

<?php

$scores = [
  ["国語", 80, 60, 100],
  ["数学", 90, 75, 95],
  ["英語", 70, 85, 90]
];

echo . "生徒1の英語の点数は" . $scores[2][1] . "点\n";
echo . "生徒2の英語の点数は" . $scores[2][2] . "点\n";
echo . "生徒3の英語の点数は" . $scores[2][3] . "点\n";

var_dump($scores);
?>

<?php
$scores = [
  ["Taro",   80, 90, 70],
  ["Hanako", 60, 75, 85],
  ["Jiro",   100, 95, 90]
];

$total1 = $scores[0][1] + $scores[0][2] + $scores[0][3];
$average1 = $total1 / 3;

echo "Taro の合計点は " . $total1 . " 点、平均は " . $average1 . " 点\n";

$total2 = $scores[1][1] + $scores[1][2] + $scores[1][3];
$average2 = $total2 / 3;

echo "Hanako の合計点は " . $total2 . " 点、平均は " . $average2 . " 点\n";

$total3 = $scores[2][1] + $scores[2][2] + $scores[2][3];
$average3 = $total3 / 3;

echo "Jiro の合計点は " . $total3 . " 点、平均は " . $average3 . " 点\n";

?>