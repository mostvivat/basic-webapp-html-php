<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1><center><b>Webboard w2</b></center></h1>
    <hr>
    <center>ต้องการดูกระทู้หมายเลข <?php echo $_GET["id"]; ?></center>
    <center><?php $n =$_GET["id"];
    if(($n%2)==0)
        echo "เป็นกระทู้หมายเลขคู่";
    else
        echo "เป็นกระทู้หมายเลขคี่";
    ?></center>
    </center>
    <table style ="border:2px solid black;width:40%" align="center">
            <tr><td style="background-color:#6cd2fe;" colspan="2">แสดงความคิดเห็น</td></tr>
            <tr><td><center><textarea name="textarea"></textarea><center></td></tr>
            <tr><td colspan="2" align="center"><input type="submit"value="ส่งข้อความ"></center></td></tr>
    </table>
    <br><center><a href="index.php">กลับไปหน้าหลัก</a></center>  
</body>
</html>