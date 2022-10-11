<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1><center><b>Webboard w2</b></center></h1>
    <hr>
    หมวดหมู่ :
        <select name="หมวดหมู่">
            <option value="ทั้งหมด">--ทั้งหมด--</option>
            <option value="เรื่องทั่วไป">เรื่องทั่วไป</option>
            <option value="เรื่องเรียน">เรื่องเรียน</option>
        </select>
        <?php
        if(isset($_SESSION['id'])  ){ 
            echo "ผู้ใช้งานระบบ : ".$_SESSION['username'];
            echo "<a href='logout.php' style='float:right'>ออกจากระบบ</a>";
        }
        else{ 
          echo "<a href='login.php' style='float:right'>เข้าสู่ระบบ</a>";
        }
        ?><br>
        <a href="newpost.php" >สร้างกระทู้ใหม่</a>
    <form action="post.php" method="get"></form>
    <ul>
        <?php
        $id = 1;
        if(isset($_SESSION['role'] ) && $_SESSION['role'] == "a"){
            for($i=1;$i<=10;$i++){
            echo "<li><a href='post.php?id=$id'>กระทู้ที่ $id</a>   <a href='delete.php?id=$id'> ลบ </a><br></li>";
            $id++;}
        }
        else{
            for($i=1;$i<=10;$i++){
            echo "<li><a href='post.php?id=$id'>กระทู้ที่ $id</a></li>";
            $id++;}
        }
        ?>
    </ul>
    <form action="post.php" method="get"></form>
</body>
</html>