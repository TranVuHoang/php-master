<?php
//-------------------------
// KIỂU DỮ LIỆU MẢNG
//-------------------------

# Mảng 1 chiều
$listEven = array(0, 2, 4, 6, 8, 10); // Mảng số chẵn phong cách cũ
$listEven = [0, 2, 4, 6, 8, 10]; // Mảng số chẵn - hiện đại hơn []
echo "<pre>";
print_r($listEven);
echo "</pre>";

# Mảng nhiều chiều
/** Mảng danh sách thành viên
 * Id: ...
 * Tên: ...
 * Tuổi: ...
 */
$listUser = array(
  array(
    "id" => 1,
    "fullname" => "Hoàng Trần",
    "age" => 29,
  ),
  array(
    "id" => 2,
    "fullname" => "Trang Trang",
    "age" => 23,
  ),
);

echo "<hr>";

echo "<pre>";
print_r($listUser);
echo "</pre>";
