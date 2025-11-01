<?php

session_start();

if(isset($_SESSION["user"])){
  echo "現在のログインユーザー" . $_SESSION["user"] . "\n";
  echo "セッションを削除します\n";
}else{
  echo "セッションデータが存在しません\n";
}

session_unset();

session_destroy();

if(isset($_SESSION["user"])){
  echo "現在のログインユーザー" . $_SESSION["user"] . "\n";
}else{
  echo "データがありません\n";
}

?>