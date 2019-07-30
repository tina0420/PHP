<h3>第<?php echo $id?>篇消息</h3>
      <!-- 從news.php拿到id -->
<a href="./news.php">回首頁</a>
<?php
header("Refresh:5;URL=news.php");
echo "<p>5秒後回首頁</p>"
?>