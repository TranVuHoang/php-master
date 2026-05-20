<?php
//--------------------------------------
// Thêm phần tử vào mảng
//--------------------------------------
# Thêm phần tử vào mảng với key mặc định
$list_odd = [1, 3, 5, 7, 9];
$list_odd[] = 11; // Thêm phần tử vào cuối mảng
echo "<pre>";
print_r($list_odd);
echo "</pre>";
echo "<hr>";

# Thêm phần tử vào mảng với key tùy chỉnh
$users = [
  'id' => 1,
  'name' => 'Nguyen Van A',
  'email' => 'nguyenvana@example.com'
];
$users['phone'] = '0123456789'; // Thêm phần tử với key tùy chỉnh
echo "<pre>";
print_r($users);
echo "</pre>";
echo "<hr>";
