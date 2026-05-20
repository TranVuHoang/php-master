<?php
//--------------------------------------
// Cập nhật giá trị của phần tử trong mảng
//--------------------------------------

$user = [
  'id' => 1,
  'name' => 'Nguyen Van A',
  'email' => 'nguyenvana@example.com'
];

// Cập nhật giá trị của phần tử trong mảng $user
$user['name'] = 'Nguyen Van B';
$user['email'] = 'nguyenvanb@example.com';

echo "<pre>";
print_r($user);
echo "</pre>";
echo "<hr>";

// Xuất thông tin người dùng sau khi cập nhật
echo ">>> ID: " . $user['id'] . "<br>";
echo ">>> Name: " . $user['name'] . "<br>";
echo ">>> Email: " . $user['email'] . "<br>";
echo "<hr>";
