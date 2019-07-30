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
echo "<br>";

//日期相關的函數
echo date("Y/m/d H-i-s");
echo "<br>";

//練習
$year = date("Y")-1911;
$month = date("n");
$date = date("d");
$hour = date("H");
$minute = date("i");
$second = date("s");
$timaSlot = (date("a") === "am")?"早上":"下午"; //問題true救回傳"早上"

// if(date("a" === "am")){
//     $tinaSlot = "早上";
// }else{
//     $timaSlot = "下午";
// }
echo "今年是民國".$year."年".$month."月".$date."日<br>";
echo "現在是".$timaSlot.$hour."點".$minute."分".$second."秒<br>";


//時間(秒) mktime(時,分,秒,月,日,年)
$targetTimestamp = mktime(0,0,0,12,31,2019);
echo $targetTimestamp;

//絕對秒數再推回日期時間格式
$dateTime = date("Y/m/d H:i:s", $targetTimestamp);
echo "<br>".$dateTime."<br>";

//取得跨年到數日的絕對秒數 (此刻到倒數日)
$eventDate = mktime(0,0,0,01,01,2020);

//取得目前的絕對秒數
$currentTime = date('U');

//計算剩下幾天(秒)
$daysLeft = $eventDate - $currentTime;
echo $daysLeft;
//秒數轉成天
           //floor 把不足一天的給捨棄掉
$daysLeft = floor($daysLeft/60/60/24);
echo "<br>距離跨年還剩下".$daysLeft."天";

?>