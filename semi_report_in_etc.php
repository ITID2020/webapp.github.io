<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายการรับเข้า SEMI</title>

    <link href="https://fonts.googleapis.com/css?family=Niramit:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="inserts.css">

</head>
<body>

      <header>
  
      </header>

      <section class="section">
      <nav class="nav">
    <ul>
        <li><a href="mainmenu.php"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="raw_material.php"><i class="fa fa-th-list "></i> วัตถุดิบ </a></li>
        <li><a href="semi_insert.php"><i class="fa fa-th-list "></i> SEMI</a></li>
            <ul class="menu">
                <li><a href="semi_insert.php"><i class="fa fa-cubes"></i> รับเข้า SEMI</a></li>
                <li><a href="semi_report_in.php"><i class="fa fa-cubes"></i> รายการรับเข้า SEMI</a></li>
                <li><a href="semi_out.php"><i class="fa fa-cubes"></i> จ่าย SEMI</a></li>
                <li><a href="semi_report_out.php"><i class="fa fa-cubes"></i> รายการจ่ายออก SEMI</a></li>
                <li><a href="semi_conclude.php"><i class="fa fa-cubes"></i> สรุปจำนวน SEMI</a></li>
            </ul>
        <li><a href="fg_insert.php"><i class="fa fa-th-list "></i> FG </a></li>
        <li><a href="barcode.php"><i class="fa fa-barcode"></i> Barcode</a></li>
        <li><a href="code_all.php"><i class="fa fa-th-list "></i> รหัสรวม </a></li>
        <li><a href="check_st.php"><i class="fa fa-building-o"></i> เช็คสต็อก</a></li>
        <li><a href="plan_in.php"><i class="fa fa-line-chart"></i> แผนรับเข้าวัตถุดิบ</a></li>
        <li><a href="up_img.php"><i class="fa fa-image"></i> ไลบารี รูปภาพ</a></li>
        <li><a href="logout.php"><i class="fa fa-sign-out"></i> ออกจากระบบ</a></li>
    </ul>
    </nav>
        <article class="article">
        <ul class="main">
            <li><a href="semi_report_in_carabao.php">SEMI คาราบาว</a></li>
            <li><a href="semi_report_in_coffee.php">SEMI กาแฟ</a></li>
            <li><a href="semi_report_in_coconut.php">SEMI น้ำมะพร้าว</a></li>
            <li><a href="semi_report_in_light.php">SEMI C light</a></li>
            <li><a href="semi_report_in_etc.php">SEMI Etc</a></li>
        </ul><br>
          <form action="#">
            
            <table>
            <tr>
                <th>ลำดับ</th>
                <th>ชื่อสินค้า</th>
                <th>จำนวน</th>
                <th>วันที่ผลิต</th>
                <th>วันที่หมดอายุ</th>
                <th>batch</th>
                <th>hold</th>
                <th>date</th>
                <th>หมายเหตุ</th>
            </tr>
            <tr>
                <td>Peter</td>
                <td>Griffin</td>
                <td>$100</td>
                <td>$100</td>
                <td>$100</td>
                <td>$100</td>
                <td>$100</td>
                <td>$100</td>
                <td>$100</td>
                
            </tr>

            </table>
          </form>
        </article>
        </section>

<footer>

</footer>


</body>
</html>
