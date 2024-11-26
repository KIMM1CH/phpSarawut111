<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>my first Php Script<br></h1>";

        echo 'PHP version : ' . phpversion();
        
        echo "<h2> Global and Local Variable</h2>";

        $x = 5;

        function myTest(){
            $x = 9;
            echo "<p>Variable x อยู่ภายในฟังก์ชัน = $x</p>";
        }
        myTest();

        echo "<p>Variable x อยู่ภายในฟังก์ชัน = $x</p>";
        //------------------------------------------------
        echo "<h2>PHP Data Type ชนิดข้อมูลใน PHP</h2>";
        $str1 = "Hello World!";
        $str2 = "Hello World!";
        echo "แสดงชนิดข้อมูล String ใช้เครื่องหมาย \ ' และ \" <br>";
        echo $str1;
        echo "<br>";
        echo $str2;
        echo "<br>";
        echo "<p>-------------------------------------------------------------</p>";
        $a = 5985;
        $b = 123.456;
        $c = true;
        echo "แสดงชนิดข้อมูลและค่าในตัวแปรด้วย var_dump <br>";
        var_dump($a);
        echo "<br>";
        var_dump($b);
        echo "<br>";
        var_dump($c);
        echo "<br>";
        echo "<p>-------------------------------------------------------------</p>";
        echo "แสดงชนิดข้อมูล Array <br>";
        $car = array("Volvo<br>","BMW<br>","Toyota");
        var_dump($car);
        echo "<p>-------------------------------------------------------------</p>";
        echo "แสดงค่า NULL <br>";
        $var = "Hello World";
        $var = null;
        var_dump($var);
        echo "<p>-------------------------------------------------------------</p>";
        echo "การใช้ฟังก์ชันที่่เกี่ยวข้องกับตัวแปรชนิด <br>";
        $hello = "Hello World!";
        echo "ข้อความได้แก่ \"$hello\"";
        echo "<br>";
        echo "ความยาวของตัวแปร hello :".strlen($hello);
        echo "<br>";
        echo "จำนวนคำของข้อความ :".str_word_count($hello);
        echo "<br>";
        echo "สลับที่ข้อความ :".strrev($hello);
        echo "<br>";
        echo "หาตำแหน่งของตัว W ในข้อความ :".strpos($hello,"W");
        echo "<br>";
        echo "แทนค่าในตัวแปร :".str_replace("Hello","Bye",$hello);
        echo "<p>-------------------------------------------------------------</p>";
        echo "การใช้ฟังก์ชันที่่เกี่ยวข้องกับการคำนวณ <br>";
        echo "pi() คำนวณค่าวงกลม";
        echo "<br>";
        $r = 1;
        echo "เส้นรอบวงของวงกลมที่มีรัศมี $r มีค่า =". 2*pi()*$r;
        echo "<br>";
        echo "พื้นที่วงกลมที่มีรัศมี $r มีค่า =".pi()*pow($r,2);
        $arr1 = array(0,150,30,20,-8,-200);
        echo "<br>";
        echo "ค่าที่น้อยที่สุดในตัวแปร arr1 =".min($arr1);
        echo "<br>";
        echo "ค่าที่มากที่สุดในตัวแปร arr1 =".max($arr1);
        echo "<br>";
        $m = 49.60; $n = 79.49;
        echo "ค่า round ของ $m =".round($m);
        echo "<br>";
        echo "ค่า round ของ $n =".round($n);
        echo "<br>";
        echo "ค่า round ของ pi() ทศนิยม 2 ตำแหน่ง =".round(pi(),2);
        echo "<p>-------------------------------------------------------------</p>";
        echo "การใช้ Conditinal Assignment Operator <br>";
        $score = 79.99;
        $result = $score>50?"สอบผ่าน":"สอบตก";
        echo "คะแนนที่ได้ $score มีผลการเรียนเป็น : ".$result;
        echo "<br>";
        echo "คะแนนที่ได้ ".$score." มีผลการเรียน : ".$result;

    ?>
</body>
</html>