<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เก็บข้อมูลนักเรียน</title>
</head>
<body>


<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เก็บข้อมูลนักเรียน</title>
</head>
<body>
    <h1>ฟอร์มกรอกข้อมูลนักเรียน</h1>
    <form method="post">
        <label for="name">ชื่อ:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="nickname">ชื่อเล่น:</label>
        <input type="text" id="nickname" name="nickname" required><br><br>

        <button type="submit">บันทึก</button>
    </form>
    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $name = htmlspecialchars($_POST['name']);
    $nickname = htmlspecialchars($_POST['nickname']);

    
    $data = "Name: $name, Nickname: $nickname\n";

    
    file_put_contents('student.txt', $data, FILE_APPEND);

    
    echo "<h3>ข้อมูลที่บันทึกสำเร็จ:</h3>";
    echo "<p>Name: $name</p>";
    echo "<p>Nickname: $nickname</p>";
}
?>
<?php
$myfile = fopen("student.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>
</body>
</html>

</body>
</html>