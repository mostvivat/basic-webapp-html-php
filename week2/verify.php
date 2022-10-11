<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
    <h1><center><b>Webboard w2</b></center></h1>      
    <hr>
    <?php
        if(isset($_SESSION['role'])){
        header("Location: index.php");
        die;
        }
    ?>
    <center>
        <?php
            if($_POST["login"] == "admin" && $_POST["pwd"] == "ad1234"){
                echo "<br>ยินดีต้อนรับคุณ ADMIN";
                $_SESSION["username"] = "admin";
                $_SESSION["role"] = "a";
                $_SESSION["id"] = "session_id()";
            }
            elseif($_POST["login"] == "member" && $_POST["pwd"] == "mem1234"){
                echo "<br>ยินดีต้อนรับคุณ MEMBER";
                $_SESSION["username"] = "member";
                $_SESSION["role"] = "m";
                $_SESSION["id"] = "session_id()";
            }
            else{
                echo "<br>ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
            }
        ?></center>
        
    <br><center><a href="index.php">กลับไปหน้าหลัก</a></center>
</body>
</html>