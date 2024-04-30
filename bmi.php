<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算BMI</title>
</head>
<body>
    <h1>計算BMI</h1>
    <!-- form>div*2>label+input:number -->
    <h2>POST</h2>
    <form action="bmi_result.php" method='POST'>
        <div>
            <lable for ="height">身高:</lable>
            <input type = "number" name="height" id="">
        </div>
        <div>
            <lable for = "weight">體重:</lable>
            <input type="number" name="weight" id="">
        </div>
        <div>
            <input type="submit" value="開始計算">
            <input type="reset" value="清除重算">
        </div>
    </form>
    <br>
    <h2>GET</h2>
    <form action="bmi_result.php" method='GET'>
        <div>
            <lable for ="height">身高:</lable>
            <input type = "number" name="height" id="">
        </div>
        <div>
            <lable for = "weight">體重:</lable>
            <input type="number" name="weight" id="">
        </div>
        <div>
            <input type="submit" value="開始計算">
            <input type="reset" value="清除重算">
        </div>
    </form>
    
</body>
</html>