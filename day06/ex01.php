<?php
//預設索引陣列
$numbers = array(23,45,66,1);

echo "排序前:".implode(",",$numbers);
echo "<br>";
sort($numbers);
echo "排序後:".implode(",",$numbers);
echo "<br>Max : ".$numbers[count($numbers)-1]."<br>";

//關聯式陣列做值得排序

$scores=array(
    "Cindy"=>86,"Ben"=>76,"Anna"=>89,"Lucy"=>90,"David"=>99
 );
 
 //關聯陣列以 值 做大到小的排列
 arsort($scores);
 $k = 1;
 foreach($scores as $student => $score){
     echo "第".$k."名".$student."考了".$score."分<br>";
     $k++;
 }

 //指定範圍值(數字/小寫字母/大寫字母)
 $values = range('A','Z');

 //隨機排列陣列中的元素 shuffle()
 shuffle($values);
 print_r($values);

 //合併陣列  array_merge(陣列1,陣列2,陣列3,.....)

 echo "<br>";
 $mergedArr = array_merge(array(1,2,3),array(4,5));
print_r($mergedArr);

echo "<br>";
//隨機字串 (ex:驗證碼)
//隨機取得英文數字夾雜的字串
//1.範圍 ex:0~9,'a'~'z','A'~'Z' ->合併成同一個陣列
$charArr = array_merge(range(0,9),range('a','z'),range('A','Z'));
//2.洗牌
shuffle($charArr);
echo implode(" ",$charArr);
echo "<br>";
//3.總共要幾個 ex:前10個
$randomString = array_slice($charArr,0,10);
               //array_slice(誰,從哪一個開始,總共要幾個)
//4陣列轉字串
$randomString = implode(" ", $randomString);
echo $randomString;
echo "<br>";

//從指定範圍取得一個數字
echo rand(0,9);
echo "<br>";

//練習
//統計骰子機率
$times = 1000;
$result = array("1" => 0,"2" => 0,"3" => 0,
                "4" => 0,"5" => 0,"6" => 0);

                //array_fill() -> $result = array_fill(1,6,0);
                //建立1到6的key，裡面的值都放0
//for迴圈跑1000次
for($i = 0; $i < $times; $i++){
    $randomNumber = rand(1,6);
    $result[$randomNumber]++; //計算出現幾次
}
//印出統計用的result
foreach($result as $key => $value){
    //機率
    $rate = ($value / $times)*100;
    echo "擲到".$key."的次數為".$value."。"."機率為".$rate."%<br>";

}
?>