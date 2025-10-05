<?php
// Bắt đầu session để lưu trạng thái login
session_start();

// Nếu người dùng đã login, chuyển hướng đến welcome.php
if (isset($_SESSION['username'])) {
    header('Location: welcome.php');
    exit;
}

// Biến thông báo lỗi
$error = '';

// Kiểm tra form submit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ form
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Dữ liệu đăng nhập mẫu (username: admin, password: 123)
    if ($username === 'admin' && $password === '123') {
        $_SESSION['username'] = $username;
        header('Location: welcome.php');
        exit;
    } else {
        $error = 'Sai username hoặc password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>
    <?php if ($error): ?>
        <p style="color:red"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
    <form method="POST" action="">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>

</html>