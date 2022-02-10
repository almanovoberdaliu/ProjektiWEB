<!DOCTYPE html>
<html lang="en">
<head>
    <title>Buy Online</title>
    <style>
        body{
            background-color: rgb(238, 238, 238);
        }
        input{
            border-radius: 1px; 
            border: darkgray; 
            background-color: rgb(151, 151, 151); 
            color: whitesmoke;
            height: 25px;
            margin-left: 7px;
        }
        h4{
            font-family: 'Times New Roman', Times, serif;
            font-size: 12;
            color: darkblue; 
            margin-left: 7px;
        }
        .butonicontinue{
            margin-left: 34%; 
            margin-top: 5%; 
            width: 125px; 
            height: 30px;
            font-size: 19px;
            border: inset 0;
            border-radius: 12px;
            background-color: rgb(182, 182, 182); 
            color: rgb(85, 85, 85);
        }
        .butonicontinue:hover {
            color: whitesmoke;
            background-color: rgb(117, 117, 117);
            border: 2px solid darkblue;
            box-shadow: 5px 5px 5px rgb(100, 100, 100);
        }
    </style>
</head>
<body>
    <main>
        <label id="label"></label>
        <table>
            <tr>
                <td style="text-align: center; width: 50%;"><img src="img/Payment.gif" alt="" height="120%" width="95%"></td>
                <td>
                    <form style="border-radius: 10px; border: 2px inset darkblue; width: 350px; height: 610px; background-color: whitesmoke; margin-left: auto; margin-right: auto;">
                        <img src="img/logo.PNG" alt="" width="35%" style="margin-left: 33%; margin-top: 2%; border-radius: 45px;" >
                        <pre><h4 >First Name*                      Last Name*</h4></pre>
                        <input type="text" id="emri">
                        <input type="text" id="mbiemri" style="margin-left: 2px">
                        <pre><h4 >Phone Number*</h4></pre>
                        <input type="number" id="nrTel" placeholder="04x-xxx-xxx" style="width: 330px; ">
                        <pre><h4 >Email Address*</h4></pre>
                        <input type="email" id="email" placeholder="Must contain @ and .com" style="width: 330px; ">
                        <pre><h4 >Address*</h4></pre>
                        <input type="text" id="address" placeholder="No., Street, City, Country" style="width: 330px;">
                        <pre><h4 >Zip Code*</h4></pre>
                        <input type="number" id="zip" min="10000" style="width: 330px;">
                        <a href="C:\Users\HP\OneDrive\Desktop\Inxhinieri e WEB\ProjektiWEB\buyonline2.html" ><input type="button" id="continue" value="Continue" class="butonicontinue"></a>
                    </form>
                </td>
            </tr>
        </table>
    </main>
    <script>
  
        var goon = document.getElementById("continue");
    
        goon.addEventListener("click",function(event) {
            var LabelValidimi = document.getElementById('label');

            var nameV = /([A-Z][a-z]{2,9})/;
            var name = document.getElementById("emri").value;
    
            var snValidation = /^[A-Z][a-z]{2,20}/;
            var surname = document.getElementById('mbiemri').value;

            var nrV = /^(0|[0-9][0-9]*)$/;
            var nrtel = document.getElementById('nrTel').value;

            var emailV = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})/;
            var email = document.getElementById('email').value;

            var addressV = /^[0-9]{1,3}\,\s[A-Za-z]{5,15}(\s?)([A-Z][a-z]{0,15})?\,\s[A-Z][a-z]{2,15}\,\s[A-Z][a-z]{4,30}$/;
            var address = document.getElementById('address').value;

            var zipV = /^[1-9][0-9]{4}/;
            var zip = document.getElementById('zip').value;

            if(zip == ""){
                LabelValidimi.innerHTML = "Please fill the <b>zip code</b> field !!";
                LabelValidimi.style.color = "red";
                event.preventDefault();
            }
            else{
                if(zipV.test(zip) == true){
                    
                }
                else{
                    LabelValidimi.innerHTML = "Please fill the <b>zip code</b> field correctly !!";
                    LabelValidimi.style.color="red";
                    event.preventDefault();
                }
            }

            if(address == ""){
                LabelValidimi.innerHTML = "Please fill the <b>address</b> field !!";
                LabelValidimi.style.color = "red";
                event.preventDefault();
            }
            else{
                if(addressV.test(address) == true){
                    
                }
                else{
                    LabelValidimi.innerHTML = "Please fill the <b>address</b> field correctly !!";
                    LabelValidimi.style.color="red";
                    event.preventDefault();
                }
            }

            if(email == ""){
                LabelValidimi.innerHTML = "Please fill the <b>email</b> field !!";
                LabelValidimi.style.color = "red";
                event.preventDefault();
            }
            else{
                if(emailV.test(email) == true){
                    
                }
                else{
                    LabelValidimi.innerHTML = "Please fill the <b>email</b> field correctly !!";
                    LabelValidimi.style.color="red";
                    event.preventDefault();
                }
            }

            if(nrtel == ""){
                LabelValidimi.innerHTML= "Please fill the <b>phone number</b> field !!";
                LabelValidimi.style.color="red";
                event.preventDefault();
            }
            else{
                if(nrV.test(nrtel) == true){
                 
                }
                else{
                    LabelValidimi.innerHTML= "Please fill the <b>phone number</b> field correctly !!";
                    LabelValidimi.style.color="red";
                    event.preventDefault();
                }
            }

            if(surname == ""){
                LabelValidimi.innerHTML ="Please fill the <b>surname</b> field !!";
                LabelValidimi.style.color = "red";
                event.preventDefault();
            }
            else{
                if(snValidation.test(surname) == true){
    
                }
                else{
                    LabelValidimi.innerHTML = "Please fill the <b>surname</b> field correctly !!";
                    LabelValidimi.style.color = "red";
                    event.preventDefault();
                }
            }

            if(name == ""){
                LabelValidimi.innerHTML="Please fill the <b>name</b> field !!";
                LabelValidimi.style.color = "red";
                event.preventDefault();
            }
            else{
                if(nameV.test(name) == true){
    
                }else{
                    LabelValidimi.innerHTML="Please fill the <b>name</b> field correctly !!";
                    LabelValidimi.style.color="red";
                    event.preventDefault();
                }
            }
            
            if(name == "" && surname == "" && nrtel == "" && email == "" && address == "" && zip == ""){
                LabelValidimi.innerHTML = "Two or more fields are empty !!";
                LabelValidimi.style.color = "red";
                event.preventDefault();
            }
        })
    </script>
</body>
</html>