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
    dd(find(3));

    ?>
</body>

</html>