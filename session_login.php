<?php

    /** require เป็นคำสั่งที่เรียกใช้งานแล้วไฟล์ดังกล่าวจะต้องมีอยู่จริง ถ้าไม่พบไฟล์โปรแกรมก็จะหยุดทำงานในทันที */
    require 'condb.php';

    /**session_start() คือ ประกาศสร้าง session ต้องสร้างเป็นอันดับแรกเสมอ เพื่อโหลดข้อมูล session มาเก็บไว้ที่หน่วยความจำ */
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    /**stripcslashes() ฟังก์ชั่นนี้สามารถใช้ในการทำความสะอาดข้อมูลที่ดึงมาจากฐานข้อมูลหรือจากรูปแบบ HTML
    Ex. stripcslashes( string ) */
    $username = stripcslashes($username);
    $password = stripcslashes($password);

    /** mysqli_real_escape_string() เป็นฟังก์ชันสำหรับเลี่ยงการใช้ตัวอักขระพิเศษในคำสั่ง sql  เช่น เครื่องหมาย ' เป็นต้น เพื่่อให้ได้คำสั่ง sql ปลอดภัยสำหรับการ query หรือปลอดภัยจากการเรียกใช้ฟังก์ชัน mysql_query ยกเว้นเครื่องหมาย % และ _ ซึ่งมีใช้ในคำสั่ง sql */
    $username = mysqli_real_escape_string($link, $username);
    $password = mysqli_real_escape_string($link, $password);

    $sql = "SELECT * FROM member WHERE username ='$username' and password ='$password'";
    $result = mysqli_query($link,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 

    $count = mysqli_num_rows($result);

    // If result matched $username and $password, table row must be 1 row

    if($count == 1) {
        $_SESSION['login_user'] = $username;
        header("location: mainmenu.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         header("location: index.php");
      }

 mysqli_close($link);
?>

</body>
</html>
