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

//finds 的 func 精簡版
function findsabbr($table, $arg)
{
    global $pdo;

    $sql = "SELECT * FROM `{$table}` WHERE ";

    if (is_array($arg)) {

        foreach ($arg as $key => $value) {
            $tmp[] = " `$key` = '{$value}' ";
        }

        $sql .= join(" && ", $tmp);
    } else {

        $sql .= " `id` = '{$arg}' ";
    }

    //echo $sql;
    $row = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

    return $row;
}

//將update與insert整合版
function save($table, $array)
{

    if (isset($array['id'])) {
        //update
        update($table, $array, $array['id']);
    } else {
        //insert
        insert($table, $array);
    }
}

function update($table, $cols, $arg)
{
    global $pdo;

    $sql = "UPDATE `{$table}` SET ";

    foreach ($cols as $key => $value) {
        $tmp[] = "`$key`='{$value}'";
    }

    $sql .= join(",", $tmp);

    if (is_array($arg)) {
        foreach ($arg as $key => $value) {
            $tt[] = "`$key`='{$value}'";
        }

        $sql .= " WHERE " . join(" && ", $tt);
    } else {
        $sql .= " WHERE `id`='{$arg}'";
    }

    return $pdo->exec($sql);
}

function insert($table, $cols)
{
    global $pdo;

    $sql = "INSERT INTO `{$table}` ";

    $sql .= "(`" . join("`,`", array_keys($cols)) . "`)";

    $sql .= " VALUES('" . join("','", $cols) . "')";

    return $pdo->exec($sql);
}

function del($table, $arg)
{
    global $pdo;

    $sql = "DELETE FROM `{$table}` WHERE ";

    if (is_array($arg)) {
        foreach ($arg as $key => $value) {
            $tmp[] = "`$key`='{$value}'";
        }

        $sql .= join(" && ", $tmp);
    } else {
        $sql .= " `id`='{$arg}'";
    }

    return $pdo->exec($sql);
}

//將foreach 提取出來變成FUNC 使用
function array2sql($array)
{
    foreach ($array as $key => $value) {
        $tmp[] = "`$key`='$value'";
    }

    return $tmp;
}

//將 return $pdo->query($sql)->fetchAll(); 提取出來變成 func 使用
function q($sql)
{
    global $pdo;
    return $pdo->query($sql)->fetchAll();
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
