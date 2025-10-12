<?php

$word = "Programing";

echo strlen($word) . "\n";

echo str_replace("ming", "mer", $word) . "\n";

echo $word . "\n"; // ← 確認用

?>

<?php

$text = "I love Java and JavaScript.";
echo str_replace("Java", "PHP",$text) . "\n";
echo "{$text}\n";

?>

<?php

$sentence = "Today is a good day for learning PHP!";

echo strlen($sentence) . "\n";

echo str_replace("PHP", "programing", $sentence) . "\n";

echo "{$sentence}\n";

?>