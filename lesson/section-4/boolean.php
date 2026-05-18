<?php
//-------------------------
// KIỂU DỮ LIỆU BOOLEAN
//-------------------------
$a = 10;

if ($a % 2 == 0) { // true | fasle
  echo "{$a} là số chẵn";
} else {
  echo "{$a} là số lẻ";
}

function checkEven($n)
{
  if ($n % 2 == 0) { // true | fasle
    return true;
  }

  return false;
}

$check = checkEven(4);
