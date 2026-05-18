<?php

/**
 * Bước 1: Xây dựng giao diện
 * Bước 2: Chuẩn bị dữ liệu -> Tạo biến
 * Bước 3: Đổ dữ liệu php lên HTML
 */
$fullname = "Hoàng Trần";
$username = "hoangtran";
$email = "160222@vnu.edu.vn";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
  <title>Exercise 3</title>
</head>

<body>
  <p>Họ và tên: <?php echo "<strong>$fullname</strong>" ?></p>
  <p>Username: <?php echo "<strong>$username</strong>"; ?></p>
  <p>Email: <?php echo "<strong>$email</strong>"; ?></p>
</body>

</html>