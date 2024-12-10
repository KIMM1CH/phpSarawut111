<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>กรอกข้อมูล BMI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>กรอกข้อมูลเพื่อหาค่า BMI</h1>
        <form method="POST" action="BMI2.php">
            
            <div class="form-group">
                <label for="fname">ชื่อ:</label>
                <input type="text" name="fname" id="fname" required>
            </div>
            <div class="form-group">
                <label for="lname">นามสกุล:</label>
                <input type="text" name="lname" id="lname" required>
            </div>
            <div class="form-group">
                <label for="age">อายุ:</label>
                <input type="number" name="age" id="age" required>
            </div>
            <div class="form-group">
                <label for="h">น้ำหนัก (กิโลกรัม):</label>
                <input type="number" step="0.1" name="h" id="h" required>
            </div>
            <div class="form-group">
                <label for="w">ส่วนสูง (เซนติเมตร):</label>
                <input type="number" step="0.1" name="w" id="w" required>
            </div>
            <button type="submit" class="btn">ไปที่หน้าผลการคำนวณ</button>
        </form>
    </div>
</body>
</html>
