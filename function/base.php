<?php
class DB
{
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
    protected $pdo;
    protected $table;

    public function __construct($table)
    {
        $this->pdo = new PDO($this->dsn, 'root', '');
        $this->table = $table;
    }

    // public function all(...$arg)
    // {
    //     $sql = "select * from $this->table";

    //     if (!empty($arg[0]) && is_array($arg[0])) {
    //         foreach ($arg[0] as $key => $value) {
    //             $tmp[] = "`$key` = '$value'";
    //             $tmp[] = sprintf("`%s`", $key, $value);
    //         }
    //         $sql = $sql . " where " . implode(" && ", $tmp);
    //     }
    //     if (!empty($arg[1])) {
    //         $sql = $sql . $arg[1];
    //     }
    //     echo $sql;
    //     return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    // }

    // public function all(...$arg)
    // {
    //     $sql = "select * from $this->table ";

    //     if (!empty($arg[0]) && is_array($arg[0])) {
    //         $tmp = $this->array2sql($arg[0]);
    //         $sql = $sql . " where " . implode(" && ", $tmp);
    //     }
    //     if (!empty($arg[1])) {
    //         $sql = $sql . $arg[1];
    //     }
    //     echo $sql;
    //     return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    // }

    public function all(...$arg)
    {
        $sql = "SELECT * FROM $this->table ";
        $sql = $this->select($sql, ...$arg);
        //echo $sql;
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($arg)
    {
        $sql = "SELECT * FROM `{$this->table}` WHERE";

        if (is_array($arg)) {
            $tmp = $this->array2sql($arg);
            $sql .= join(" && ", $tmp);
        } else {
            $sql .= " `id` = '{$arg}'";
        }

        echo $sql;
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    function save($array)
    {
        if (isset($array['id'])) {
            //update
            //建立SQL語法
            $sql = "UPDATE `{$this->table}` SET ";

            //使用迴圈將欄位名稱和值組合成字串
            $tmp = $this->array2sql($array);
            $sql .= join(",", $tmp);
            $sql .= " WHERE `id`='{$array['id']}'";
        } else {
            //insert
            $sql = "INSERT INTO `{$this->table}` ";

            $sql .= "(`" . join("`,`", array_keys($array)) . "`)";

            $sql .= " VALUES('" . join("','", $array) . "')";
        }
        //echo $sql;
        return $this->pdo->exec($sql);
    }

    function del($arg)
    {

        $sql = "DELETE FROM `{$this->table}` WHERE ";

        if (is_array($arg)) {
            $tmp = $this->array2sql($arg);

            $sql .= join(" && ", $tmp);
        } else {
            $sql .= " `id`='{$arg}'";
        }

        return $this->pdo->exec($sql);
    }

    function math($math, $col, ...$arg)
    {
        $sql = "SELECT $math(`$col`) FROM `{$this->table}`";
        $sql = $this->select($sql, ...$arg);

        //echo $sql;
        return $this->pdo->query($sql)->fetchColumn();
    }

    // function count(...$arg)
    // {
    //     $sql = "SELECT COUNT(*) FROM `{$this->table}`";

    //     if (!empty($arg[0]) && is_array($arg[0])) {
    //         $tmp = $this->array2sql($arg[0]);
    //         $sql = $sql . " where " . implode(" && ", $tmp);
    //     }
    //     if (!empty($arg[1])) {
    //         $sql = $sql . $arg[1];
    //     }

    //     return $this->pdo->query($sql)->fetchColumn();
    // }

    function count(...$arg)
    {
        $sql = "SELECT COUNT(*) FROM `{$this->table}`";
        $sql = $this->select($sql, ...$arg);
        return $this->pdo->query($sql)->fetchColumn();
        
    }


    protected  function array2sql($array)
    {
        foreach ($array as $key => $value) {
            $tmp[] = "`$key`='$value'";
        }

        return $tmp;
    }

    protected function select($sql, ...$arg)
    {
        if (!empty($arg[0]) && is_array($arg[0])) {
            $tmp = $this->array2sql($arg[0]);
            $sql = $sql . " where " . implode(" && ", $tmp);
        }

        if (!empty($arg[1])) {
            $sql = $sql . $arg[1];
        }

        return $sql;
    }


    function q($sql)
    {
        return $this->pdo->query($sql)->fetchAll();
    }
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

$Student = new DB('students');
$Dept = new DB('dept');
// echo "<pre>";
// $data = ['code' => 505, 'name' => '人工智慧系'];
// $Dept->save($data);

// $Dept->del(4);

// $Dept->find(6);
// print_r($Dept->find(['name' => "孔琇榆"]));

// print_r($Student->all());

// $data = ['code' => 605, 'name' => '電子系', 'id' =>'8'];
// $Dept->save($data);

// $data = ['code' => 601, 'id' => 7];
// $Dept->save($data);
// echo $Student->count(['dept' => 6]);

// $dept = $Dept->find(5);
// $dept['name'] = '時尚系';
// $Dept->save($dept);
// echo "</pre>";

echo $Student->count(['dept' => 2]);
echo "<br>";
echo $Student->math('max', 'graduate_at');
?>
