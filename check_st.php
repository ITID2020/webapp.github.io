<?php

    require 'condb.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เช็คสต็อก</title>

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
        
          <form action="" Method="POST">
            <fieldset>
              <legend>เช็คสต๊อค</legend><br>
                  
                <label for="product">Product :</label>
                <input type="text" name="product">
                <label for="จำนวน">จำนวน :</label>
                <input type="text"name="จำนวน">
                <label for="หน่วย">หน่วย :</label>
                <input type="text" name="หน่วย">
                <label for="วันที่นับสต๊อค">วันที่นับสต๊อค :</label>
                <input type="text" name="วันที่นับสต๊อค">
                <label for="เวลา">เวลา :</label>
                <input type="text" name="เวลา">
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