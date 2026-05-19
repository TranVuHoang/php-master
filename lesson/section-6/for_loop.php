<?php
//--------------------------------------
// Vòng lặp for trong PHP
//--------------------------------------

// Tính tổng các số chẵn từ 0-10
$sum = 0;

$getTotal = function () {
  for ($i = 0; $i <= 10; $i++) {
    if ($i % 2 == 0) {
      $sum += $i;
    }
  }

  return $sum;
};


echo ">>> Tổng các số chẵn [0-10]: {$getTotal()}";