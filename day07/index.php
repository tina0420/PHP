<?php
//trim:去除字串前後空白
$test = "  Hello  ";
var_dump($test);
$trimStr = trim($test);
echo "<br>";
var_dump($trimStr);

//字串長度(有幾個字元)
$strLength = strlen($trimStr);
echo "<br>字串長度:".$strLength;

//從指定位置，擷取部分字串
$subString = substr($trimStr,1,3); //取Hello的ell
echo "<br>".$subString."<br>";

//explode: 分割字串轉乘陣列
//explode('以什麼符號分隔',$string)
$url = "www.google.com.tw";
$urlArr = explode(".",$url);
print_r($urlArr);


?>