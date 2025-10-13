<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="get">
    <label>username:</label><br>
    <input type="text" name="username"><br>
    <label>password:</label><br>
    <input type="password" name="password"><br>
    <input type="submit" value="Login">
  </form>
</body>

</html>
<?php
/*
bản chất những supperglobals như $_GET, $_POST, $_REQUEST, $_SERVER,... là những array liên kết (Associative Arrays).
vì vậy có thể truy cập bằng $_METHODNAME["tên index"] 
VD: $_GET hiện tại là array có 2 phần tử là username và password và có thể check bằng var_dump
*/
var_dump($_GET); // array(2) { ["username"]=> string(3) "111" ["password"]=> string(3) "222" }
echo "<br>";
echo $_GET["username"] . "<br>";
echo $_GET["password"];
