<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo$_SERVER['PHP_SELF']?>" method="POST">
        <h3>請選擇顏色</h3>
        <p>
            <input type="checkbox" name="colors[]" id="red" value="red">
            <label for="red">紅色</label>
            <input type="checkbox" name="colors[]" id="yellow" value="yellow">
            <label for="yellow">黃色</label>
            <input type="checkbox" name="colors[]" id="blue" value="blue">
            <label for="blue">藍色</label>
        </p>
        <input type="submit" value="送出" name="submit">
    
    </form>
<?php
    if(isset($_POST['submit'])){
        if(empty($_POST['colors'] )){
            echo "沒有選顏色";
        }else{
            foreach($_POST['colors'] as $color){
                echo $color."<br>";
            }
        }
    }

?>

</body>
</html>