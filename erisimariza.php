<?php
            $servername= "localhost";
            $username ="root";
            $password ="1234";
            $dbname ="ariza";
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            if($conn->connect_error){
                die("connection failed:" .$conn->connection_error);
            }

            $isim= $_REQUEST['name'];
            $soyisim= $_REQUEST['surname'];
            $hata= $_REQUEST['error'];
            $num= $_REQUEST['number'];
            $posta= $_REQUEST['email'];

            $sql="INSERT INTO erisimariza (ad, soyad, ariza, numara, mail, tarih) 
            VALUES ('".$isim."','".$soyisim."','".$hata."','".$num."','".$posta."','".date("d:m:y")."')";

            if($conn->query($sql)===TRUE){
            }else{
                echo "Error:".$sql."<br>".$conn->error;
            }
            $conn->close();

            header("location:loading.php");

            ?>

