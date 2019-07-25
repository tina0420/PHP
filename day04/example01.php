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

echo "<br>";
//for loop
for($index = 1;$index <= 10;$index++){
    echo $index."<br>";
}

$total = 0;
for($index=1;$index<=10;$index++){
    $total = $total + $index;
    // 寫$total += $index; 也可以
}
echo "總和為:".$total;

echo "<br>";
//練習

for($index=3;$index<104;$index+=2){
    echo $index." ";
}

echo "<br>";
//印出01246789字串 跳過35
$text = "";
for($i=0; $i<10; $i++){
    if($i === 3 || $i === 5){
        continue;
    }else{
       $text.=$i;
    }
}
echo $text;
echo "<br>";

//while
$sum=0;
$j=1;
while($j <=10){
    $sum = $sum+$j;
    $j++;
}
echo "總和:".$sum."<br>";
echo "j:".$j;
echo "<br>";

//練習1
$total=0;
for($num=1; $num <=100; $num++){
    if($num%4 !== 0){
        continue;
    }else{
        echo $num." ";
        $total = $total + $num;
       
    }
}
echo "<br>總和為:".$total;
echo "<br>";

//練習2
$count=1;
for($n=1; $n<=50; $n++){
    if($count<=9){
        if($n%3 === 0){
            echo "第".$count."個3的倍數:".$n."<br>";
            $count ++;
        }else{
            continue;
        }

    }else{
        break;
    }
}

?>