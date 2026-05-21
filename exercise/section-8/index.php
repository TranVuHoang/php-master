<?php
//---------------------------------------
// BÀI TẬP PHẦN 8
//---------------------------------------

#1. Hàm kiểm tra số nguyên chẵn
// Cách 1. echo
function checkEven($number)
{
  echo ($number % 2 == 0) ? "Đây là số nguyên chẵn" : "Đây là sô nguyên lẻ";
}

echo ">>>";
checkEven(10);
echo "<hr>";

// Cách 2. return
function checkEven2(int $number): string
{
  return ($number % 2 == 0) ? "Đây là số nguyên chẵn" : "Đây là sô nguyên lẻ";
}

echo ">>> " . checkEven2(10);
echo "<hr>";

#2. Tính tổng các sô nguyên tố 2-> $n ($n >=2)
/**
 * Kiểm tra số nguyên tố
 */

function isPrime(int $number): bool
{
  if ($number < 2) {
    return false;
  }

  for ($i = 2; $i < $number; $i++) {
    if ($number % $i == 0) {
      return false;
    }
  }

  return true;
}

/**
 * Tính tổng các số nguyên tố từ 2 -> n
 */

$n = 20;
$sum = 0;

for ($i = 2; $i <= $n; $i++) {
  if (isPrime($i)) {
    $sum += $i;
  }
}

echo ">>> Tổng số nguyên tố từ 2 -> {$n} là: {$sum}";