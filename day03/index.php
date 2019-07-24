<?php
    //遞增、遞減運算子
    $a = 3;
    //希望把$a遞增結果丟到$b去
    // ++放目標變數後面-> 1.原本的a存到b 2. $a++
    // ++放目標變數前面-> 1.++$a遞增 2.把a指派到b
    //反正就是執行順序不同就對了
    // --也是同樣道理
    $b = $a++;
    echo "a:".$a;
    echo "<br>";
    echo "b:".$b;
    
    echo "<br>";
    //練習
    $chinese = 70;
    $english = 60;
    $math = 80;
    $sum = $chinese + $english + $math;
    //指定小數取到第幾位 ex:四捨五入
    $average = round($sum/ 3,2);

    echo "國文成績: $chinese 分 <br>";
    echo "英文成績: $english 分<br>";
    echo "數學成績: $math 分<br>";
    echo "總分為:  $sum 分<br>";
    echo "平均為: $average 分<br>";

    $data1 = 10;
    $data2 = 20;
    $result = ($data1 > $data2);
    // 用var_dump得知 $result 是true或false
    // bool->Boolean布林值 T or F
    var_dump($result);
    
    echo "<br>";
    $data3 = 100;
    $data4 = "100";
    echo "data3 和data4 一樣嗎?<br>";
    // == 寬鬆檢查->只比較值是否相等
    // === 嚴格檢查->值和型態都要相等
    var_dump($data3 == $data4);
    echo "<br>";
    var_dump($data3 === $data4);
    echo "<br>";
    // != 寬鬆不相等、值不相等
    // !== 嚴格不相等、值和型態不相等
    var_dump($data3 != $data4);
    echo "<br>";
    var_dump($data3 !== $data4);

    echo "<br>";
    $data5 = 25;
    // && 是'且'的意思
    echo "data5之值為25<br>";
    echo "data5 是否比0大，而且比50小嗎?<br>";
    var_dump($data5 > 0 && $data5 < 50);
    echo "<br>";
    echo "data5 是否比0大，而且小於20?<br>";
    var_dump($data5 > 0 && $data5 < 20);
    // || 是'或'的意思，只要一個是true回傳true
    echo "<br>";
    echo "data5是否比0大，或者小於20?<br>";
    var_dump($data5 >0 || $data5 <20);


?>