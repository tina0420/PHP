<?php
    
    //註解2條/
    $a = 1;
    $b = 5;
    $firstName="Harry ";
    $lastName="Potter";
    
    //<br>換行標籤
    echo $a."<br>";
    //字串相連 串接運算子 .
    echo $firstName.$lastName."<br>";
    echo $a+$b."<br>";
    var_dump($a)."<br>";
    //文字時""或''都可以

    $greeting = "Hello!";
    echo "$greeting 很高興認識你!<br>";
    echo $greeting."很高興認識你!<br>";
    echo '$greeting 很高興認識你!';
    echo "'I'm happy";
    echo "<br>";
    echo 'I\'m happy!';

    //練習
    $name = "Elsa";
    $age = 18;
    echo "我的名字是 $name<br>";
    echo "我今年 $age 歲";
?>