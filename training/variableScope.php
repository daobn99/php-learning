<?php
$x = 5;
$y = 10;

$k = 2;

function myTest()
{
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; // z = 15
  global $k; // Từ global được sử dụng để truy cập biến toàn cục từ bên trong một hàm
  $GLOBALS['z'] = $GLOBALS['z'] + $k;  // z = 17
}

myTest();
echo $z; // outputs 15

// -------------------------

// function myTest2()
// {
//   $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; // z = 15
//   global $q; // Từ global được sử dụng để truy cập biến toàn cục từ bên trong một hàm
//   $q = 5;
//   $GLOBALS['z'] = $GLOBALS['z'] + $q;  // z = 17
//   $m = 2;
// }

// myTest();
// echo $z; // outputs 15
// // echo $GLOBALS['m'];
// echo $q;


global $name;
$name = "dao";
if ($name === "dao") {
  echo "hello " . $name;
}
