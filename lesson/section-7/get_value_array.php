<?php
//--------------------------------------
// Lấy giá trị của phần tử trong mảng
//--------------------------------------
# Lấy giá trị của phần tử trong mảng $list_odd
$list_odd = [1, 3, 5, 7, 9];

echo "Phần tử đầu tiên: " . $list_odd[0] . "<br>"; // Lấy phần tử đầu tiên
echo "<hr>";

$users = [
  'id' => 1,
  'name' => 'Nguyen Van A',
  'email' => 'nguyenvana@example.com'
];
// Lấy giá trị của phần tử trong mảng $users
echo "ID: " . $users['id'] . "<br>";
echo "Name: " . $users['name'] . "<br>";
echo "Email: " . $users['email'] . "<br>";
echo "<hr>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <p>Xuất thông tin người dùng:</p>
  <p>ID: <strong><?php echo $users['id']; ?></strong></p>
  <p>Họ và tên: <strong><?php echo $users['name']; ?></strong></p>
  <p>Email: <strong><?php echo $users['email']; ?></strong></p>
</body>

</html>