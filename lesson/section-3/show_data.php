<?php
// xuất dữ liệu echo
echo "Học php tại unitop.vn <br>";
$a = 10;
echo "Giá trị a= {$a}";

// xuất dữ liệu mảng bằng print_r
$myArr = array("a", "b", "c");
echo "<pre>";
print_r($myArr);
echo "</pre>"
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
  <style>
    h1 {
      color: tomato;
    }
  </style>
  <title>Cú pháp viết PHP</title>
</head>

<body>
  <h1>Xin chào, tôi là <?php echo "Hoàng Trần" ?></h1>
</body>

</html>