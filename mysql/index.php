<style>
    * { 
        box-sizing: border-box;
    }

    table {

        border-collapse: collapse;
    }

    td {
        padding: 5px 10px;
        border: 1px solid gray;
    }
</style>
<a href="./insert.php"> 新增學員 </a>

<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=school";
$pdo = new PDO($dsn, 'root', '');

$sql = "SELECT * FROM `students` where `id` < 30 ";
$db = $pdo->query($sql);
$rows = $db->fetchAll();

// echo "<pre>";
// print_r($rows);
// echo "</pre>";


echo "<table border ='1'>";
echo "<tr>";
    echo "<td>id</td>";
    echo "<td>學號</td>";
    echo "<td>姓名</td>";
    echo "<td>生日</td>";
    echo "<td>身分證字號</td>";
    echo "<td>地址</td>";
    echo "<td>父母</td>";
    echo "<td>電話</td>";
    echo "<td>科系</td>";
    echo "<td>畢業學校</td>";
    echo "<td>畢業狀態</td>";
    
foreach ($rows as $row) {
    echo "<tr>";
    echo "<td>{$row['id']}</td>";
    echo "<td>{$row['school_num']}</td>";
    echo "<td>{$row['name']}</td>";
    echo "<td>{$row['birthday']}</td>";
    echo "<td>{$row['uni_id']}</td>";
    echo "<td>{$row['addr']}</td>";
    echo "<td>{$row['parents']}</td>";
    echo "<td>{$row['tel']}</td>";
    echo "<td>{$row['dept']}</td>";
    echo "<td>{$row['graduate_at']}</td>";
    echo "<td>{$row['status_code']}</td>";
    
}


echo "</table>";





// $rows = $pdo -> query( $sql) -> fetch();
// echo "<pre>";
// print_r($rows);
// echo "</pre>";
