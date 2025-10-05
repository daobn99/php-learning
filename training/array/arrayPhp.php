<?php
/*
Các mục trong mảng có thể có bất kỳ kiểu dữ liệu nào.
Phổ biến nhất là chuỗi và số (int, float), 
nhưng các mục mảng cũng có thể là đối tượng, hàm hoặc thậm chí là mảng.
*/

// function example:
function myFunction()
{
  echo "This text comes from a function";
}

// create array:
$myArr = array("Volvo", 15, ["apples", "bananas"], "myFunction");

// calling the function from the array item:
$myArr[3]();
