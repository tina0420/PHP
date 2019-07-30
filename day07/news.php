<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        include "./nav.php";
       
        if(isset($_GET['id'])){
             //如果點了某個消息，接收到get，引用單一篇消息的模板php檔
             $id= $_GET['id'];
             include "./read-one.php";
        }else{
             //否則就引入所有消息的頁面模板php
            include "./read-all.php";
        }
    ?>
</body>
</html>