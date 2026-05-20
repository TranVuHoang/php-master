<?php
//--------------------------------------
// Tạo mảng bằng hàm array()
//--------------------------------------

# Tạo mảng rỗng
$error = [];
$error['username'] = "Username is required";
$error['password'] = "Password is required";

echo "<pre>";
print_r($error);
echo "</pre>";
echo "<hr>";

# Tạo mảng với key mặc định
$list_odd = [1, 3, 5, 7, 9];
echo "<pre>";
print_r($list_odd);
echo "</pre>";
echo "<hr>";

# Tạo mảng với key tùy chỉnh
$users = [
  'id' => 1,
  'name' => 'Nguyen Van A',
  'email' => 'nguyenvana@example.com'
];
echo "<pre>";
print_r($users);
echo "</pre>";
echo "<hr>";
