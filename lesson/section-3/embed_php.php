<?php
$post_title = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
$post_content_1 = "Nội dung website";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
  <title>Nhúng php vào HTML</title>
  <style>
    h1 {
      color: tomato;
    }
  </style>
</head>

<body>
  <div id="content">
    <h1 class="post-title">
      <?php echo $post_title; ?>
    </h1>
    <div class="post-content">
      <?php
      echo $post_content_1;
      ?>
    </div>
  </div>
</body>

</html>