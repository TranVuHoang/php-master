<?php

# Định nghĩa hàm
// Hàm tính tổng 2 số a, b
function sum($a, $b)
{
  return $a + $b;
}
$a = 8;
$b = 8;
$total = sum($a, $b);
echo ">>> Tổng: {$a} + {$b} = {$total}";
echo "<hr />";