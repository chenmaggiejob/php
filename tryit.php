<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tryit</title>
</head>
<body>
<h1>網頁傳值練習</h1>

<h2>BMI 計算</h2>

<ul>
    <li>建立一個可以輸入身高和體重的表單畫面</li>
    <li>按下"計算BMI"按鈕後，在另一個頁面顯示BMI值</li>
</ul>
<br>
<h3>POST</h3>
<form action="tryit_result.php" method="POST">
    <div>
        <label for="height">身高</label>
        <input type="number" name="height" id="">
    </div>
    <div>
        <label for="weight">體重</label>
        <input type="number" name="weight" id="">
    </div>
    <div>
        <input type="submit" value="送出資料">
        <input type="reset" value="清除資料">
    </div>
</form>
</body>
</html>