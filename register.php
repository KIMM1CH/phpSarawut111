<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ฟอร์มบันทึกข้อมูล</title>
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

        form {
            background-color: #1e1e1e;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            width: 300px;
        }

        form label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
            color: #ffffff;
        }

        .gender-group {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .gender-group label {
            font-weight: normal;
            margin-right: 10px;
        }

        form input[type="text"],
        form input[type="date"],
        form input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #444444;
            border-radius: 4px;
            background-color: #262626;
            color: #ffffff;
        }

        form input[type="radio"] {
            margin-right: 5px;
        }

        form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        form input[type="submit"]:hover {
            background-color:rgb(221, 240, 15);
        }

        form input[type="text"]:focus,
        form input[type="date"]:focus,
        form input[type="password"]:focus {
            border-color: rgb(221, 240, 15);
            outline: none;
        }
    </style>
</head>
<body>
    <form action="member.php" method="POST">
        <div class="gender-group">
            <label>เพศ :</label>
            <input type="radio" id="female" name="sex" value="หญิง">
            <label for="female">หญิง</label>
            <input type="radio" id="male" name="sex" value="ชาย">
            <label for="male">ชาย</label>
        </div>
        
        <label for="fname">ชื่อ:</label>
        <input type="text" id="fname" name="fname">
        
        <label for="lname">สกุล:</label>
        <input type="text" id="lname" name="lname">
        
        <label for="birthday">วันเกิด :</label>
        <input type="date" name="birthday">
        
        <label for="username">Username :</label>
        <input type="text" name="username">
        
        <label for="password">Password :</label>
        <input type="password" name="pwd">
        
        <input type="submit" value="บันทึกข้อมูล">
    </form>
</body>
</html>
