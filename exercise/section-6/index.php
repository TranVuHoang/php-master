<?php
//----------------------------------------
// BÀI TẬP PHẦN 6
//----------------------------------------

/** Bài 1
 * Tính tổng các số chẵn từ 1 đến n
 * Điều kiện: n >= 2
 */

$n = 10;
$sum = 0;

for ($i = 2; $i <= $n; $i += 2) {
  $sum += $i;
}

echo "Tổng các số chẵn từ 1 đến {$n} là: {$sum}";
echo "<hr />";

/** Bài 2
 * Tính tổng
 * 1/3 + 1/6 + 1/9 + 1/(n+3)
 */
$n = 12;
$sum = 0;

for ($i = 3; $i <= $n; $i += 3) {
  $sum += 1 / $i;
}

echo "Tổng nghịch đảo là: {$sum}";
echo "<hr/>";

/** Bài 3
 * Tính tổng:
 * T3 = 1/2 + 2/3 + 3/4 + ... + n/(n+1)
 */
$n = 5;
$sum = 0;

for ($i = 1; $i <= $n; $i++) {
  $sum += $i / ($i + 1);
}

echo "Tổng chuỗi T3 là: {$sum}";
echo "<hr />";

/** Bài 4
 * Giải phương trình bậc 2
 */
$a = 1;
$b = -3;
$c = 2;

$delta = $b * $b - 4 * $a * $c;

if ($delta > 0) {

  $x1 = (-$b + sqrt($delta)) / (2 * $a);
  $x2 = (-$b - sqrt($delta)) / (2 * $a);

  echo "Phương trình có 2 nghiệm phân biệt:<br>";
  echo "x1 = {$x1}<br>";
  echo "x2 = {$x2}";
} elseif ($delta == 0) {

  $x = -$b / (2 * $a);

  echo "Phương trình có nghiệm kép: x = {$x}";
} else {

  echo "Phương trình vô nghiệm";
}
