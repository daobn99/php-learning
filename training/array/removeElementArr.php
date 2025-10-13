<?php
/*
 array_splice()hàm này sẽ sử dụng tham số độ dài cho phép bạn chỉ định số lượng mục cần xóa.
*/
$cars = ["Volvo", "BMW", "Toyota"];
array_splice($cars, 1, 2); // bạn chỉ định chỉ mục (bắt đầu từ đâu) và số lượng mục bạn muốn xóa.
print_r($cars);

/*
Hàm unset() xóa nhưng không lập lại index cho mảng.
VD nếu xóa một phần tử ở vị trí chỉ mục 1, các phần tử khác (vd: ở vị trí chỉ mục 0, 2, 3, v.v.) 
sẽ giữ nguyên chỉ mục ban đầu
*/
$fruits = ["Apple", "Banana", "Cherry", "Lemon", "Kiwi"];
unset($fruits[1], $fruits[2]);  // xóa vị trí 1 và 2 mà ko lặp lại index cho mảng
print_r($fruits); // [0] => Apple, [3] => Lemon, [4] => Kiwi

$cars2 = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars2["model"]);
print_r($cars2);

array_pop($cars); // xóa index cuối
array_shift($cars); // xóa index đầu