<?php
//------------------------------------
// Foreach Loop with Arrays
//------------------------------------

#1 duyệt mảng 1 chiều
$fruits = array("Apple", "Banana", "Cherry", "Date", "Elderberry");
echo "Fruits in the array: <br>";

foreach ($fruits as $fruit) {
  echo "{$fruit} ";
}
echo "<hr>";

#2 duyệt mảng 2 chiều
$students = array(
  array(
    "name" => "Alice",
    "age" => 20,
    "grade" => "A",
  ),
  array(
    "name" => "Bob",
    "age" => 22,
    "grade" => "B"
  ),
  array(
    "name" => "Charlie",
    "age" => 21,
    "grade" => "A"
  )
);
echo "Student Information: <br>";

foreach ($students as $student) {
  echo "Name: " . $student["name"] . ", Age: " . $student["age"] . ", Grade: " . $student["grade"] . "<br>";
  echo "<hr>";
}
