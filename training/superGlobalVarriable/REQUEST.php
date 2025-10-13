<!DOCTYPE html>
<html>

<body>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="fname">
    <input type="submit">
  </form>

</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // htmlspecialchars để escape ký tự đặc biệt tránh XSS
  $name = htmlspecialchars($_REQUEST['fname']);
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo "Hello $name";
  }
}
/*
$_REQUEST là một mảng chứa tổng hợp của $_GET, $_POST, và $_COOKIE (theo thứ tự cấu hình variables_order trong php.ini).
Trong ví dụ, $_REQUEST['fname'] sẽ trả về giá trị fname nếu nó được gửi qua POST (vì form method="post"), nhưng cũng có thể lấy được từ GET hoặc Cookie nếu tồn tại.
Lưu ý: nên dùng trực tiếp $_POST['fname'] khi bạn biết chắc form dùng POST — rõ ràng và an toàn hơn.
*/
?>