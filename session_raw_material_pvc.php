<?php
    session_start();
    require "condb.php";

                $namepro = $_POST['namepro'];
                $numpro = $_POST['numpro'];
				$company = $_POST['company'];
				$invoice = $_POST['invoice'];
				$po = $_POST['po'];
                $datetype = $_POST['date'];
                $timeadd = $_POST['time'];
                $remark = $_POST['remark'];
    
                $sql = "INSERT INTO pvc_in (namepro,numpro,company,invoice,po,datetype,timeadd,remark) 
                VALUES ('$namepro','$numpro','$company','$invoice','$po','$datetype','$timeadd','$remark')"; 

                $result = mysqli_query($link,$sql);

                if ($result) {
                    header("location: raw_report_pvc.php");
                }
                else {
                    echo "error" .mysqli_error($link);
                 }
            
             mysqli_close($link);
    ?>