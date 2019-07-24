<?php
    //索引式陣列 Indexed Array ->預設0,1,2,3...編號
    $colors = array("red","blue","green");
    $colors[3] = "black";
    echo $colors[1];
    echo"<br>";
    //顯示陣列內容到畫面上 1.用var_dump() 2.print_r()
    var_dump($colors);
    echo "<br>";
    print_r($colors);
    echo"<br>";

    //關聯式陣列 Associated Array ->自訂門牌 key=>value
    $products = array("iphone7" => 24500,
                     "iphone8" => 26500,
                     "iphoneX" =>32500);
    echo $products["iphone8"];
    echo"<br>";
    print_r($products);
    $products["iphone6"] = 22500;

    //練習 國家名=>首都名
    $capitals["Austria"] = "Vienna";
    $capitals["Japan"] = "Tokyo";
    $capitals["France"] = "Paris";
    $capitals["Germany"] = "Berlin";
    $capitals["Canada"] = "Ottawa";
    $capitals["Russia"] = "Moscow";
    
    print_r($capitals);
    echo "<br>";
    $input = "JaPan";
    $input = ucfirst(strtolower($input));
    echo $input."的首都是: ".$capitals[$input];


?>