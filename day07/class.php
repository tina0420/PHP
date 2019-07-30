<?php
//類別 vs 物件
//烤餅乾模型 vs 餅乾
//用類別創造出物件 vs 用模型烤出餅乾
//物件就是類別的實體(Instance)

//定義Rectango類別
class Rectangle{
    // 此類別屬性
    public $length = 10;
    public $width = 20;

    //此類別的方法
    //取得周長
    public function getPerimeter(){
        return ($this->length+$this->width)*2;
    }
    //取得面積
    public function getArea(){
        return ($this->length)*($this->width);
    }
}

//透過類別新增出物件
$myRec = new Rectangle();
echo "長:".$myRec->length;
echo "<br>寬:".$myRec->width;
echo "<br>面積:".$myRec->getArea();
echo "<br>周長:".$myRec->getPerimeter();


//希望建立自訂屬性值的長方形
//建立時檢查，萬一輸入長寬 <=0 採用預設值
class Rec{
    public $length = 10;
    public $width = 20;
    //設計建構式: new出物件的時候也可以輸入參數值
    public function __construct($lengthInput,$widthInput){
        //如果輸入的長寬值大於0，就採用書ˋ入參數
        if($lengthInput > 0) $this->length = $lengthInput;
        if($widthInput > 0)  $this->width = $widthInput;
    }
    //方法
    public function getArea(){
        return $this->width * $this->length;
    }
}
//建立出物件
$myRec1 = new Rec(20,40);
echo "<br>myRec1長:".$myRec1->length;
echo "<br>myRec1面積:".$myRec1->getArea();


?>