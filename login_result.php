<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menber center</title>
</head>
<body>
    <h2>登入成功</h2>
<!-- <?php

$acc= $_GET['acc'];

?> -->

<!-- 直接echo的速寫法 -->
歡迎<?=$_GET['acc'];?>
<br>
<a href="login.php?login=1" >回登入頁</a>
    
</body>
</html>