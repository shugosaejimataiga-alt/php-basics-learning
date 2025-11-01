<?php
$name = $_GET["name"];
$food = $_GET["food"];

if (isset($name) && isset($food)){
  echo "{$name}さんの好きな食べ物は{$food}です\n";
} else{
  echo "情報が不足しています\n";
}

?>