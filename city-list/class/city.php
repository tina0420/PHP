<?php
class City{
    //資料庫連線
    private $dbConnect;
    //建構式
    public function __construct(){
        $db = new Database(); 
        //database.php -> calss
        //取得資料庫連線
        $this->dbConnect = $db->getConnection();
    }
    //方法
    //取SQL資料
    public function getAllCity(){
        $query = "SELECT * FROM city ORDER BY id DESC";
        $statement = $this->dbConnect->prepare($query);
        $statement->execute();
        return $statement;
    }
}


?>