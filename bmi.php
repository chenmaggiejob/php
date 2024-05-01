<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算BMI</title>
</head>

<body>
    <h2><a href="index.html">index</a></h2>

    <h1>計算BMI</h1>
    <!-- form>div>label+input:number -->
    <h3>POST</h3>
    <form action="bmi_result.php" method='POST'>
        <div>
            <label for="height">身高:</label>
            <input type="number" name="height" id="">
        </div>
        <div>
            <label for="weight">體重:</label>
            <input type="number" name="weight" id="">
        </div>
        <div>
            <input type="submit" value="開始計算">
            <input type="reset" value="清除重算">
        </div>
    </form>
    <br>
    <h3>GET</h3>
    <form action="bmi_result.php" method='GET'>
        <div>
            <lable for="height">身高:</lable>
            <input type="number" name="height" id="">
        </div>
        <div>
            <lable for="weight">體重:</lable>
            <input type="number" name="weight" id="">
        </div>
        <div>
            <input type="submit" value="開始計算">
            <input type="reset" value="清除重算">
        </div>
    </form>
    <br>
    <form action="">

    </form>
    <form action="bmi_result.php" method="post">
        <div>
            <label for="heiht">身高</label>
            <input type="number" name="height" id="">
        </div>
        <div>
            <label for="weight">體重</label>
            <input type="number" name="weight" id="">
        </div>
        <div>
            <input type="submit">
            <input type="reset">
        </div>
    </form>

</body>

</html>