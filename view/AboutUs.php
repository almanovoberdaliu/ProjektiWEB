<?php
    include_once '../repository/aboutUsRepository.php';

    $aboutUs = new aboutUsRepository;
?>
<!DOCTYPE html>
<html>
<head>
    <title>AboutUs</title>
    <link rel="stylesheet" href="AboutUs.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <h3 id="up" class="ontech">ON-TECH</h3>
        <ul>
            <a href="index.php" style="text-decoration: none; color: whitesmoke"><li>Home</li></a>
            <a href="phone.php" style="text-decoration: none; color: whitesmoke"><li>Mobile Phone</li></a>
            <a href="Laptopi.php" style="text-decoration: none; color: whitesmoke"><li>Laptop</li></a>
            <a href="LogIn.php" style="text-decoration: none; color: whitesmoke"><li>Sign Up</li></a>
        </ul>
    </header>
    <main>
        <div class="shigjeta">
            <pre style="color: darkgray;">Home >>> </pre>
            <pre style="color: rgb(73, 73, 73);">About Us</pre>
        </div>
        <hr>
        <pre style="color: rgb(73, 73, 73);; font-size: 25px;">About Us</pre>
        <div class="divmain">
            <div class="bgfoto">

            </div>
            <div class="we">
                <div class="fotooo">
                    <img src="foto/icon1.png" width="75%" height="75%" style="margin-top: 25px;">
                </div>
                <div class="txt">
                    <?php
                        $arr = $aboutUs->getAboutUsElement(1);
                    ?>
                    <h3><?php echo"$arr[0]"?></h3>
                    <p style="font-size:larger "><?php echo"$arr[1]"?></p>
                </div>
            </div>
            <div class="we">
                <div class="wemrendawe">
                    <div class="fotooo">
                        <img src="foto/icon3.png" width="65%" height="65%" style="margin-top: 25px;">
                    </div>
                    <div class="txt1">
                    <?php
                        $arr = $aboutUs->getAboutUsElement(2);
                    ?>
                    <h3><?php echo"$arr[0]"?></h3>
                    <p style="font-size:larger "><?php echo"$arr[1]"?></p>
                    </div>
                </div>
            </div>
            <div class="bgfoto1">

            </div>
            <div class="bgfoto2">
                <?php
                    $arr = $aboutUs->getAboutUsElement(3);
                ?>
                <h2><?php echo"$arr[0]"?></h2>
                <p style="font-size:larger "><?php echo"$arr[1]"?></p>
            </div>
            <div class="we">
                <div class="fotooo">
                    <img src="foto/Icon4.png" width="75%" height="75%" style="margin-top: 25px;">
                </div>
                <div class="txt">
                    <?php
                        $arr = $aboutUs->getAboutUsElement(4);
                    ?>
                    <h3><?php echo"$arr[0]"?></h3>
                    <p style="font-size:larger "><?php echo"$arr[1]"?></p>
                </div>
            </div>
        </div>
        <div class="bgfotofounders">
            <h1 style="text-align: center;">Founders</h1>
        </div>
        <div class="punuar_nga">
            <div class="flip-cardAlma">
                <div class="flip-card-inner">
                    <div class="flip-card-frontAlma">
                        <img src="foto/Alma.png" style="width: 100%; height: 100%;">
                    </div>
                    <div class="flip-card-back">
                        <?php
                            $arr = $aboutUs->getAboutUsElement(5);
                        ?>
                        <h1><?php echo"$arr[0]"?></h1> 
                        <p><?php echo"$arr[1]"?></p> 
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-frontFati">
                        <img src="foto/Fati.png" style="width: 100%; height: 100%;">
                    </div>
                    <div class="flip-card-back">
                        <?php
                            $arr = $aboutUs->getAboutUsElement(6);
                        ?>
                        <h1><?php echo"$arr[0]"?></h1> 
                        <p><?php echo"$arr[1]"?></p> 
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer style="background-color:rgba(187, 187, 187, 0.842);">
        
        <div style="margin-left: 30px;">
          <a href="index.html"><img src="logo.png" width="100" height="100" style="border-radius: 48%;"></a> <br> <br>
          <p>Since 2006</p>
        </div>

        <div class="Llogaria">
          <b>Llogaria</b> <br> <br>
          <a href="LogIn.html" class="kycu">Kycu</a> <br>
          <a href="LogIn.html">Regjistrohu</a>
        </div>

        <div class="Kontakt">
          <b>Kontakti</b> <br> <br>
          <p>Kosove: +383 49 311 321</p>
          <p>+383 45 639 179</p>
          <p>Email: contact@ubt-uni.net</p>
          <p>Magjistralja Prishtinë-Ferizaj Kilometri i 3</p>
          <p>Per ceshtje te riparimeve dhe kthimeve: <br>044 589 145 </p>
          
        </div>
      
    </footer> 
   
   
    <div class="footer2">
      <a href="#">BUY ONLINE</a> 
      <a href="#">ABOUT US</a> <br> <br> 
      <a href="#"><img src="foto/insta.png" width="30px" height="30px"></a>
      <a href="#"><img src="foto/fb.png" width="30px" height="30px"></a>
      <a href="#"><img src="foto/twitter.png" width="30px" height="30px"></a>

    </div>
    <div style="text-align: center; background-color:rgba(187, 187, 187, 0.842);" >
      <a href="#up" style="text-decoration: none; color: #0b152cf1;">Back to top</a>
          <a href="#up"><img src="foto/arrow.png" width="30px" height="30px" ></a>
      </div>
</body>
</html>