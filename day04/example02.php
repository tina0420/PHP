<?php
$colors = array("Red","Blue","Yellow");
//如國楣特定指定 就[]而已 會直接在後面
$colors[] = "Black";
echo $colors[3];

//陣列有幾個元素 1.count() 2.sizeof()
echo "<br>陣列裡面有".count($colors)."個顏色<br>";
//利用for迴圈把陣列中的資料逐一列出
for($index=0; $index < sizeof($colors); $index++){
    echo $colors[$index]." ";
}

echo "<br>";
//foreach
foreach($colors as $key => $color){
    echo "編號".$key."是".$color."<br>";
}

//關聯陣列 自訂索引 用foreach
$products = array("iphone6"=>22500,
                  "iphone7"=>24500,
                  "iphone8"=>26500);
foreach($products as $iphone => $price){
    echo $iphone."售價是".$price."元<br>";
}
?>