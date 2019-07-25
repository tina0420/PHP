<?php
$number = 10;
if($number%2 === 0){
    if($number > 5){
        echo "這是一個大於5的偶數";
    }else{
        echo "這是一個小於5的偶數";
    }
}else{
    if($number > 5){
        echo "這是一個大於5的奇數";
    }else{
    echo "這是一個小於5的奇數";
}
}

echo "<br>";
//三元運算子(精簡版if else)
// >=60 -> "及格" ; ->"不及格"
$score =  59;
$isPass = ($score>=60)?"及格" : "不及格";
echo $score."分<br>".$isPass;

echo "<br>";
//練習
$score = 93;
echo $score."<br>"; 
if($score >= 90){
    $grade = "A+";
}elseif($score  >= 80){
    $grade = "A";
}elseif($score >= 70){
    $grade = "B+";
}elseif($score >= 60){
    $grade = "B";
}else{
   $grade = "C";
}
echo $grade;



?>