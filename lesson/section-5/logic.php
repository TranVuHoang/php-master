<?php
//--------------------------------
// TOÁN TỬ LOGIC
//--------------------------------
$x = 10;
$y = 3;

# 1️⃣ Toán tử && (AND)
if ($x > 5 && $y < 6) {
  echo ">>> OK";
} elseif ($x > 5 || $y < 6) {
  echo ">>> OK!";
}

echo "<hr>";

# 2️⃣ Toán tử || (OR)
$isAdmin = false;
$isEditor = true;

if ($isAdmin || $isEditor) {
  echo "Có quyền truy cập";
}

# 3. Toán tử ! (NOT)
echo "<hr>";
$isLogin = false;

if (!$isLogin) {
  echo "Vui lòng đăng nhập";
}

# 4. Kiểm tra số chẵn/lẻ
echo "<hr />";
$n = 10;
echo "n = {$n} <br />";

if ($n % 2 == 0) {
  echo ">>> {$n} là số chẵn";
} else {
  echo ">>> {$n} là số lẻ";
}

# 5. Kiểm tra khoảng tuổi
echo "<hr />";
$age = 25;
echo "age = {$age} <br />";

if ($age >= 18 && $age <= 30) {
  echo ">>> Bạn đã đủ tuổi.";
}
