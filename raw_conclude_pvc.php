
<?php  
/*
    session_start();
    require "condb.php";

    $link = mysqli_connect("localhost","root","","webapp");
            mysqli_set_charset($link, 'utf8');

    // แสดง จำนวน แถวต่อ เพจ
    $perpage = 15;
    if (isset($_GET['page'])) {
    $page = $_GET['page'];
    } else {
    $page = 1;
    }
    $start = ($page - 1) * $perpage;

    $sql_1 = "SELECT pvc_in.id,pvc_in.namepro,pvc_in.company,pvc_in.numpro,pvc_in.datetype,pvc_out.num_pro,pvc_out.date_type,pvc_out.time_add,pvc_in.numpro,pvc_in.remark FROM pvc_in INNER JOIN pvc_out ON pvc_in.id = pvc_out.id ORDER BY pvc_in.id ASC limit {$start} , {$perpage}" or die("Error:" . mysqli_error()); 

    $run_1 = mysqli_query($link, $sql_1);
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สรุปจำนวนวัตถุดิบ</title>

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
          <li><a href="raw_conclude_pvc.php">PVC บวกเบ็ดเตล็ด</a></li>
          <li><a href="raw_conclude_canned_lid.php">กระป๋องกับฝา</a></li>
          <li><a href="raw_conclude_smell.php">กลิ่น</a></li>
          <li><a href="raw_conclude_box.php">กล่อง</a></li>
          <li><a href="raw_conclude_bottle.php">ขวด</a></li>
          <li><a href="raw_conclude_lot.php">ฉลาก</a></li>
          <li><a href="raw_conclude_tray.php">ถาด</a></li>
          <li><a href="raw_conclude_bag.php">ถุง</a></li>
          <li><a href="raw_conclude_additives.php">สาร</a></li>
          <li><a href="raw_conclude_rawother.php">วัตถุดิบอื่น ๆ</a></li>
        </ul>
          <form action="">
            
            <table>
            <tr>
                <th>ลำดับ</th>
                <th>ชื่อสินค้า</th>
                <th>บริษัท</th>
                <th>จำนวนรับเข้า</th>
                <th>วันที่รับเข้า</th>
                <th>จำนวนที่จ่ายออก</th>
                <th>วันที่จ่ายออก</th>
                <th>คงเหลือ</th>
                <th>หมายเหตุ</th>
            </tr>

            <?php 
               //    while ($row = mysqli_fetch_array($run_1)) {
            ?>

            <tr>
                <td><?php // echo $row['id']; ?></td>
                <td><?php // echo $row['namepro']; ?></td>
                <td><?php // echo $row['company']; ?></td>
                <td><?php // echo $row['numpro']; ?></td>
                <td><?php //  echo $row['datetype']; ?></td>
                <td><?php // echo $row['num_pro']; ?></td>
                <td><?php // echo $row['date_type']; ?></td>
                <td><?php // echo $row['numpro']; ?></td>
                <td><?php // echo $row['remark']; ?></td>
                
            </tr>
            <?php //  }    ?>

            </table>
            <?php /*
                $sql_1 = "SELECT * FROM pvc_out";
                $query1 = mysqli_query($link, $sql_1);
                $total_record = mysqli_num_rows($query1);
                $total_page = ceil($total_record / $perpage);
                ?>
                
               
                  <ul class="pagination">
                    <li>
                      <a href="raw_conclude_pvc.php?page=1" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      </a>
                      </li>
                      <?php for($i=1;$i<=$total_page;$i++){ ?>
                      <li><a href="raw_conclude_pvc.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                      <?php } ?>
                      <li>
                      <a href="raw_conclude_pvc.php?page=<?php echo $total_page;?>" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                  
            <?php

              mysqli_close($link); */

            ?>
          </form>
        </article>
        </section>

<footer>

</footer>


</body>
</html>
