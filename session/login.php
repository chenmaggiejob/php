<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loging-session</title>

</head>

<body>

    <h1>請登入使用者帳號密碼</h1>
    <?php
    session_start();
    if (isset($_SESSION['login']) && $_SESSION['login'] == "admin") {

        echo "已登入";
        echo "<br>";
        echo "<a href='logout.php'>登出</a>";
    } else {

        if (isset($_SESSION['error'])) {
            echo "<span style='color:red'>{$_SESSION['error']}</span>";
        }

    ?>

        <form action="login_chk.php" method="POST">
            <div>
                <label for="acc">帳號</label>
                <input type="text" name="acc" id="acc">
            </div>
            <div>
                <label for="pw">密碼</label>
                <input type="password" name="pw" id="pw">
            </div>
            <div>
                <input type="submit" value="登入">
                <input type="reset" value="清除重填">
            </div>
        </form>

    <?php
    }
    ?>

</body>

</html>