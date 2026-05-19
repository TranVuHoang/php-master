<?php
//---------------------------------
// CẤU TRÚC SWITCH-CASE
//---------------------------------

// Hiển thị ngày trong tuần
$day = 7;

switch ($day) {
  case 2:
    echo "Monday";
    break;
  case 3:
    echo "Tuesday";
    break;
  case 4:
    echo "Wednesday";
    break;
  case 5:
    echo "Thursday";
    break;
  case 6:
    echo "Friday";
    break;
  case 7:
    echo "Saturday";
    break;
  default:
    echo "Sunday";
    break;
}
