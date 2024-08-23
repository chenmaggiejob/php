    <?php
    $data = [];
    if (isset($_POST['code'])) {
        $stock = file_get_contents("https://mis.twse.com.tw/stock/api/getStockInfo.jsp?ex_ch=tse_{$_POST['code']}.tw&json=1&lang=zh_tw");
        $stock = json_decode($stock);
        $data['code'] = $stock->msgArray[0]->c;
        $data['name'] = $stock->msgArray[0]->n;
        $data['price'] = $stock->msgArray[0]->z;
        echo json_encode($data);
    }
    ?>
