<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VİVA BİLGİSAYAR</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
       <div class="container">
         <h2>Arıza Takip Sistemi</h2>
         <!----------------------------------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="col">
                <button type="button" class="open-button btn-danger" onclick="openForm()">
                <i class="fa fa-wifi" style="font-size:35px;"></i><br>Erişim Arızası Bildir</button>
                <div class="form-popup" id="myForm">
                    <form action="erisimariza.php" class="form-container" method="POST">
                        <h1>Erişim Arızası Bildiri Raporu</h1>
                        <label for="ad"><b>Ad</b></label>
                        <input type="text" placeholder="Enter Name" name="name" required>
                        <label for="soyad"><b>Soyad</b></label>
                        <input type="text" placeholder="Enter Surname" name="surname" required>
                        <label for="sorun"><b>Sorun Raporu</b></label>
                        <textarea type="text" placeholder="Enter Error" rows="3" cols="60"name="error" required></textarea>
                        <label for="numara"><b>Telefon Numarası</b></label>
                        <input type="text" placeholder="Enter Phone Number" name="number" required>
                        <label for="email"><b>E-mail</b></label>
                        <input type="email" placeholder="Enter E-mail" id="email" name="email" required>
                        <button id="myBtn"type="submit" class="btn">Gönder</button>
                        <button type="button" class="btn cancel" onclick="closeForm()">Vazgeç</button>
                    </form>
                </div>
        

             <!----------------------------------------------------------------------------------------------------------------------------------------------------------------------->
            
                <button type="button" class="open-button btn-success" onclick="openForm1()"><i class="fa fa-wrench" style="font-size:35px;"></i><br>Donanım Arızası Bildir</button>
                <div class="form-popup" id="myForm1">
                    <form action="donanimariza.php" class="form-container" method="POST">
                        <h1>Donanım Arızası Bildiri Raporu</h1>

                        <label for="ad"><b>Ad</b></label>
                        <input type="text" placeholder="Enter Name" name="name" required>

                        <label for="soyad"><b>Soyad</b></label>
                        <input type="text" placeholder="Enter Surname" name="surname" required>

                        <label for="sorun"><b>Sorun Raporu</b></label>
                        <textarea type="text" placeholder="Enter Error" rows="3" cols="60"name="error" required></textarea>

                        <label for="numara"><b>Telefon Numarası</b></label>
                        <input type="text" placeholder="Enter Phone Number" name="number" required>

                        <label for="email"><b>E-mail</b></label>
                        <input type="email" placeholder="Enter E-mail" id="email" name="email" required>

                        <button type="submit" class="btn" >Gönder</button>
                        <button type="button" class="btn cancel" onclick="closeForm1()">Vazgeç</button>
                    </form>
                </div>
            
        
        
       
              <!----------------------------------------------------------------------------------------------------------------------------------------------------------------------->
        
                <button type="button" class="open-button btn-warning" onclick="openForm2()"><i class="fa fa-random" style="font-size:35px;"></i><br>Altyapı Arızası Bildir</button>
                <div class="form-popup" id="myForm2">
                    <form action="altyapiariza.php" class="form-container" method="POST">
                        <h1>Altyapı Arızası Bildiri Raporu</h1>

                        <label for="ad"><b>Ad</b></label>
                        <input type="text" placeholder="Enter Name" name="name" required>

                        <label for="soyad"><b>Soyad</b></label>
                        <input type="text" placeholder="Enter Surname" name="surname" required>

                        <label for="sorun"><b>Sorun Raporu</b></label>
                        <textarea type="text" placeholder="Enter Error" rows="3" cols="60"name="error" required></textarea>

                        <label for="numara"><b>Telefon Numarası</b></label>
                        <input type="text" placeholder="Enter Phone Number" name="number" required>

                        <label for="email"><b>E-mail</b></label>
                        <input type="email" placeholder="Enter E-mail" id="email" name="email" required>

                        <button type="submit" class="btn" >Gönder</button>
                        <button type="button" class="btn cancel" onclick="closeForm2()">Vazgeç</button>
                    </form>
                </div>
            
            
             <!----------------------------------------------------------------------------------------------------------------------------------------------------------------------->
            
                <button type="button" class="open-button btn-primary" onclick="openForm3()"><i class="fa fa-minus-circle" style="font-size:35px;"></i><br>İnternet Sitesi Açılma/Engelleme Talebi</button>
                <div class="form-popup" id="myForm3">
                    <form action="internetariza.php" class="form-container" method="POST">
                        <h1>İnternet Arızası Bildiri Raporu</h1>

                        <label for="ad"><b>Ad</b></label>
                        <input type="text" placeholder="Enter Name" name="name" required>

                        <label for="soyad"><b>Soyad</b></label>
                        <input type="text" placeholder="Enter Surname" name="surname" required>

                        <label for="sorun"><b>Sorun Raporu</b></label>
                        <textarea type="text" placeholder="Enter Error" rows="3" cols="60"name="error" required></textarea>

                        <label for="numara"><b>Telefon Numarası</b></label>
                        <input type="text" placeholder="Enter Phone Number" name="number" required>

                        <label for="email"><b>E-mail</b></label>
                        <input type="email" placeholder="Enter E-mail" id="email" name="email" required>

                        <button type="submit" class="btn">Gönder</button>
                        <button type="button" class="btn cancel" onclick="closeForm3()">Vazgeç</button>
                    </form>
                </div>
            </div>
            
           
        </div>
        
        <!----------------------------------------------------------------------------------------------------------------------------------------------------------------------->

        <script>
        function openForm() {
        document.getElementById("myForm").style.display = "block";
        }
        function openForm1() {
        document.getElementById("myForm1").style.display = "block";
        }
        function openForm2() {
        document.getElementById("myForm2").style.display = "block";
        }
        function openForm3() {
        document.getElementById("myForm3").style.display = "block";
        }

        function closeForm() {
        document.getElementById("myForm").style.display = "none";
        }
        function closeForm1() {
        document.getElementById("myForm1").style.display = "none";
        }
        function closeForm2() {
        document.getElementById("myForm2").style.display = "none";
        }
        function closeForm3() {
        document.getElementById("myForm3").style.display = "none";
        }
        </script>
</body>
</html>


