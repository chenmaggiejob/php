<h1>start-將函式直接寫在程式碼內畫出星星</h1>
<?php

$a = ['A', 'B', 'C', 'D', 'E'];
$b = [
    '姓名' => 'M&M',
    '學號' => '1310',
    'PHP' => '雲裡霧裡',
    'CSS' => '見到曙光',
    'Bootstrap' => '懵懵'
];

dd($a);
dd($b);
star();
stars('菱形',11);

//在頁面上快速顯示陣列內容
function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function star($stars = 7)
{
    for ($i = 0; $i < $stars; $i++) {

        for ($k = 0; $k < $stars - 1 - $i; $k++) {
            echo "&nbsp;";
        }

        for ($j = 0; $j < $i * 2 + 1; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}

function stars($shape = '正三角形', $stars = 7)
{
    switch ($shape) {
        case "正三角形":
        case "equilateral triangle":
            for ($i = 0; $i < $stars; $i++) {

                for ($k = 0; $k < $stars - 1 - $i; $k++) {
                    echo "&nbsp;";
                }

                for ($j = 0; $j < $i * 2 + 1; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
            break;
        case "菱形":
            $odd = ($stars % 2 == 0) ? $stars + 1 : $stars;
            $mid = (($odd + 1) / 2) - 1;
            $tmp = 0;

            for ($i = 0; $i < $stars; $i++) {

                if ($i <= $mid) {
                    $tmp = $i;
                } else {
                    $tmp--;/*tmp=tmp-1*/
                }

                for ($k = 0; $k < $mid - $tmp; $k++) {
                    echo "&nbsp;";
                }

                for ($j = 0; $j < $tmp * 2 + 1; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
            break;
    }
}


?>