<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <form action="?" method="post">

        <input type="text" name='code' placeholder="請輸入股票代號">
        <input type="submit" value="查詢">
    </form>
    <div class="stock">
        <?php
        if (isset($_POST['code'])) {

            $stock = file_get_contents("https://mis.twse.com.tw/stock/api/getStockInfo.jsp?ex_ch=tse_{$_POST['code']}.tw&json=1&delay=0&_=1723619820256&lang=zh_tw");
            $stock = json_decode($stock);
            echo "股票代號：" . $stock->msgArray[0]->c . "<br>";
            echo "股票名稱：" . $stock->msgArray[0]->n . "<br>";
            echo "成交價:" . $stock->msgArray[0]->z;
        }


        ?>
    </div>
</body>

</html>