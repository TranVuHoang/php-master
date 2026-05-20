<?php
//-------------------------------------------------
// Xoá mảng, xoá phần tử của mảng
// unset($array) => xoá toàn bộ mảng
// unset($array[index]) => xoá phần tử của mảng
//-------------------------------------------------

$info = [
  "id" => 1,
  "fullname" => "Hoàng Trần",
  "email" => "info@gmail.com",
  "website" => "tranvuhoang.github.io",
];
echo ">>> Mang truoc khi xoa: <br>";
echo "<pre>";
print_r($info);
echo "</pre>";
echo "<hr>";

// Xoá phần tử website trong mảng $info
unset($info['website']);
echo ">>> Mang sau khi xoa phan tu [website]: <br>";
echo "<pre>";
print_r($info);
echo "</pre>";
echo "<hr>";

// mảng đa chiều ban đầu
$users = [
  [
    "id" => 1,
    "fullname" => "Hoàng Trần",
    "email" => "info@gmail.com",
    "website" => "tranvuhoang.github.io",
  ],
  [
    "id" => 2,
    "fullname" => "Nguyễn Văn A",
    "email" => "nguyenvana@gmail.com",
    "website" => "nguyenvana.github.io",
  ],
];
echo ">>> Mang da chieu truoc khi xoa: <br>";
echo "<pre>";
print_r($users);
echo "</pre>";
echo "<hr>";

// xoá thông tin của Hoàng Trần
unset($users[0]);
echo ">>> Mang da chieu sau khi xoa phan tu [0]: <br>";
echo "<pre>";
print_r($users);
echo "</pre>";
echo "<hr>";

echo ">>> Xoá [website] của Nguyễn Văn A: <br>";
unset($users[1]['website']);
echo "<pre>";
print_r($users);
echo "</pre>";
echo "<hr>";

// Xoá toàn bộ mảng $users
unset($users);
echo ">>> Mang sau khi xoa toan bo: <br>";
echo "<pre>";
print_r($users);
echo "</pre>";
echo "<hr>";
