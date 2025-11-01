<?php
$name = htmlspecialchars($_POST["name"], ENT_QUOTES, "UTF-8");
$address = htmlspecialchars($_POST["address"], ENT_QUOTES, "UTF-8");
$LikeFood = htmlspecialchars($_POST["LikeFood"], ENT_QUOTES, "UTF-8");

if (!empty($name) && !empty($address) && !empty($LikeFood)) {
  echo "{$name}さんのメールアドレスは{$address}です。<br>";
  echo "好きな食べ物は{$LikeFood}ですね！<br>";
} else {
  echo "入力が不足しています。";
}
?>


step29_contact_result.php

<?php
$name = htmlspecialchars($_POST["name"], ENT_QUOTES, "UTF-8");
$address = htmlspecialchars($_POST["address"], ENT_QUOTES, "UTF-8");
$inquiry = htmlspecialchars($_POST["inquiry"], ENT_QUOTES, "UTF-8");

if (!empty($name) && !empty($address) && !empty($inquiry)) {
  echo "{$name}さん(メール:{$address})から以下のお問い合わせがありました:<br>";
  echo "「{$inquiry}」<br>";
} else {
  echo "すべての項目を入力してください。";
}
?>
