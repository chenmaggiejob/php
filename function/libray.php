<?php

//在頁面上快速顯示陣列內容
function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

/**
 * 使用迴圈來畫星星
 * @param $star 正三角形的星星數量
 * @param $shape 形狀名稱,字串
 * @param $stars 有形狀變化的星星,數值
 */
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