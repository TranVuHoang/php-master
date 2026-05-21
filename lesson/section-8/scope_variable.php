<?php
//----------------------------------------
// PHẠM VI SỬ DUNG CỦA BIẾN TRONG PHP
//----------------------------------------
# Biến cục bộ trong hàm
function sum(float $a = 10, float $b = 10): float
{
  return $a + $b;
}
echo ">>> Tổng = ", sum();
echo "<hr>";

# Biến global bên ngoài hàm
$x = 10;
$y = 100;

function total()
{
  return $GLOBALS['x'] + $GLOBALS['y'];
}
echo ">>> Tổng = ", total();