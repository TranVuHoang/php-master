<?php
//------------------------------
// BÀI TẬP PHẦN 4
//------------------------------

# 1. Tạo biến lưu trữ danh sách thành viên
$users = [
  [
    "id" => 16022372,
    "fullname" => "Hoàng Trần",
    "age" => 29,
  ],
  [
    "id" => 2,
    "fullname" => "Trang Trang",
    "age" => 23,
  ],
];

# 2. Tạo biến lưu trữ danh sách sản phẩm
$products = [
  [
    "id" => 1,
    "name" => "iPhone 17",
    "price" => 25000000
  ],
  [
    "id" => 2,
    "name" => "MacBook Pro",
    "price" => 45000000
  ],
  [
    "id" => 3,
    "name" => "AirPods Pro",
    "price" => 6000000
  ]
];

# 3. Hiển thị thông tin cá nhân(Các thông tin được lưu ở dạng biến) Tôi là Hoàng, sinh năm 199x, cân nặng 62.5kg
$name = "Hoàng";
$birthday = "1/1/1997";
$weight = 62.5;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
  <title>Bài tập phần 4</title>
</head>

<body>
  <?php
  echo "Tôi là <strong>{$name}</strong>, sinh năm: <strong>{$birthday}</strong>,
  cân nặng: <strong>{$weight}</strong>kg";
  ?>
</body>

</html>