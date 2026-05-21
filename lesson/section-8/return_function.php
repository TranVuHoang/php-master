<?php
# Hàm show array
function showArray($data)
{
  echo "<pre>";
  print_r($data);
  echo "<pre>";
}

# Hàm tính tổng 2 số
function sum(float $a, float $b)
{
  $sum = $a + $b; // logic
  echo ">>> Sum {$a} + {$b} = {$sum}"; // giá trị trả về
}

# Hàm trả dữ liệu thông qua return
function total(float $a, float $b): float
{
  return $a + $b;
}
$sum = total(3, 5);
echo ">>> Tổng: {$sum}";
echo "<hr>";