<?php
    session_start();
    require "condb.php";

    $namepro = $_POST['namepro'];
    $company = $_POST['company'];
    $numpro = $_POST['numpro'];
    $invoice = $_POST['invoice'];
    $po = $_POST['po'];
    $datetype = $_POST['date'];
    $timeadd = $_POST['time'];
    $remark = $_POST['remark'];
    
                $sql = "INSERT INTO รับเข้า_วัตถุดิบ (namepro,company,numpro,invoice,po,datetype,timeadd,remark) VALUES ('$namepro','$company','$numpro','$invoice','$po','$datetype','$timeadd','$remark')"; 

                $result = mysqli_query($link,$sql);

                if ($result) {
                    header("location: raw_report_rawother.php");
                }
                else {
                    echo "error" .mysqli_error($link);
                 }
            
             mysqli_close($link);
            ?>