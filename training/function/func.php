<?php
// Bằng cách sử dụng ...toán tử trước tham số hàm, 
// hàm chấp nhận một số lượng đối số không xác định. Đây cũng được gọi là hàm biến thiên.
function sumMyNumbers(...$x)
{
  $n = 0;
  $len = count($x);
  for ($i = 0; $i < $len; $i++) {
    $n += $x[$i];
  }
  return $n;
}

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $a;
