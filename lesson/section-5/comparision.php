<?php
//--------------------------------
// PHÉP TOÁN SO SÁNH TRONG PHP
//--------------------------------
$x = 10;
$y = "10";

echo "x = {$x}";
echo "<br>";
echo "y = '{$y}'";
echo "<hr>";

if ($x === $y) {
  echo ">>> x = y";
} else {
  echo ">>> x != y";
}
