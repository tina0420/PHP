<?php
$fruits["apple"] = "蘋果";
$fruits["lemon"] = "檸檬";
$fruits["banana"] = "香蕉";
$input = $_POST["word"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>查詢結果</h3>
    <?php
    //可能解果:1.輸入英文 2.輸入中文 3.查不到 (英文是key 中文是值)
    if(array_key_exists($input,$fruits)){
        $english = $input;
        $chinese = $fruits[$input];
        echo "英文:".$english."<br>中文:".$chinese;
    }elseif(in_array($input,$fruits)){
        $english = array_search($input,$fruits);
        $chinese = $input;
        echo "英文:".$english."<br>中文:".$chinese;
    }else{
        echo "查無此水果<br>";

    }
    ?>
    <a href="./index.php"></a>
</body>
</html>