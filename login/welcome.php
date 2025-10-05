<?php
session_start();

// Nếu chưa login, quay về trang login
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit;
}

// Lấy username để hiển thị
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>

<body>
    <h2>Welcome, <?= htmlspecialchars($username) ?>!</h2>
    <p>Bạn đã login thành công.</p>
    <form method="POST" action="logout.php">
        <button type="submit">Logout</button>
    </form>
</body>

</html>