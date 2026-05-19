<?php
//------------------------------
// CẤU TRÚC ĐIỀU KIỆN IF
// # 1. cấu trúc if
// # 2. cấu trúc if..else
// # 3. Cấu trúc if...elseif...else
// # 4. Cấu trúc if lồng nhau
//------------------------------

# 1. cấu trúc if
// Kiểm tra số chẵn
$number = 10;

if ($number % 2 == 0) {
  echo "{$number} là số chẵn.";
}
echo "<hr>";

# 2. cấu trúc if..else
// Kiểm tra số chẵn/ lẻ
$number2 = 21;

if ($number2 % 2 != 0) {
  echo "{$number2} là số lẻ.";
} else {
  echo "{$number2} là số chẵn.";
}
echo "<hr>";

# 3. Cấu trúc if...elseif...else
$point = 7;

if ($point < 4) {
  echo "F";
} elseif ($point < 5.5) {
  echo "D";
} elseif ($point < 7) {
  echo "C";
} elseif ($point < 8) {
  echo "B";
} elseif ($point < 9) {
  echo "A";
} else {
  echo "A+";
}
echo "<hr>";

# 4. Cấu trúc if lồng nhau
// Kiểm tra số nguyên dương chẵn
$n = 10;

if ($n > 0) {
  if ($n % 2 == 0) {
    echo "{$n} là số nguyên dương chẵn";
  }
}
