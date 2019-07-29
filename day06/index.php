<?php
//定義(設計)函數(function)
//兩數相加的函數
function addTwoNumbers($a,$b){
    $total = $a+ $b;
    return $total;
}
//呼叫(使用)函數
$sum = addTwoNumbers(3,4);
echo $sum."<br>";

//定義計算折扣價格的函數
//0.9為預設值(當你沒有特別指定要幾折的時候會帶入0.9)
function discount($price, $percent = 0.9){
    return $price * $percent;
}
//呼叫函數
$originalPrice = 100;                  //有指定0.8，則帶入0.8
$discountPrice = discount($originalPrice , 0.8);
echo $discountPrice."元<br>";

//定義一個針對陣列中各個價格作打折的函數
function getDiscountPrice($prices){
    $discountResults = array();
   //$discountResults = [];
    for($i = 0; $i < count($prices); $i++){
    $discountResults[$i] = $prices[$i] * 0.8;
}
    return $discountResults;
}

//呼叫函數
$oriPrices = array(300,1000,500);
$discountPrice = getDiscountPrice($oriPrices);
print_r($discountPrice);
echo "<br>";

//陣列內容轉為字串
echo implode(",",getDiscountPrice($oriPrices));

?>