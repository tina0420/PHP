<?php
class Database{
    public $connect;

    public function getConnection(){
        $this->connect = new PDO("mysql:host=localhost;port=8889;dbname=country_db", "root", "root");
        return $this->connect;
    }
}
?>