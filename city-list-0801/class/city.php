<?php
class City{
    // 資料庫連線
    private $dbConnect;
    // 建構式:自動執行函數
    public function __construct(){
        $db = new Database();
        // 取得實際的資料庫連線
        $this->dbConnect = $db->getConnection();
    }
    // 方法
    // 1. 撈所有的city資料
    public function getAllCity(){
        $query = "SELECT * FROM city ORDER BY id DESC";
        $stmt = $this->dbConnect->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
?>