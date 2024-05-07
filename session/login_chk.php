<?php
$acc = $_POST['acc'];
$pw = $_POST['pw'];

if ($acc == 'admin' && $pw == '1234') {
//正確
header('location:login_result.php?acc='.$acc );
} else {
    header("location:login_error.php?acc=".$acc);
}

?>