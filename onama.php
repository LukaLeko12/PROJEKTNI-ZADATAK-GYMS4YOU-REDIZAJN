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



body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #000000;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
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

<div class="about-section">
  <h1>O nama</h1>
  <p>Kada smo osnivali Gyms4you teretane, željeli smo sport i trening približiti širokoj skupini ljudi, što smo i postigli europskim konceptom i Loyalty članarinom koja nudi idealan omjer cijene i kvalitete. 
  <br>  
  Fokusirani smo na želju za promjenom s kojom naši klijenti dolaze, zbog čega smo Gyms4you učinili pristupačnim i povoljnim. 
  <br>
  U prostorima Gyms4you fitness centara svakodnevno treniraju početnici, rekreativci, sportaši i oni koji vježbaju već duže vrijeme. 
  <br>
  Pozivamo i tebe da nam se pridružiš.</p>
</div>

<h2 style="text-align:center">Naš tim trenera:</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Vedran</h2>
        <p class="title">Trener</p>
        <p>vedran@gyms4you.hr</p>
        <a href="kontakt.php">
        <p><button class="button">Kontaktiraj me</button></p>
       </a>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Nika</h2>
        <p class="title">Trenerica</p>
        <p>nika@gyms4you.hr</p>
        <a href="kontakt.php">
        <p><button class="button">Kontaktiraj me</button></p>
       </a>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Marina</h2>
        <p class="title">Trenerica</p>
        <p>marina@gyms4you.hr</p>
        <a href="kontakt.php">
        <p><button class="button">Kontaktiraj me</button></p>
       </a>
      </div>
    </div>
  </div>

<div class="column">
    <div class="card">
      <div class="container">
        <h2>Lana</h2>
        <p class="title">Trenerica</p>
        <p>lana@gyms4you.hr</p>
        <a href="kontakt.php">
        <p><button class="button">Kontaktiraj me</button></p>
       </a>
    </div>
  </div>
</div>

<div class="column">
    <div class="card">
      <div class="container">
        <h2>Luka</h2>
        <p class="title">Trener</p>
        <p>luka@gyms4you.hr</p>
        <a href="kontakt.php">
        <p><button class="button">Kontaktiraj me</button></p>
       </a>
    </div>
  </div>
</div>

<div class="column">
    <div class="card">
      <div class="container">
        <h2>Boris</h2>
        <p class="title">Trener</p>
        <p>boris@gyms4you.hr</p>
        <a href="kontakt.php">
        <p><button class="button">Kontaktiraj me</button></p>
       </a>
    </div>
  </div>
</div>

<div class="column">
    <div class="card">
      <div class="container">
        <h2>Ivan</h2>
        <p class="title">Trener</p>
        <p>ivan@gyms4you.hr</p>
        <a href="kontakt.php">
        <p><button class="button">Kontaktiraj me</button></p>
       </a>
    </div>
  </div>
</div>

<div class="column">
    <div class="card">
      <div class="container">
        <h2>Dražen</h2>
        <p class="title">Trener</p>
        <p>dražen@gyms4you.hr</p>
        <a href="kontakt.php">
        <p><button class="button">Kontaktiraj me</button></p>
       </a>
    </div>
  </div>
</div>

<div class="column">
    <div class="card">
      <div class="container">
        <h2>Igor</h2>
        <p class="title">Trener</p>
        <p>igor@gyms4you.hr</p>
        <a href="kontakt.php">
        <p><button class="button">Kontaktiraj me</button></p>
       </a>
    </div>
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