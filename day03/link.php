<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- <a href="result.php?id=1">Link1</a>
    <a href="result.php?id=2">Link2</a> -->

     <h3>查詢國家首都</h3>
    <form action="result.php" method="GET">
        <p>
            <input type="text" name="country" required>  
        </p>
        <p>
            <label for="">請選顏色</label>
            <select name="color" id="color">
                <option value="red">紅色</option>
                <option value="blue">藍色</option>
                <option value="black">黑色</option>
            </select>
        </p>
        
       
        <input type="submit" value="查詢">

    
    </form>
</body>
</html>