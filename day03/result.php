<?php
   // print_r($_GET);
    //echo "你點了連結".$_GET['id'];

    //查詢表單
    $capitals["Austria"] = "Vienna";
    $capitals["Japan"] = "Tokyo";
    $capitals["France"] = "Paris";
    $capitals["Germany"] = "Berlin";
    $capitals["Canada"] = "Ottawa";
    $capitals["Russia"] = "Moscow";

    $input = $_GET['country'];
    echo "查詢結果: ".$capitals[$input];
    $color = $_GET['color'];
    echo"<br>";
    echo "你選的顏色是: ".$color;
?>