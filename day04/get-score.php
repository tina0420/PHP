<?php
$chinese = $_POST['chinese'];
$english = $_POST['english'];
$math = $_POST['math'];
$total = $chinese + $english + $math;

//平均四捨五入至小數點後幾位
$avg = round($total/3,2);

echo "國文成績:".$chinese."分<br>";
echo "英文成績:".$english."分<br>";
echo "數學成績:".$math."分<br>";
echo "總分:".$total."分<br>";
echo "平均:".$avg."分<br>";
?>