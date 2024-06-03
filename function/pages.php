<?php
include_once "base.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php


    $total = $Student->count();
    echo $total;
    $div = 20;
    $pages = ceil($total / $div);
    // $now = (isset($_GET['p']))?: 1;
    $now = $_GET['p'] ?? 1;
    $start = ($now - 1) * $div;
    $rows = $Student->all([], " limit $start, $div ");

    foreach ($rows as $row) {
        echo $row['name'] . "<br>";
    }
    ?>

    <hr>

    <?php
    for ($i = 1; $i <= $pages; $i++) {
        echo "<a href='?p= $i'> $i </a>";
    }
    ?>
</body>

</html>