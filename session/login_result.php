<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menber center</title>
</head>

<body>
    <h2>登入成功</h2>
    <?php

    session_start();

    ?>

    <!-- 直接echo的速寫法 -->
    歡迎<?= $_SESSION['login']; ?>
    <p>
        <a href="login.php">回登入頁</a>
        <br>
        <a href="logout.php">登出帳號</a>
    </p>
</body>
</html>