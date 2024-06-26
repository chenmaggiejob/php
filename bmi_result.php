<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI計算結果</title>
</head>
<body>
    <h2><a href="bmi.php">計算BMI</a></h2>
    <h1>BMI計算結果</h1>
    <?php 
    echo "POST　";          
    print_r($_POST);
    echo "<br>";

    echo "GET　";
    print_r($_GET);
    echo "<br>";

    if (!empty($_POST)){                       //檢查POST是否為空值 
        if (empty($_POST['height'])){          //如果是空值，就顯示請輸入身高
            echo "請輸入身高";
        } else {                               //如果不是空值
            echo "身高" . $_POST['height'];     //輸出身高是多少 
            $height = $_POST['height'];        //將POST的值，指定給$height的變數
        }
        
        echo "<br>";
    
        if (empty($_POST['weight'])){
            echo "請輸入體重";
        } else {
            echo "體重" . $_POST['weight'];
            $weight = $_POST['weight'];
        }
        
        
    } else {

        if (!empty($_GET)){
            if (empty($_GET['height'])){
                echo "請輸入身高";
            } else {
                echo "身高" . $_GET['height'];
                $height = $_GET['height'];
            }
            
            echo "<br>";
        
            if (empty($_GET['weight'])){
                echo "請輸入體重";
            } else {
                echo "體重" . $_GET['weight'];
                $weight = $_GET['weight'];
            }
        }
    }
    echo "<br>";


    //進行BMI計算
    if (!empty($height) && !empty($weight)){
        $bmi = $weight/(($height/100)*($height/100));
        echo "你的BMI為" .round($bmi,2);
    } else {
        echo "請輸入正確的身高與體重";
    }

    ?>
    
</body>
</html>