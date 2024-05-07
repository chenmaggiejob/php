<?php

session_start();
$acc = $_POST['acc'];
$pw = $_POST['pw'];

if ($acc == 'admin' && $pw == '1234') {
    //正確
    $_SESSION['login'] = $acc;
    header('location:login_result.php');
} else {
    //如果有一個不正確
    $_SESSION['error'] = '帳號或密碼錯誤';
    header("location:login.php");
}
