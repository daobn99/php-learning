<?php
// lặp qua các mục của một mảng
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $color) {
  echo "$color<br>";
}

// In cả khóa và giá trị từ $membersmảng:
$members = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
foreach ($members as $name => $age) {
  echo "$name : $age <br>";
}
