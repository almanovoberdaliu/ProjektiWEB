<!DOCTYPE html>
<html>
<head>
	<title>Mobile Shop</title>
    <link rel="stylesheet" href="main.css">
	
</head>
<body>
  <header class="header-phone" style="background-color: rgb(117, 117, 117); height: 6vh;">
    <h3>Latest phones with the best prices ever</h3>
    <h3>Get your favourite now!</h3>
   </header>

	<div class="container-phone">
    <a id="up"></a>
		<div class="filter-inputs">
			<!--inputet per filtrim-->
			<div class="divi-2">    
                <label class="input-group-text" for="inputGroupSelect01">Min: </label>
                <select class="custom-select" id="min">
                <option selected>Any</option>
                <option value="400">400</option>
                <option value="600">600</option>
                </select>
            </div>
			<div class="divi-3">
                <label class="input-group-text" for="inputGroupSelect01">Max: </label>
                <select class="custom-select" id="max">
                <option selected>Any</option>
                <option value="800">800</option>
                <option value="1200">1200</option>
                </select>
            </div>
			<div class="company-div">
                <label class="input-group-text" for="inputGroupSelect01">Company</label>
                <select class="custom-select" id="comp">
                <option selected>All</option>
                <option value="Samsung">Samsung</option>
                <option value="Apple">Apple</option>
                </select>
            </div>	

            
		</div>

			<div class="filter">
				<button onclick="filt()" type="button" class="filter-button">Shfaq</button>			
			</div>
		
		<div class="cards" id="tel-cards">
			<!--cards per shfaqjen e telefonave-->
		</div>
	</div>


    
    <footer style="background-color:rgba(73, 71, 71, 0.842); margin-top: 40px;" id="footer-phone">
        
        <div style="margin-left: 30px;">
          <a href="index.html"><img src="img/logo.png" width="100" height="100" style="border-radius: 48%;"></a> <br>
          <p>Since 2006</p>
        </div>

        <div class="Llogaria">
          <b>Llogaria</b> <br> <br>
          <a href="LogIn.html" class="kycu">Kycu</a> <br>
          <a href="Sign_up.html">Regjistrohu</a>
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
    <div style="text-align: left; background-color:rgba(73, 71, 71, 0.842);" class="footer2">
      <a href="index.html">HOME</a> 
      <a href="Laptopi.html">LAPTOP</a> 
      <a href="buyonline.html">BUY ONLINE</a> 
      <a href="AboutUs.html">ABOUT US</a> <br> <br> 
      <a href="#"><img src="img/insta.png" width="30px" height="30px"></a>
      <a href="#"><img src="img/fb.png" width="30px" height="30px"></a>
      <a href="#"><img src="img/twitter.png" width="30px" height="30px"></a>

    </div>
    <div style="text-align: center; background-color:rgba(73, 71, 71, 0.842);" >
      <a href="#up" style="text-decoration: none; color: #0b152cf1;">Back to top</a>
          <a href="#up"><img src="img/arrow.png" width="30px" height="30px" ></a>
      </div>
    
  


<script type="text/javascript" src="script.js"></script>
</body>
</html>