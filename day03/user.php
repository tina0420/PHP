<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="getInfo.php" method="POST">
    <p>
        <label for="user-name">名字</label>
        <input type="text" name="user-name" id="user-name">
    </p>
    <p>
        <input type="radio" name="gender" value="male" id="male">
        <label for="male">男生</label>
        <input type="radio" name="gender" value="female" id="female">
        <label for="female">女生</label>
    </p>
    <input type="submit" value="送出">
    </form>
</body>
</html>