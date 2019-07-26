
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php foreach($data as $item):?>
    <li><?= $item?></li> //中間= 就是代表php echo
    <?php endforeach?>
    
    </ul>
<?php
    // echo "<ul>";
    //     foreach($data as $item){
    //         echo "<li>".$item."</li>";
    //     }
    // echo "/<ul>";
?>
</body>
</html>