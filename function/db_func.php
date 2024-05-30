<?php

$dsn = "mysql:host=localhost;charset=utf8;dbname=school";
$pdo = new PDO($dsn, 'root', '');

function all($table, $where)
{
    global $pdo;
    $sql = "SELECT * FROM `{$table}` {$where}";
    $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function find($table, $id)
{
    global $pdo;
    $sql = "SELECT * FROM `{$table}` WHERE `id`='{$id}'";
    $row = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function finds($table, $arg)
{
    global $pdo;
    if (is_array($arg)) {
        foreach ($arg as $key => $value) {
            $tmp[] = "`$key`='{$value}'";
        }
        $sql = "SELECT * FROM `{$table}` WHERE " . join(" && ", $tmp);
    } else {
        $sql = "SELECT * FROM `{$table}` WHERE `id`='{$arg}'";
    }

    //echo $sql;
    $row = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

    return $row;
}


/**
 * 在頁面上快速顯示陣列內容
 * direct dump
 * @param $array 輸入的參數需為陣列
 */
function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
