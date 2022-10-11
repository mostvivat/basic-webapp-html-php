<?php 
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newpost</title>
</head>
<body>
    <h1><center><b>Webboard w2</b></center></h1>
    <hr>
    ผู้ใช้ : <?php 
            if(! isset($_SESSION['role'])){
                header("Location: index.php");
            }
            else{
                echo $_SESSION['username'];
            }?><br>
    หมวดหมู๋ :<select name="หมวดหมู่">
                <option value="ทั้งหมด">--ทั้งหมด--</option>
                <option value="เรื่องทั่วไป">เรื่องทั่วไป</option>
                <option value="เรื่องเรียน">เรื่องเรียน</option>
            </select><br>
    หัวข้อ : <input type="text" name="หัวข้อ"><br>
    เนื้อหา : <textarea name="เนื้อหา" cols="30" rows="1"></textarea><br>
    <a href="index.php"><input type="submit" value="บันทึกข้อความ"></a>


</body>
</html>