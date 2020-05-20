<?php
    require 'condb.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายการรับเข้าวัตถุดิบถาด</title>

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
    <li><a href="mainmenu.php"><i class="fa fa-home"></i> Home </a></li>
    <li><a href="raw_material.php"><i class="fa fa-th-list "></i> วัตถุดิบ  </a></li>
      <ul class="menu">
          <li><a href="raw_material.php"><i class="fa fa-cubes"></i> รับเข้าวัตถุดิบ</a></li>
          <li><a href="raw_material_report.php"><i class="fa fa-cubes"></i> รายการวัตถุดิบที่รับเข้า</a></li>
          <li><a href="raw_material_out.php"><i class="fa fa-cubes"></i> จ่ายวัตถุดิบ</a></li>
          <li><a href="raw_material_report_out.php"><i class="fa fa-cubes"></i> รายการวัตถุดิบที่จ่ายออกแล้ว</a></li>
          <li><a href="raw_conclude.php"><i class="fa fa-cubes"></i> สรุปจำนวน</a></li>
      </ul>

      <li><a href="semi_insert.php"><i class="fa fa-th-list "></i> SEMI </a></li>
      <li><a href="fg_insert.php"><i class="fa fa-th-list "></i> FG  </a></li>
      <li><a href="barcode.php"><i class="fa fa-barcode"></i> Barcode </a></li>
      <li><a href="code_all.php"><i class="fa fa-th-list "></i> รหัสรวม  </a></li>
      <li><a href="check_st.php"><i class="fa fa-building-o"></i> 
      เช็คสต็อก</a></li>
      <li><a href="plan_in.php"><i class="fa fa-line-chart"></i> 
      แผนรับเข้าวัตถุดิบ</a></li>
      <li><a href="up_img.php"><i class="fa fa-image"></i>ไลบารี รูปภาพ</a></li>
      <li><a href="logout.php"><i class="fa fa-sign-out"></i>ออกจากระบบ </a></li>
    </ul>
    </nav>


    <article class="article">
    <ul class="main">
          <li><a href="raw_material_pvc.php">PVC บวกเบ็ดเตล็ด</a></li>
          <li><a href="raw_material_canned_lid.php">กระป๋องกับฝา</a></li>
          <li><a href="raw_material_smell.php">กลิ่น</a></li>
          <li><a href="raw_material_box.php">กล่อง</a></li>
          <li><a href="raw_material_bottle.php">ขวด</a></li>
          <li><a href="raw_material_lot.php">ฉลาก</a></li>
          <li><a href="raw_material_tray.php">ถาด</a></li>
          <li><a href="raw_material_bag.php">ถุง</a></li>
          <li><a href="raw_material_additives.php">สาร</a></li>
          <li><a href="raw_material_rawother.php">วัตถุดิบอื่น ๆ</a></li>
        </ul>

        <form method="POST" action="session_raw_material_tray.php" > 
            <fieldset>
              <legend>รับเข้าสินค้า ถาด</legend><br>

                <label for="name">ชื่อสินค้า :</label>
                <?php
                        $sql = "select * from ถาด";
                        $result = mysqli_query($link,$sql);
                ?>
                <select id="namepro" name="namepro">
                  <option value=""><----ชื่อสินค้า----></option>
                  <?php
                        while($row = mysqli_fetch_array($result)) {
                  ?>
                   <option value="<?=$row['namepro']?>"><?=$row['codepro']?>--<?=$row['namepro']?></option>				  	
				            <?php } ?>
                </select>

                <label for="numpro">จำนวนที่รับเข้า :</label>
                <input type="text"name="numpro">
                <label for="company">บริษัท :</label>
                <input type="text"name="company">
                <label for="invoice">Invoice :</label>
                <input type="text" name="invoice">
                <label for="po">PO :</label>
                <input type="text"name="po">
                <label for="date">วันที่รับเข้า :</label>
                <input type="text" name="date">
                <label for="time">เวลา :</label>
                <input type="text" name="time">
                <label for="remark">หมายเหตุ :</label>
                <textarea type="text"name="remark"></textarea><br>
                <button class="button" name="button">บันทึกข้อมูล</button><br>
            </fieldset>
          </form>
 
        </article>

        
      </section>

      <footer>
  
      </footer>

    
</body>
</html>