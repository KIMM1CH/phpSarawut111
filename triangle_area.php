<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงผลการคำนวณพื้นที่รูปเลขาคณิต</title>
</head>
<body>
    <?php
        $height = $_POST['height']; //รับค่าความสูง
        $width = $_POST['width']; //รับค่าความยาว
        $area = 0.5*height*width;
        echo "<h3>รูปสามเหลี่ยมท่ีมีความสูง $height และมีความยาวฐาน $width</h3>";
        echo "<br><br>";
        each "<h3>คำนวณพื้นที่ได้ $area ตารางหน่วย</h3>"
    ?>
</body>
</html>