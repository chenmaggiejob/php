<?php
$acc = $_POST['acc'];
$pw = $_POST['pw'];

if ($acc == 'admin' && $pw == '1234') {
//正確
setcookie('login',$acc,time()+60);
header('location:login_result.php');
} else {
    
    setcookie('error','帳號或密碼錯誤',time()+60);
    header("location:login.php");
}

?>