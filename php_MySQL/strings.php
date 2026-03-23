<?php
echo "helo folks";
echo "<br>____________________________________<br>";

$x = "maria";
echo "hello " , $x;
echo "<br>";
echo "<br>____________________________________<br>";

echo "strelen() = " , strlen("hello" );
echo "<br>____________________________________<br>";

echo "str_word_count = ", str_word_count("hello galera, como vcs estao?");
echo "<br>____________________________________<br>";

$txt = "is that all folks";
var_dump(str_contains($txt, "all"));
echo "<br>str_contains = " . strpos($txt, "all");
echo "<br>____________________________________<br>";
var_dump(str_contains($txt, "boy"));
echo "<br>str_contains = " . strpos($txt, "boy");
echo "<br>____________________________________<br>";

echo strpos($txt, "folks");
echo "<br>str_contains = " . strpos($txt, "folks");
echo "<br>____________________________________<br>";

$txt2 = "i really love myself";
var_dump(str_contains($txt2, "i really"));
echo "<br>=====================================<br>";
var_dump(str_contains($txt2, "I really"));
echo "<br>____________________________________<br>";

$txt2 = "i really love myself!";
var_dump(str_contains($txt2, "myself"));
echo "<br>=====================================<br>";
var_dump(str_contains($txt2, "myself!"));
echo "<br>____________________________________<br>";

$txt3 = "eu amo minha cadelinha!";
echo strrev($txt3);
echo "<br>____________________________________<br>";

$txt4 = "       preciso assistir mais animes         ";
echo $txt4;
echo "<br>" . trim($txt4);
echo "<br>" . strlen($txt4);
echo "<br>____________________________________<br>";

$txt5 = "eu quero dormir joel!";
$y = explode(" ", $txt5);

print_r($y);
echo "<br>____________________________________<br>";

$txt6 = "eu quero dormir!";
$txt7 = "na minha cama, na minha casa";
echo $txt6 . $txt7 . "<br>";
echo $txt6 . "" . $txt7 . "<br>";
echo "$txt6 $txt7" ;
echo "<br>____________________________________<br>";

$text8 = "me tira daqui!!";
echo $text8;
echo "<br>____________________________________<br>";

echo substr($text8, 12) . "<br>";

echo substr($text8, -5, length: 4) . "<br>";
echo "<br>____________________________________<br>";

$txt9 = "and i could never \'beleve'\ this";
echo $txt9;


