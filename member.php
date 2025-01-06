<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลลัพธ์ข้อมูล</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: #ffffff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .result-container {
            background-color: #1e1e1e;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            width: 400px;
            text-align: center;
        }

        .result-container h1 {
            color: #4CAF50;
            margin-bottom: 20px;
        }

        .result-container p {
            font-size: 18px;
            margin: 10px 0;
        }

        .highlight {
            color: #4CAF50;
            font-weight: bold;
        }

        .back-button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
        }

        .back-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <?php
        if ($_POST) {
            $name = $_POST['fname'];
            $surname = $_POST['lname'];
            $birthday = $_POST['birthday'];
            $sex = $_POST['sex'];
            $username = $_POST['username'];
            $pwd = $_POST['pwd'];

            echo "<h1>ผลลัพธ์ข้อมูล</h1>";
            echo "<p>สวัสดีคุณ :<span class='highlight'>$name $surname</span></p>";
            echo "<p>วันเกิด : <span class='highlight'>$birthday</span></p>";
            echo "<p>เพศ : <span class='highlight'>" . ($sex === 'f' ? 'หญิง' : 'ชาย') . "</span></p>";
            echo "<p>Username : <span class='highlight'>$username</span></p>";
            echo "<p>Password : <span class='highlight'>$pwd</span></p>";
        }
        ?>
        <a href="register.php" class="back-button">กลับหน้าแรก</a>
    </div>
</body>
</html>
