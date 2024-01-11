<?php 
echo "<pre>";
echo "Bài 1";
echo "<pre>";
class Animal {
   
    public $chan;
    public $an;

    public function setChan($chan) {
        $this->chan = $chan;
    }

    public function setAn($an) {
        $this->an = $an;
    }
    
}

class DOG extends Animal{
    public function dichuyen() {
        echo "Dog di chuyen bang " . $this->chan . " chan ";
    }
    public function an() {
        echo " - Dog an  " . $this->an;
    }
}

class Cat extends Animal{
    public function dichuyen() {
        echo "Cat di chuyen bang " . $this->chan . " chan ";
    }
    public function an() {
        echo " - Cat an  " . $this->an;
    }
}

class Bird extends Animal {
    public function dichuyen() {
        echo "Bird di chuyen bang " . $this->chan. " chan";
    }
    public function an() {
        echo " - Bird an  " . $this->an ;
    }
}

echo "<pre>";
$dog = new DOG;
$dog->setChan(4);
$dog->setAn("bằng mồm");
$dog->dichuyen();
$dog->an();
echo "<pre>";

$cat = new Cat;
$cat->setChan(4);
$cat->setAn("bằng mồm");
$cat->dichuyen();
$cat->an();
echo "<pre>";

$bird = new Bird;
$bird->setChan(2);
$bird->setAn("bằng mỏ");
$bird->dichuyen();
$bird->an();

echo "<pre>";
echo " ";
echo "<pre>";

echo "<pre>";
echo "Bài 2";
echo "<pre>";
class Person {
    public $ten;
    public $tuoi;
    public $time;

    public function setTen($ten) {
        $this->ten = $ten;
    }

    public function setTuoi($tuoi) {
        $this->tuoi = $tuoi;
    }

    public function setTime($time) {
        $this->time = $time;
    }
}

class Employee extends Person {
    public $congTy;
    public $luong;

    public function setCongTy($congTy) {
        $this->congTy = $congTy;
    }

    public function setLuong($luong) {
        $this->luong = $luong;
    }

    public function thongTinNhanVien() {
        echo "Thông tin nhân viên: " . $this->ten . ", " . $this->tuoi . " tuổi, làm việc tại " . $this->congTy . ", lương " . $this->luong . " VND." ;
        echo "<pre>";
        echo " - Từng làm việc  " . $this->time . " năm";
    }
}

class Manager extends Employee {
    protected $quyenQuanLy;

    public function setQuyenQuanLy($quyenQuanLy) {
        $this->quyenQuanLy = $quyenQuanLy;
    }

    public function thongTinQuanLy() {
        echo "Thông tin quản lý: " . $this->ten . ", " . $this->tuoi . " tuổi, làm việc tại " . $this->congTy . ", lương " . $this->luong . " VND, có quyền " . $this->quyenQuanLy . "." ;
        echo "<pre>";
        echo " - Quản lý đang giám sát và quản lý nhân viên.";
    }
}

echo "<pre>";
$nguoilaodong = new Employee;
$nguoilaodong->setTen("Nguyen Van A");
$nguoilaodong->setTuoi(26);
$nguoilaodong->setTime(5);
$nguoilaodong->setCongTy("ABC Company");
$nguoilaodong->setLuong(50000);
$nguoilaodong->thongTinNhanVien();
echo "<pre>";

echo "<pre>";
$quanly = new Manager;
$quanly->setTen("Nguyen Van B");
$quanly->setTuoi(29);
$quanly->setTime(3);
$quanly->setCongTy("XYZ Corporation");
$quanly->setLuong(70000);
$quanly->setQuyenQuanLy("Quản lý nhóm");
$quanly->thongTinQuanLy();
echo "<pre>";



echo "<pre>";
echo " ";
echo "<pre>";


echo "<pre>";
echo "Bài 3";
echo "<pre>";
class Shape {
   
    public $dai;
    public $rong;
    public $cao;
    public $s;

    public function setDai($dai) {
        $this->dai = $dai;
    }

    public function setRong($rong) {
        $this->rong = $rong;
    }

    public function setCao($cao) {
        $this->cao = $cao;
    }

    public function calculateArea() {
        $this->s = 0;  
        return $this->s;
    }
    
}

class Square extends Shape {
    
    public function calculateArea() {
        
        $this->s = $this->dai * $this->dai;
        return $this->s;
    }
}
class Circle extends Shape {
    
    public function calculateArea() {
        $this->s = 3.14 * $this->dai * $this->dai;
        return $this->s;
    }
}


echo "<pre>";
$square = new Square();
$square->setDai(5);
echo "Diện tích hình vuông: " . $square->calculateArea() ;

echo "<pre>";
$circle = new Circle();
$circle->setDai(3);
echo "Diện tích hình tròn: " . $circle->calculateArea() ;
echo "<pre>";



?>