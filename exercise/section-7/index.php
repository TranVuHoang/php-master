<?php
//---------------------------------------
// BÀI TẬP PHẦN 7
//---------------------------------------

/**
 * 1. Tạo mảng lưu các số lẻ từ 3-150
 */

$oddNumbers = [];

for ($i = 3; $i <= 150; $i += 2) {
  $oddNumbers[] = $i;
}

echo "<h2>Danh sách số lẻ từ 3-150</h2>";

foreach ($oddNumbers as $number) {
  echo $number . " ";
}

echo "<hr>";

/**
 * 2. Tạo mảng đa chiều quản lý bài viết
 */

$posts = [
  [
    "id" => 1,
    "title" => "Học PHP cơ bản",
    "author" => "Hoàng",
    "content" => "Nội dung bài viết PHP..."
  ],
  [
    "id" => 2,
    "title" => "Học Laravel cho người mới",
    "author" => "An",
    "content" => "Nội dung Laravel..."
  ],
  [
    "id" => 3,
    "title" => "Frontend với React",
    "author" => "Bình",
    "content" => "Nội dung ReactJS..."
  ]
];

/**
 * 3. Tạo mảng đa chiều quản lý sản phẩm
 */

$products = [
  [
    "id" => 1,
    "name" => "iPhone 15",
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


/**
 * 4. Hiển thị danh sách bài viết
 */

echo "<h2>Danh sách bài viết</h2>";

foreach ($posts as $post) {

  echo "<h3>{$post['title']}</h3>";

  echo "<p>Tác giả: {$post['author']}</p>";

  echo "<p>{$post['content']}</p>";

  echo "<hr>";
}



/**
 * 5. Hiển thị danh sách sản phẩm
 */

echo "<h2>Danh sách sản phẩm</h2>";

foreach ($products as $product) {

  echo "<h3>{$product['name']}</h3>";

  echo "<p>Giá: {$product['price']} VNĐ</p>";

  echo "<hr>";
}