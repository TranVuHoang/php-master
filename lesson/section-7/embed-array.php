<?php
//---------------------------------------
// XUẤT DỮ LIỆU MẢNG LÊN HTML
//---------------------------------------

#1. Xuất dữ liệu mảng 1 chiều
$list_prime = [2, 3, 5, 7, 11];
$number = 10;

#2. Xuất dữ liệu mảng đa chiều
$users = [
  [
    "name" => "An",
    "age" => 20
  ],
  [
    "name" => "Bình",
    "age" => 25
  ]
];

/**
 * B1: Chuẩn bị mảng đã xử lý
 * B2: Tạo cấu trúc HTML
 * B3: Duyệt mảng đã xử lý để xuất dữ liệu ra HTML
 * B4: Đổ dữ liệu ra HTML(đổ lên phần dữ liệu thay đổi thôi)
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
  <title>Đổ dữ liệu mảng</title>
</head>

<body>
  <h1>Render dữ liệu PHP thành HTML</h1>
  <hr>
  <h2>Danh sách số nguyên tố</h2>
  <table border="1" cellpadding=10 cellspacing=0>
    <thead>
      <tr>
        <th width="20px">STT</th>
        <th width="200px">Số nguyên tố</th>
      </tr>
    </thead>
    <tbody>
      <!-- render mảng 1 chiều trong PHP hiện đại -->
      <?php foreach ($list_prime as $index => $prime): ?>
      <tr>
        <td><?= $index + 1 ?></td>
        <td><?= $prime ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <!-- render mảng đa chiều trong PHP hiện đại -->
  <?php if (!empty($users)): ?>

  <h2>Danh sách thành viên</h2>

  <table border="1" cellpadding="10" cellspacing="0">
    <thead>
      <tr>
        <th>STT</th>
        <th width="200">Name</th>
        <th>Age</th>
      </tr>
    </thead>

    <tbody>
      <?php foreach ($users as $index => $user): ?>
      <tr>
        <td><?= $index + 1 ?></td>
        <td>
          <?= htmlspecialchars($user['name'], ENT_QUOTES, 'UTF-8') ?>
        </td>
        <td><?= htmlspecialchars($user['age'], ENT_QUOTES, 'UTF-8') ?>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <?php else: ?>

  <p> >>> Không tồn tại dữ liệu</p>

  <?php endif; ?>

</body>

</html>