<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รับเข้า SEMI</title>

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
        <li><a href="fg_insert.php"><i class="fa fa-th-list "></i> FG </a></li>
            <ul class="menu">
                <li><a href="fg_insert.php"><i class="fa fa-cubes"></i> รับเข้า FG</a></li>
                <li><a href="fg_report_in.php"><i class="fa fa-cubes"></i> รายงานรับเข้า FG</a></li>
                <li><a href="fg_out.php"><i class="fa fa-cubes"></i> จ่าย FG</a></li>
                <li><a href="fg_report_out.php"><i class="fa fa-cubes"></i> รายงานจ่ายออก FG</a></li>
                <li><a href="fg_conclude.php"><i class="fa fa-cubes"></i> สรุปจำนวน FG</a></li>
            </ul>
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
            <li><a href="fg_out_carabao.php">FG คาราบาว</a></li>
            <li><a href="fg_out_coffee.php">FG กาแฟ</a></li>
            <li><a href="fg_out_coconut.php">FG น้ำมะพร้าว</a></li>
            <li><a href="fg_out_clight.php">FG C light</a></li>
            <li><a href="fg_out_etc.php">FG Etc</a></li>
        </ul>
          <form action="">
            <fieldset>
              <legend>รับเข้าสินค้า</legend><br>
                <label for="name">ชื่อสินค้า :</label>
                <select id="name" name="cars">
                  <option value=""><----เลือก SEMI----></option>
                  <option value="volvo">Volvo</option>
                  <option value="saab">Saab</option>
                  <option value="fiat">Fiat</option>
                  <option value="audi">Audi</option>
                </select>
                <label for="numpro">วันที่ผลิต :</label>
                <input type="text"name="numpro">
                <label for="company">วันที่หมดอายุ :</label>
                <input type="text"name="company">
                <label for="invoice">Batch No.1 :</label>
                <input type="text" name="invoice">
                <label for="po">Batch No.2 :</label>
                <input type="text"name="po">
                <label for="date">Batch No.3 :</label>
                <input type="text" name="date">
                <label for="date">Batch No.4 :</label>
                <input type="text" name="date">
                <label for="date">Hold :</label>
                <input type="text" name="date">
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