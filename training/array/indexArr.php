<?php
$cars_old = array("Volvo", "BMW", "Toyota"); // cú pháp cũ PHP 3
$cars = ["Volvo", "BMW", "Toyota"]; // cú pháp mới PHP 5.4 (2012)


echo $cars[1];
$cars[1] = "Ford";
var_dump($cars);

foreach ($cars as $car) {
  echo "$car<br>";
}

// ------

$cars[5] = "Volvo";
$cars[7] = "BMW";
$cars[14] = "Toyota";

echo $cars[5];
