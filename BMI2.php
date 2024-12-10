<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลการคำนวณ BMI</title>
    <style>
        /* Page general style */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        /* Main container */
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Header Style */
        h1 {
            text-align: center;
            color: #333;
        }

        /* Results Section */
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #e9f7ef;
            border: 1px solid #d4edda;
            border-radius: 5px;
        }

        /* Button Styling */
        .btn {
            display: block;
            margin: 10px auto;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            text-align: center;
            border-radius: 5px;
            width: 150px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $firstName = $_POST['fname'];
            $lastName = $_POST['lname'];
            $age = $_POST['age'];
            $weight = $_POST['h'];
            $height = $_POST['w'];

            $heightInMeters = $height / 100;
            $bmi = $weight / ($heightInMeters ** 2);

            // Determine BMI category
            if ($bmi < 18.5) {
                $bmiCategory = "น้ำหนักน้อย";
                $recommendation = "ควรเพิ่มน้ำหนักด้วยการรับประทานอาหารที่มีประโยชน์และออกกำลังกายอย่างเหมาะสม";
            } elseif ($bmi < 25) {
                $bmiCategory = "น้ำหนักปกติ";
                $recommendation = "รักษาสุขภาพและออกกำลังกายอย่างสม่ำเสมอเพื่อรักษาน้ำหนักที่เหมาะสม";
            } elseif ($bmi < 30) {
                $bmiCategory = "น้ำหนักเกิน";
                $recommendation = "ควรออกกำลังกายและควบคุมการบริโภคอาหารเพื่อลดน้ำหนัก";
            } else {
                $bmiCategory = "โรคอ้วน";
                $recommendation = "ควรปรึกษาแพทย์เพื่อวางแผนการลดน้ำหนักอย่างเหมาะสม";
            }

            // Display results
            echo "<h1>ผลการคำนวณ BMI</h1>";
            echo "<div class='result'>";
            echo "<p><strong>ชื่อ-นามสกุล:</strong> $firstName $lastName</p>";
            echo "<p><strong>อายุ:</strong> $age ปี</p>";
            echo "<p><strong>น้ำหนัก:</strong> $weight กิโลกรัม</p>";
            echo "<p><strong>ส่วนสูง:</strong> $height เซนติเมตร</p>";
            echo "<p><strong>BMI:</strong> " . number_format($bmi, 2) . " ($bmiCategory)</p>";
            echo "<p><strong>คำแนะนำ:</strong> $recommendation</p>";
            echo "</div>";
        } else {
            echo "<p>กรุณากรอกข้อมูลจากหน้าหลักก่อน</p>";
        }
        ?>

        <a href="BMI.php" class="btn">กลับหน้ากรอกข้อมูล</a>
    </div>
</body>
</html>
