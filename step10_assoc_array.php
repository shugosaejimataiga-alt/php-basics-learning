<?php
$book = [
  "title" => "PHP入門",
  "author" => "Yamada",
  "price" => 1800
];

echo "本のタイトル：" . $book["title"] . "\n";
echo "本の価格：" . $book["price"] . "\n";

var_dump($book);
?>

<?php
$user = [
  "name" => "Hanako",
  "age" => 30,
  "email" => "hanako@example.com
"
];

echo "ユーザーの名前：" . $user["name"] . "\n";
echo "ユーザーのメールアドレス：" . $user["email"] . "\n";
var_dump($user);
?>

<?php
$product = [
  "name" => "ノートPC",
  "price" => "120000円",
  "stock" => 5,
  "maker" => "NEC"
]

echo "商品名" . $product["name"] . "\n";
echo "価格" . $product["price"] . "\n";
echo "在庫数" . $product["stock"] . "\n";

if ($stock >= 1){
  echo "在庫あり" . "\n";
} else {
  "在庫なし" . "\n";
}

var_dump($product);
?>