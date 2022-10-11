<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php
    if(isset($_SESSION['role'])){
        header('Location: index.php');
        die;
    }
    ?>
    <h1><center><b>Webboard w2</b></center></h1>
    <hr>
    <form action="verify.php" method="post">
        <table style ="border:2px solid black;width:40%" align="center">
            <tr><td style="background-color:#6cd2fe;" colspan="2">เข้าสู่ระบบ</td></tr>
            <tr><td>Login</td><td><input type="text" name="login" size="50"></td></tr>
            <tr><td>Password</td><td><input type="password"name="pwd"size="50"></td></tr>
            <tr><td colspan="2" align="center"><input type="submit"value="Login"></td></tr>
        </table>
    </form>
    <br><center>ถ้ายังไม่มีบัญชีผู้ใช้<a href="register.php">สมัครสมาชิก</a></center>  
</body>
</html>