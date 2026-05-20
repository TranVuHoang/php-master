<?php
//-------------------------------------------
// Mảng đa chiều (Multi-dimensional Array)
//-------------------------------------------

$list_user = [
  [
    'name' => 'Nguyen Van A',
    'age' => 30,
    'email' => 'nguyenvana@example.com'
  ],
  [
    'name' => 'Nguyen Van B',
    'age' => 25,
    'email' => 'nguyenvanb@example.com'
  ]
];
echo "Mảng đa chiều:";
echo '<pre>';
print_r($list_user);
echo '</pre>';
echo '<hr>';
/**
 * Thêm phần tử
 * name: Nguyen Van C
 * age: 28
 * email: nguyenvanc@gmail.com
 */
$list_user[] = [
  'name' => 'Nguyen Van C',
  'age' => 28,
  'email' => 'nguyenvanc@gmail.com'
];
echo "Mảng sau khi thêm phần tử:";
echo '<pre>';
print_r($list_user);
echo '</pre>';
echo '<hr>';

// Thêm thủ công
$list_user[4]['name'] = 'Nguyen Van D';
$list_user[4]['age'] = 35;
$list_user[4]['email'] = 'nguyenvand@gmail.com';
echo "Mảng sau khi thêm phần tử thủ công:";
echo '<pre>';
print_r($list_user);
echo '</pre>';
echo '<hr>';

// Lấy phần tử thứ 2 của mảng $list_user
echo "Lấy phần tử thứ 2 của mảng:";
echo '<pre>';
print_r($list_user[1]);
echo '</pre>';
echo '<hr>';

// Lấy tên của user thứ 2
echo "Lấy tên của user thứ 2:";
echo '<pre>';
echo $list_user[1]["name"];
echo '</pre>';
echo '<hr>';
