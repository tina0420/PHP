<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="get-score.php" method="POST">
    <P>
        <label for="chinese">國文成績</label>
        <input type="text" name="chinese" id="chinese">
    </P>
    <P>
        <label for="english">英文成績</label>
        <input type="text" name="english" id="english">
    </P>
    <P>
        <label for="math">數學成績</label>
        <input type="text" name="math" id="math">
    </P>
    <p>
       <input type="submit" value="提交">
    </p>
    </form>
</body>
</html>