<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1><center><b>สมัครสมาชิก</b></center></h1>
    <hr>
    <?php
    if(isset($_SESSION['role'])){
        header("Location: index.php");
        die;
    }
    ?>
    <table style ="border:2px solid black;width:40%" align="center">
        <tr><td style="background-color:#6cd2fe;" colspan="2">กรอกข้อมูล</td></tr>
        <tr><td>ชื่อบัญชี:</td><td><input type="text" name="user" size="50"</td></tr>
        <tr><td>รหัสผ่าน:</td><td><input type="password" name="password" size="50"</td></tr>
        <tr><td>ชื่อ-นามสกุล:<td><input type="text" name="name" size="50"</td></tr>
        <tr><td>เพศ:</td>
            <td><input type="radio"name="เพศ"value="ช">ชาย</td></tr>
            <td><td><input type="radio"name="เพศ"value="ญ">หญิง</td></td></tr>
            <td><td><input type="radio"name="เพศ"value="อื่นๆ">อื่นๆ</td></td></tr>
        </td></tr>
        <tr><td>อีเมล:</td><td><input type="text" name="email" size="50"</td></tr>
        <tr><td colspan="2" align="center"><input type="submit"value="สมัครสมาชิก"></center></td></tr>
    </table>
    <br><center><a href="index.php">กลับไปหน้าหลัก</a></center>
</body>
</html>