<?php
echo strlen("Hello world!"); // 12
echo str_word_count("Hello world!"); // 2

$x = "Hello World!";
echo strtoupper($x); // trả về in hoa
echo strtolower($x);

echo str_replace("World", "Dolly", $x); // Hello Dolly!

var_dump($x); // string(12) "Hello World!"
var_dump(is_string("hello")); // true 
