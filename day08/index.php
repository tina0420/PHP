<?php

//定義類別
class Rectangle{
    // static屬性 
   //紀錄Rectangle已經建立出多少物件
   public static $count =0;
   
   
    //屬於物件的屬性
   //不希望任意地方的code能對物件的屬性作修改
   //屬性隱藏，設定成私有的
    private $length = 10;
    public $width = 20;
    //建構式:一旦透過類別建立出物件就會自動執行的函數
    public function __construct($lengthInput,$widthInput){
        //每建立一個真實的長方形
        //就把此類別中自己所共用的$count遞增1
        self :: $count++;
        if($lengthInput > 0) $this->length = $lengthInput;
        if($widthInput > 0)  $this->width = $widthInput;
    }
     //方法
     //設定取得此物件的長的值的方法
     public function getLength(){
         return $this->length;
     }
     //設定取得此物件的寬的值的方法
     public function getWidth(){
        return $this->width;
    }
     public function getArea(){
        return $this->width * $this->length;
    }
}
//類別實例化:使用類別新增出物件實例(實體)
$rec = new Rectangle(15,10);
//物件的某個屬性修改值
//$rec ->width = 0;
echo "寬:".$rec->getWidth()."<br>";
echo "面積:".$rec->getArea()."<br>";

//特過類別新增出不同物件
$rec2 = new Rectangle(5,5);
echo "使用Rectangle蓋出的物件數量:".Rectangle ::$count;

echo "<br>";
//基本薪資、按件計酬的報酬、案件數-> 總薪水
// class frontEndDeveloper{
//     private $basicSalary = 25000;
//     private $pieceRate = 5000;
//     private$pieceWorkNumber = 0;
//     //建構式
//     public function __construct($pieceNumber){
//         //將此物件的某個屬性設定成 投入的參數
//         $this -> pieceWorkNumber = $pieceNumber;
//     }
//     //方法
//     public function getTotalSalary(){
//         //底薪+(報酬*案件數)
//         return $this->basicSalary + ($this->pieceRate * $this->pieceWorkNumber);
//     }
// }

//員工的類別(父類別) 未來要衍生出前端、後端、UI等(子類別)
//protected 父傳子繼承下去，祖傳祕方要代代相傳，所以要保護性
class Employee{
    protected $basicSalary = 25000;
    protected $pieceRate = 0;
    protected $pieceWorkNumber = 0;

    public function __construct($numberInput){
        //案件數
        $this->pieceWorkNumber = $numberInput;
    }
    public function getTotalSalary(){
        return $this->basicSalary + ($this->pieceRate * $this->pieceWorkNumber);
    }
}

//透過父類別衍生一個前端(子類別)
class FrontEndDeveloper extends Employee{
    protected $pieceRate = 5000;
}

//透過父類別衍生一個UI設計師(子類別)
class UIDeveloper extends Employee{
    protected $pieceRate = 4000;
}

//特過類別新增出物件
$amy = new FrontEndDeveloper(5);
$tina = new UIDeveloper(10);
echo "Amy的薪水是".$amy->getTotalSalary()."<br>";
echo "Tina的薪水是".$tina->getTotalSalary()."<br>";
?>