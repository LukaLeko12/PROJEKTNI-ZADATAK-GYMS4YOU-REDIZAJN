<!DOCTYPE html>
<html lang="en">
<head>
<title>Gyms4you</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/x-icon" href="favicon.ico">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}

.w3-red, .w3-hover-red:hover {
    color: #fff!important;
    background-color: #e31e24!important;
}

.w3-light-grey, .w3-hover-light-grey:hover, .w3-light-gray, .w3-hover-light-gray:hover {
    color: #000!important;
    background-color: #ffffff!important;
}

input[type=username], input[type=password], input[type=surname], input[type=email], input[type=adress], input[type=name]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #e31e24;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #00becd;
}

.container {
  padding: 16px;
  margin-top:50px;
  margin-left:600px;
  margin-right:600px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

  .cancelbtn {
     width: 100%;
  }

  body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #000000;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #e31e24;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
    <a href="novosti.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Novosti</a>
    <a href="trening.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Trening</a>
    <a href="onama.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">O nama</a>
    <a href="kontakt.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Kontakt</a>
    <a style="float:right" href="registracija.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Registracija</a>
    <a style="float:right" href="login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Prijava</a>
  </div>

  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="novosti.php" class="w3-bar-item w3-button w3-padding-large">Novosti</a>
    <a href="trening.php" class="w3-bar-item w3-button w3-padding-large">Trening</a>
    <a href="onama.php" class="w3-bar-item w3-button w3-padding-large">O nama</a>
    <a href="kontakt.php" class="w3-bar-item w3-button w3-padding-large">Kontakt</a>
    <a href="registracija.php" class="w3-bar-item w3-button w3-padding-large">Registracija</a>
    <a href="prijava.php" class="w3-bar-item w3-button w3-padding-large">Prijava</a>
  </div>
</div>

<h1>Kontakt</h1>
<form class="form2" action="kontakt_unos.php" method="post"  onsubmit="return provjeriFormu(this)">
<div class="container">
    <label for="fname">Vaše ime:</label>
    <input type="text" name="ime" placeholder="Vaše ime..">

    <label for="lname">Vaše prezime:</label>
    <input type="text" name="prezime" placeholder="Vaše prezime..">

    <label for="fname">Vaš email:</label>
    <input type="text" name="email" placeholder="Vaš email..">

    <label for="country">Država:</label>
    <select name="država">
      <option value="Trg slobode (Osijek)">Trg slobode (Osijek)</option>
      <option value="Sloboština (Zagreb)">Sloboština (Zagreb)</option>
      <option value="Put Murvice (Zadar)">Put Murvice (Zadar)</option>
      <option value="Velimira Škorpika (Šibenik)">Velimira Škorpika (Šibenik)</option>
      <option value="Vladimira Nazora (Karlovac)">Vladimira Nazora (Karlovac)</option>
      <option value="Bundek (Zagreb)">Bundek (Zagreb)</option>
      <option value="VMD (Zagreb)">VMD (Zagreb)</option>
      <option value="Dubrava (Zagreb)">Dubrava (Zagreb)</option>
      <option value="Heinzelova (Zagreb)">Heinzelova (Zagreb)</option>
      <option value="Maksimir (Zagreb)">Maksimir (Zagreb)</option>
      <option value="Remiza (Zagreb)">Remiza (Zagreb)</option>
      <option value="Park Kneževa (Zagreb)">Park Kneževa (Zagreb)</option>
      <option value="Kvaternik Plaza (Zagreb)">Kvaternik Plaza (Zagreb)</option>
      <option value="Voltino (Zagreb)">Voltino (Zagreb)</option>
      <option value="Dubrava Risnjačka (Zagreb)">Dubrava Risnjačka (Zagreb)</option>
      <option value="Črnomerec (Zagreb)">Črnomerec (Zagreb)</option>
      <option value="Blato (Zagreb)">Blato (Zagreb)</option>
    </select>

    <label for="subject">Poruka:</label>
    <textarea name="poruka" placeholder="Napiši nešto.." style="height:200px"></textarea>

    <input type="submit" value="Pošalji">
  </form>
</div>

<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="">
    <img src="img/slika3.jpg" alt="Opis slike" style="float: right;">
    </div>

    <div class="w3-twothird">
      <h1>24 LOKACIJE</h1>
      <h5 class="w3-padding-32">Zagreb (Kvaternik Plaza)
        <br>
        <br>
         Maksimirska cesta 8, Zagreb, Hrvatska
         <br>
         <br>
         kvaternik@gyms4you.com
         <br>
         <br>
         +385 1 234 9939
         <br>
         <br>
         Radno vrijeme recepcije:
         <br>
         Ponedjeljak - Petak: 09:00 - 21:00,
         Vikendi, blagdani i praznici: Zatvoreno.
         <br>
         <br>
         Radno vrijeme teretane:
         <br>
         Gyms4you teretane za članove su otvorene 0-24, 365 dana u godini.</h5>
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2048662.2880510087!2d17.101843437431672!3d44.834972360406944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475ce7a7b4795f57%3A0xdf97a94161dcbe56!2sGyms4you%20Osijek!5e0!3m2!1shr!2shr!4v1709049812959!5m2!1shr!2shr" width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</div>

<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <a href="https://www.facebook.com/Gyms4YouHrvatska/" class="fa fa-facebook-official w3-hover-opacity"></a>
    <a href="https://www.instagram.com/gyms4you/" class="fa fa-instagram w3-hover-opacity"></a>
 </div>
 <p>Luka Leko <a href="" target="_blank">All rights reserved 2024.</a></p>
</footer>

<script>

function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>