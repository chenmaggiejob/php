<?php
include_once "db_func.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>db函式</title>
</head>
<h1>引用db函式</h1>

<body>
    <?php

    dd(all('students', " WHERE `id`<5"));
    echo "<hr>";
    dd(find('students',3));
    echo "<hr>";
    echo "finds的函式引用結果";
    dd(finds('students', ['uni_id' => 'F200000035', 'parents' => '孔進豐']));
    echo "<hr>";
    echo "findssabbr的函式引用結果";
    dd(findsabbr('students', ['uni_id' => 'F200000035', 'parents' => '孔進豐']));

    

    ?>
</body>

</html>