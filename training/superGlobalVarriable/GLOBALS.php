<?php
/*
Để sử dụng biến toàn cục bên trong một hàm, bạn phải định nghĩa chúng là 
biến toàn cục bằng `global` hoặc tham chiếu đến chúng bằng cách sử dụng `$GLOBALS`.

*/

$x = 75;

function myfunction()
{
  echo $GLOBALS['x'];  // để truy cập biến toàn cục x cần $GLOBALS
}

myfunction();

// --------------------------

//Tạo một biến toàn cục từ bên trong một hàm và sử dụng nó bên ngoài hàm:
function myfunction2()
{
  $GLOBALS["y"] = 100;
}

myfunction2();
// echo $GLOBALS["y"];
echo $y;
