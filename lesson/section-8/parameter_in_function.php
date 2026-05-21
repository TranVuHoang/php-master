<?php
//--------------------------------------------
// THAM SỐ TRONG HÀM
//--------------------------------------------

# Hàm có 1 tham số
// Hàm kiểm tra số chẵn / lẻ
function checkEven($number)
{
  if ($number % 2 == 0) {
    echo ">>> $number là số chẵn";
  } else {
    echo ">>> $number là số lẻ";
  }
}

checkEven(6);
echo "<hr>";

// Hàm tính tổng giá trị của nhiều số
function sumMultiNumber($n)
{
  $sum = 0;

  for ($i = 1; $i <= $n; $i++) {
    $sum += $i;
  }
  return $sum;
}

echo ">>> Tổng 1-10: ", sumMultiNumber(10);
echo "<hr>";

# Hàm tính tổng các phần tử trong 1 mảng cho sẵn
function sumNumbers(array $numbers): float
{
  $sum = 0;

  foreach ($numbers as $number) {
    $sum += $number;
  }

  return $sum;
}

$numbers = [2, 4.56, 6.35];
var_dump(sumNumbers($numbers));

echo ">>> Tổng các phần tử trong mảng: " . sumNumbers($numbers);
echo "<hr>";

# Cách 2 Hàm tính tổng các phần tử trong 1 mảng cho sẵn
echo ">>> Tổng các phần tử trong mảng: " . array_sum($numbers);
echo "<hr>";

# hàm tạo input text
function renderInputText(
  string $name,
  string $value = '',
  string $placeholder = ''
): string {
  return
    '<input
      type="text"
      name="' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '"
      value="' . htmlspecialchars($value, ENT_QUOTES, 'UTF-8') . '"
      placeholder="' . htmlspecialchars($placeholder, ENT_QUOTES, 'UTF-8') . '"
    >';
}

echo renderInputText('username', 'Hoang', 'Nhập username...');