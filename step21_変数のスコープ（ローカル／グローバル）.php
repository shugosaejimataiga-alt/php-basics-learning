<?php

$score = 80;

function addBonus() {
  global $score;
  $score = $score + 10;
}

addBonus();

echo "最終スコア:" . $score . "\n";

?>

<?php

$score = 80;

function addBonus() {
  global $score;
  $GLOBALS["sum"] = $score + 10;
}

addBonus();

echo "最終スコア:" . $sum . "\n";

?>

<?php

$score = 80;

function addBonus(){
  $GLOBALS["score"] = $GLOBALS["score"] + 10;
}

addBonus();
echo "最終スコア:" . $score . "\n";
?>

<?php

$score = 80;

function addBonus($score){
  return $score + 10;
}

// 関数の結果をグローバル変数に反映
$GLOBALS["score"] = addBonus($GLOBALS["score"]);

echo "最終スコア:" . $score . "\n";
?>