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

#projects .projects {
	flex-direction: column;
	max-width: 1200px;
	margin: 0 auto;
	padding: 100px 0;
}

#projects .projects-header h1 {
	margin-bottom: 50px;
}

#projects .all-projects {
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
}

#projects .project-item {
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	width: 80%;
	margin: 20px auto;
	overflow: hidden;
	border-radius: 10px;
}

#projects .project-info {
	padding: 30px;
	flex-basis: 50%;
	height: 100%;
	display: flex;
	align-items: flex-start;
	justify-content: center;
	flex-direction: column;
	background-image: linear-gradient(60deg, #e31e24 0%, #000000 100%);
	color: white;
}

#projects .project-info h1 {
	font-size: 4rem;
	font-weight: 500;
}

#projects .project-info h2 {
	font-size: 1.8rem;
	font-weight: 500;
	margin-top: 10px;
}

#projects .project-info p {
	color: white;
}

#projects .project-img {
	flex-basis: 50%;
	height: 300px;
	overflow: hidden;
	position: relative;
}

#projects .project-img:after {
	position: absolute;
	left: 0;
	top: 0;
	height: 100%;
	width: 100%;
	background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
	opacity: 0.7;
}

#projects .project-img img {
	transition: 0.3s ease transform;
}

#projects .project-item:hover .project-img img {
	transform: scale(1.1);
}

@media only screen and (min-width: 768px) {
	.cta {
		font-size: 2.5rem;
		padding: 20px 60px;
	}
	h1.section-title {
		font-size: 6rem;
	}

	#hero h1 {
		font-size: 7rem;
	}

	#services .service-bottom .service-item {
		flex-basis: 45%;
		margin: 2.5%;
	}

	#projects .project-item {
		flex-direction: row;
	}
	#projects .project-item:nth-child(even) {
		flex-direction: row-reverse;
	}
	#projects .project-item {
		height: 400px;
		margin: 0;
		width: 100%;
		border-radius: 0;
	}
	#projects .all-projects .project-info {
		height: 100%;
	}
	#projects .all-projects .project-img {
		height: 100%;
	}
}

@media only screen and (min-width: 1200px) {
	
	#header .hamburger {
		display: none;
	}
	#header .nav-list ul {
		position: initial;
		display: block;
		height: auto;
		width: fit-content;
		background-color: transparent;
	}
	#header .nav-list ul li {
		display: inline-block;
	}
	#header .nav-list ul li a {
		font-size: 1.8rem;
	}
	#header .nav-list ul a:after {
		display: none;
	}

	#services .service-bottom .service-item {
		flex-basis: 22%;
		margin: 1.5%;
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

<section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <center><h1>TRENING</h1></center>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h2>LES MILLS CORE</h2>
            <p>Les Mills intenzivan core trening za funkcionalnu kondiciju. Znanstveno je dizajniran za izgradnju snage, stabilnosti i izdržljivosti u mišićima koji podupiru vaš trup, uključujući trbušne mišiće, gluteuse i leđa.</p>
          </div>
          <div class="project-img">
            <img src="img/slika14.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h2>LES MILLS BODY PUMP</h2>
            <p>Les Mills trening za cijelo tijelo s utezima uz koji ćete sagorjeti kalorije, oblikovati i tonirati cijelo tijelo, povećati snagu i poboljšati zdravlje kostiju uz upotrebu Les Mills šipke i stepa.</p>
          </div>
          <div class="project-img">
            <img src="img/slika10.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h2>LES MILLS BODY ATTACK</h2>
            <p>Atletski Les Mills trening visokog intenziteta usmjeren na kardio fitness, mišićnu izdržljivost i agilnost. Kombinira trening inspiriran sportom poput trčanja, iskoraka i skakanja s treningom snage s tjelesnom težinom.</p>
          </div>
          <div class="project-img">
            <img src="img/slika11.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h2>LES MILLS BODY BALANCE</h2>
            <p>Sat temeljen na Yogi koji će opustiti vaš um i tijelo te unaprijediti cjelokupno blagostanje. Elementima Tai Chija, Pilatesa i Yoge, ojačat ćete cijelo tijelo, poboljšati fleksibilnost i smanjiti stres.</p>
          </div>
          <div class="project-img">
            <img src="img/slika12.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h2>LES MILLS GRIT CARDIO</h2>
            <p>Znanstveno testiran Les Mills trening koji koristi vježbe s tjelesnom težinom s fokusom na brzinu. Razvijte anaerobnu izdržljivost i brzo poboljšajte svoju kardiovaskularnu kondiciju kako biste brzo bili u formi i to uz samo 30 minuta vježbanja.</p>
          </div>
          <div class="project-img">
            <img src="img/slika13.png" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>

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