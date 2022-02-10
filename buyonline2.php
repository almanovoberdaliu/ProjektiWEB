<!DOCTYPE html>
<html>
<head>
    <title>Buy Online</title>
    <style>
        body{
            background-color: rgb(223, 223, 223);
        }
        main{
            background-color: whitesmoke;
            width: 70%; 
            margin-left: auto; 
            margin-right: auto;
            margin-top: 3%;
            box-shadow: 15px 15px 20px rgb(100, 100, 100);
            border-radius: 10px;
        }
        table{
            width: 80%; 
            margin-left: auto; 
            margin-right: auto; 
            margin-top: 5%; 
            margin-bottom: 5%;
        }
        .d dialog{
            border-radius: 2px;
            border-color: blue;
            color: blue;
            background: lightgreen;
            width: 250px;
            height: 60px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 40px;
            margin-top: -350px;
        }
        .inputet{
            border-radius: 1px; 
            height: 35px; 
            width: 320px;
            box-shadow: 2px 2px 2px rgb(100, 100, 100);
            border-radius: 1px; 
            border: darkgray; 
            background-color: rgb(151, 151, 151); 
            color: whitesmoke;
            font-family: 'Courier New', Courier, monospace;
            font-size: 15px;
            font-weight: bold;
        }
        .butoniSubmit{
            border: inset 0;
            border-radius: 12px;
            background-color: rgb(233, 233, 233); 
            color: rgb(85, 85, 85);
            height: 35px;
            width: 250px;
            margin-left: 35%;
            margin-top: 3%;
            margin-bottom: 3%;
            font-size: 20px;
            box-shadow: 5px 5px 5px rgb(100, 100, 100);
        }
        .butoniSubmit:hover {
            color: whitesmoke;
            background-color: rgb(97, 97, 97);
            border: 2px solid darkblue;
            box-shadow: 10px 10px 10px rgb(100, 100, 100);
        }
        fieldset{
            border-radius: 10px; 
            border: 1px inset darkblue;
            background: rgb(255, 255, 255);
            width: 80%; 
            margin-left: auto; 
            margin-right: auto;
            box-shadow: 5px 5px 5px rgb(100, 100, 100);
        }
    </style>
</head>
<body>
    <main>
        <fieldset>
            <legend><h3 style="color: rgb(70, 70, 70)">Payment Methods</h3></legend>
            <input type="radio" name="pay" id="Card"><h3 style="display: inline; color: rgb(70, 70, 70)">Debit or Credit Card</h3> <br><br>
            <input type="radio" name="pay" id="Cash"><h3 style="display: inline; color: rgb(70, 70, 70)">Cash</h3> <br><br>
        </fieldset>
        <table>
            <div class="d1">
                <tr>
                    <td>First Name<br><input type="text" class="inputet" id="emri"></td>
                    <td>Last Name<br><input type="text" class="inputet" id="mbiemri"></td>
                </tr>
                <tr>
                    <td>Credit Card Number<br><input type="number" id="creditcard" class="inputet" maxlength="16" placeholder="**** **** **** ****"></td>
                    <td>Security Code<br><input type="number" id="cvc" class="inputet" placeholder="CVC" maxlength="3" min="100" max="999">
                </tr>
                <tr>
                    <td>Card Expiration<br><input type="text" id="cardExpiration" class="inputet" maxlength="5" placeholder="MM/YY"></td>
                </tr>
            </div>
        </table>
        <hr>
        <div class="d">
            <input type="button" id="submit" value="Submit Order" class="butoniSubmit">
            <dialog id="myDialog">Order submited</dialog>
        </div>
        <label id="label"></label>
        <script>
            var goon = document.getElementById("submit");

            goon.addEventListener("click",function(event) {
            var LabelValidimi = document.getElementById('label');

            var nameV = /([A-Z][a-z]{2,9})/;
            var name = document.getElementById("emri").value;
    
            var snValidation = /^[A-Z][a-z]{2,20}/;
            var surname = document.getElementById('mbiemri').value;

            var creditcardV = /[0-9]{15}$/;
            var creditcard = document.getElementById("creditcard").value;

            var cvcV = /^[1-9][0-9]{2}$/;
            var cvc = document.getElementById("cvc").value;

            var cardExpirationV = /^((0[1-9])|(1[0-2]))\/(\d{2})$/;
            var cardExpiration = document.getElementById("cardExpiration").value;

            if(name != "" && surname != "" && creditcard != "" && cvc != "" && cardExpiration != ""){
                if(nameV.test(name) == true && snValidation.test(surname) == true && creditcardV.test(creditcard) == true
                && cvcV.test(cvc) == true && cardExpirationV.test(cardExpiration) == true){
                    x.show();
                    LabelValidimi.innerHTML ="";
                }
            }

            if(cardExpiration == ""){
                LabelValidimi.innerHTML ="Please fill the <b>Card Expiration</b> field !!";
                LabelValidimi.style.color = "red";
                event.preventDefault();
            }
            else{
                if(cardExpirationV.test(cardExpiration) == true){
    
                }
                else{
                    LabelValidimi.innerHTML = "Please fill the <b>Card Expiration</b> field correctly !!";
                    LabelValidimi.style.color = "red";
                    event.preventDefault();
                }
            }

            if(cvc == ""){
                LabelValidimi.innerHTML ="Please fill the <b>Security Code</b> field !!";
                LabelValidimi.style.color = "red";
                event.preventDefault();
            }
            else{
                if(cvcV.test(cvc) == true){
    
                }
                else{
                    LabelValidimi.innerHTML = "Please fill the <b>Security Code</b> field correctly !!";
                    LabelValidimi.style.color = "red";
                    event.preventDefault();
                }
            }

            if(creditcard == ""){
                LabelValidimi.innerHTML ="Please fill the <b>Credit Card Number</b> field !!";
                LabelValidimi.style.color = "red";
                event.preventDefault();
            }
            else{
                if(creditcardV.test(creditcard) == true){
    
                }
                else{
                    LabelValidimi.innerHTML = "Please fill the <b>Credit Card Number</b> field correctly !!";
                    LabelValidimi.style.color = "red";
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

            if(name == "" && surname == "" && creditcard == "" && cvc == "" && cardExpiration == ""){
                LabelValidimi.innerHTML = "Two or more fields are empty !!";
                LabelValidimi.style.color = "red";
                event.preventDefault();
            }
        })

        var x = document.getElementById("myDialog"); 
            function showDialog() { 
                x.show(); 
            }
        </script>
    </main>
</body>
</html>