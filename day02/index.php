<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    <h1 class="title" id="main-title">main_title</h1>
    <h2 class="title">title</h2>
    <h3 class="title">title</h3>
     
    <!-- 表單 -->
    <form action="" method="post">
        <p> 
        <!-- p標籤可以自己佔一整排 -->
            <label for="phone">電話</label>
            <input type="text" name="phone" id="phone" placeholder="09xx-xxx-xxx">
        </p>
           
        <p>
            <label for="address">地址</label>
            <input type="text" name="address" id="address">
        </p>
 
         <!-- 單選題 -->
        <p>
        <!-- span行內文字標籤:與其他行內標籤一起 -->
        <span>性別</span>
        <input type="radio"name="gender" value="male" id="male">
        <label for="male">男</label>
        <input type="radio"name="gender" value="female" id="female">
        <label for="female">女</label>
        </p>

        <!-- 複選題 -->
        <p>
            <span>選擇食物(多選)</span>
            <input type="checkbox" name="food" value="pizza" id="pizza">
            <label for="pizza">Pizza</label>
            <input type="checkbox" name="food" value="sushi" id="sushi">
            <label for="sushi">壽司</label>
            <input type="checkbox" name="food" value="hamburger" id="hamburger">
            <label for="hamburger">漢堡</label>
        </p>
       <!-- 下拉選單 -->
       <p>
           <label for="sport">選一種運動</label>
           <select name="sport" id="sport">
           <option value="basketball">籃球</option>
           <option value="baseball">棒球</option>
           <option value="swimming">游泳</option>
           </select>
       </p>
       <input type="submit" value="送出">
    </form>

     <br>

    <!--  123表格  -->
    <table border="2px">  
    <tr>
        <td colspan="3">1</td>
    </tr>
    <tr>
        <td rowspan="2">4</td>
        <td>5</td>
        <td>6</td>
    </tr>
    <tr>
        <td>8</td>
        <td>9</td>
    </tr>
    
    <!--  表格練習  -->
    <table border="1px">
    <br>
    <tr>
        <td rowspan="2" colspan="2">囚犯賽局</td>
        <td colspan="2">犯人A</td>
    </tr>
    <tr>
        <td>招供</td>
        <td>不招</td>
    </tr>
    <tr>
        <td rowspan="2">犯人B</td>
        <td>招供</td>
        <td>各判刑5年</td>
        <td>A:1年;b:10年</td>
    </tr>
    <tr>
        <td>不招</td>
        <td>A:1年;B:10年</td>
        <td>各判3年</td>
    </tr>
    </table>
  
</body>
</html>