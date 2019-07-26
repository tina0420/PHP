<?php
//$numbers = array(array(),array(),array());
$numbers = array(array(1,2,3),
           array(4,5,6,),
           array(7,8,9));
print_r($numbers);
echo "<br>";
echo $numbers[1][0];
echo "<br>";
foreach($numbers as $row => $data){
    foreach($data as $col => $number){
        echo "數字".$number."編號(".$row.",".$col.")<br>";
    }
}
echo "<br>";
//關聯陣列
$students = array(
    "Elsa" => array(
    "Math" => 80,
    "English" => 99
    ),
    "Anna" => array(
    "Math" => 60,
    "English" => 89
    )
    );
    echo $students["Anna"]["English"];
    echo "<br>";

    foreach($students as $students => $scores){
        echo $students."<br>";
        foreach($scores as $subject => $score){
            //Math : 98分
            echo $subject.":".$score."分<br>";
        }
    }

?>