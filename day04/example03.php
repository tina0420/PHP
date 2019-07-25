<?php
$products = array("iphone6"=>22500,
                          "iphone7"=>24500,
                          "iphone8"=>26500);
$input = "iphone8";
// 用array_key_exists查詢key是否在陣列中
if(array_key_exists($input,$products)){
    echo $input."的價格是".$products[$input]."元";
}else{
    echo "查無此手機";
}



?>