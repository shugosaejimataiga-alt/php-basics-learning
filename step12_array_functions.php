<?php
$LikeAnimals = ["Dog", "Cat", "Bird"];

echo "要素数" . count($LikeAnimals) . "\n";

array_push($LikeAnimals, "Lion", "Tiger");
echo "追加後:";
var_dump($LikeAnimals);

unset($LikeAnimals[1]);
echo "削除後:";
var_dump($LikeAnimals);

?>

<?php
$LikeFruits = ["Apple", "Melon", "Strawberry", "Muscat"];

echo "要素数" . count($LikeFruits) . "\n";

array_push($LikeFruits, "Mango");

unset($LikeFruits[0]);

$LikeFruits = array_values($LikeFruits);

var_dump($LikeFruits);

?>

<?php
$Books = ["PHP入門", "Java基礎", "HTMLデザイン"];

echo "要素数" . count($Books) . "\n";

array_push($Books, "龍が如く", "冴島大河");

unset($Books[1]);

$Books = array_values($Books);

var_dump($Books);

?>

