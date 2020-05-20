<?php

        $link = mysqli_connect("192.168.6.6:82","root","","webapp");
        mysqli_set_charset($link, 'utf8');

        if($link) 
        {

            //echo "Connected successfully <br>";
            //echo "Connection number = $link->thread_id";
            //mysqli_close($link);

        }

        else 
        {

            die('Could not connect: '. mysqli_error($link));

        }
 
?>
