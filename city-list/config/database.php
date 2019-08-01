<?php
class Database{
    public $connect;

    public function getConnection(){
        $this->connect = new PDO("mysql:host=localhost;port=3307;dbname=country_db", "root", "");
        return $this->connect;
    }
}
?>