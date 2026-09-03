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
body,h1,h2,h3,h4,h5,h6,table {font-family: "Lato", sans-serif}
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

  table {
  font-family: ;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
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
<h2>REGISTRIRANI KORISNICI:</h2>
</center>
<table>
  <tr>
    <th>Ime:</th>
    <th>Prezime:</th>
    <th>Nadimak:</th>
    <th>Email:</th>
    <th>Password:</th>
    <th>Adresa:</th>
  </tr>
  <tr>
    <td> <?php echo $_POST["name"]; ?></td>
    <td> <?php echo $_POST["surname"]; ?></td>
    <td> <?php echo $_POST["username"]; ?></td>
    <td> <?php echo $_POST["email"]; ?></td>
    <td> <?php echo $_POST["password"]; ?></td>
    <td> <?php echo $_POST["adress"]; ?></td>
    
  </tr>
 
</table>
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