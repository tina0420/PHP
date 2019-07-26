<?php
if(empty($_POST['colors'])){
    echo "沒有選顏色";
}else{
        foreach($_POST['colors'] as $color){
            echo $color."<br>";
        }
    }

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
<?php if(empty($_POST['colors'])): ?>
    <h3>沒有選顏色</h3>
<?php else:?>
    <h3>你選的顏色是</h3>
    <ul>
    <?php foreach($_POST['colors'] as $color):?>
    <li> <?= $color?></li>
    <?php endforeach; ?>
    </ul>
<?php endif;?>
</body>
</html>