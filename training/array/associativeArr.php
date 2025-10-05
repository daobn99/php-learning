<?php

/* Associative Arrays: Mảng liên kết là mảng sử dụng các khóa được đặt tên 
mà bạn gán cho chúng.
*/

$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
print_r($car); // in được array
var_dump($car); // in bằng check type này cũng được

$car = [
  "brand" => "Ford",
  "Model" => "Mustang",
  "Year" => 1964
];
echo $car["brand"]; // Ford
// có thể sử dụng cả dấu ngoặc kép và dấu ngoặc đơn khi truy cập vào một mảng:
// echo $car['brand'];

$car["Year"] = 1975;
echo $car["Year"]; // 1975


foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}
