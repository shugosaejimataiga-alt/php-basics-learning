<?php
$day = 3;

switch ($day) {
  case 1:
      echo "月曜日です。\n";
      break;

  case 2:
      echo "火曜日です。\n";
      break;

  case 3:
      echo "水曜日です。\n";
      break;

  case 4:
      echo "木曜日です。\n";
      break;

  case 5:
      echo "金曜日です。\n";
      break;

  case 6:
      echo "土曜日です。\n";
      break;

  case 7:
      echo "日曜日です。\n";
      break;

  default:
      echo "不明な曜日です。\n";
      break;
}
?>


<?php
$month = 8;

switch ($month) {
  case 3: case 4: case 5:
      echo "春\n";
      break;

  case 6: case 7: case 8:
      echo "夏\n";
      break;

  case 9: case 10: case 11:
      echo "秋\n";
      break;

  case 12: case 1: case 2:
      echo "冬\n";
      break;

  default:
      echo "不明な月です\n";
      break;
}

?>