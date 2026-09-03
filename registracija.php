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
<center>
<h1>REGISTRACIJA:</h1>
</center>
<form action="reg_unos.php" method="post">
  <center>
<h1>REGISTRACIJA:</h1>
</center>
  <div class="container">
    <label for="name"><b>Ime:</b></label>
    <input type="name" placeholder="" name="name" required>
<br>
    <label for="surname"><b>Prezime:</b></label>
    <input type="surname" placeholder="" name="surname" required>
<br>
<label for="username"><b>Korisničko ime:</b></label>
    <input type="username" placeholder="" name="username" required>
<br> 
<label for="email"><b>E-mail:</b></label>
    <input type="email" placeholder="" name="email" required>
<br>
<label for="password"><b>Lozinka:</b></label>
    <input type="password" placeholder="" name="password" required>
    <br>
<label for="adress"><b>Adresa:</b></label>
    <input type="adress" placeholder="" name="adress" required>     
    <button type="submit">Registriraj se</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Zapamti me
    </label>
  </div>
</form>

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