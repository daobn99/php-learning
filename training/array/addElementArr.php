<?php
// To add items to an existing array, you can use the bracket [] syntax.
$fruits = ["Apple", "Banana", "Cherry"];
$fruits[] = "Orange"; // thêm orange vào cuối
print_r($fruits);

array_push($fruits, "Kiwi", "Lemon"); // thêm một lúc nhiều phần tử
print_r($fruits);

$cars = ["brand" => "Ford", "model" => "Mustang"];
$cars["color"] = "red"; // thêm color => red vào cuối
print_r($cars);

/*
PHP array không phải là mảng thông thường (array).
Nó là một ordered map — nghĩa là vừa có thể là list, vừa có thể là dictionary.

Thực tế trong laravel dùng collect (giống List collections trong java)
$users = collect(['Alice', 'Bob', 'Charlie']);
*/