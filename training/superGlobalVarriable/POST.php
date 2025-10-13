<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- $_SERVER["PHP_SELF"]là biến siêu toàn cục trả về tên tệp của tập lệnh đang thực thi.
  Vì vậy, dữ liệu biểu mẫu đã gửi sẽ được gửi đến chính trang đó, thay vì chuyển sang một trang khác. 
  -->
  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
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
Nếu là GET, sau khi submit form thì thông tin username password sẽ hiện hết lên URL
Vì vậy, dùng POST sẽ tránh được lộ thông tin
*/
var_dump($_POST); // array(2) { ["username"]=> string(3) "111" ["password"]=> string(3) "222" }
echo "<br>";
echo $_POST["username"] . "<br>";
echo $_POST["password"];
