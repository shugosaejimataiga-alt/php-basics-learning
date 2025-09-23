<?php
// 暗黙的型変換の例
$number = 10;       // int
$text = "5";        // string

$result = $number + $text; // string "5" が int に暗黙変換される
var_dump($result);

// 明示的型変換の例
$float = 12.7;      // float
var_dump((int)$float);  // float → int にキャスト（小数点切り捨て）

$bool = true;       // bool
var_dump((string)$bool); // bool → string にキャスト
?>
