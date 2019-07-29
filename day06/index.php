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

echo "<br>";
//練習1  計算出任意一組數字陣列中，共有幾個不重複的數字
$numbers = array(2,2,3,4,4,5,10,33,33,1,56,67);
function countDistinct($input){
    $result = array();  //初始預設一個陣列
    foreach($input as $value){
        //如果當下的數字值"還沒在"$result裡面，就放進去
        //用in_array看裡面有沒有 in_aray -> false
        //if(true) -> {}
        //false ->true 用! (邏輯運算子)
        if(!in_array($value,$result)){
            array_push($result,$value);
            //in_array
            //array_push
        }
    }
    return count($result)."個不重複數字";
 }
 echo countDistinct($numbers);
 


//練習2 practice by myself
// function getMaxMin($input){
//     for($n=0; $n<count($numbers)-1; $n++){
//         if($numbers[$n]>$numbers[$n+1]){
//             tmp = $numbers[$n];
//             $numbers[$n] = $numbers[$n+1];
//             $numbers[$n+1] = tmp;
//         }
//     }
//     $max = $numbers[count($numbers)-1];
//     $min = $numbers[0];
//     return "最大值:".$max."最小值:".$min;
//  }
//  echo getMaxMin($numbers);
 

 //練習2 teacher's code  
 //取得任意一組數字陣列中的最大值與最小值
 function getMaxMin($input){
    $max = $input[0];
    $min = $input[0];
    //檢查流程     value為位置上的值
    foreach($input as $value){
        if($value > $max){
            $max = $value;
        }
        if($value < $min){
            $min = $value;
        }
    }
    return "最大值:".$max."最小值:".$min;
 }
 echo getMaxMin($numbers);
 

?>