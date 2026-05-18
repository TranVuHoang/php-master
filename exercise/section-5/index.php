<?php
//---------------------------------------
// BÀI TẬP PHẦN 5
//---------------------------------------

/**
 * Viết hàm kiểm tra số nguyên dương chẵn
 */
$a = 99;

# Cách 1
if ($a > 0 && $a == (int) $a && $a % 2 == 0) {
  $a++;
}
echo ">>> a = {$a}";

# Cách 2:
echo "<hr>";

function isPositiveInteger($n)
{
  if (is_int($n) && $n > 0 && $n % 2 == 0) {
    $n++;
  }

  return $n;
}
echo ">>> n= " . isPositiveInteger(100);
