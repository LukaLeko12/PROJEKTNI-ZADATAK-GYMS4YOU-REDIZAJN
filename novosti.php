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
	background-image: linear-gradient(60deg, #000000 0%, #e31e24 100%);
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
        <center><h1>NOVOSTI</h1></center>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h2>Što je mind-muscle veza i kako nam pomaže u treningu?</h2>
            <p>Trening se dijeli na vanjski i unutarnji fokus. Vanjski fokus obuhvaća predmet kojim baratamo (kao što su utezi), dok se unutarnji fokus odnosi na osjećaje i pokrete tijela (kao što su kontrakcije mišića).
            Mind-muscle veza često se spominje u bodybuilding svijetu i opisuje princip treninga ili povezanost uma s mišićem kojeg trenutno treniramo. Neki bi to opisali i kao „osjećaj“ rada mišića tijekom treninga ili fokusiranost na izvođenje određene vježbe.</p>
          </div>
          <div class="project-img">
            <img src="img/slika4.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h2>Postani instruktor grupnih treninga u Zadru</h2>
            <p>Želiš biti dio instruktorskog tima, razvijati se, učiti i stjecati radne navike? Onda imamo Job4You!
            U Gyms4you centru u Zadru zapošljavamo Instruktore grupnih treninga (m/ž).
            Zadaci koje ćeš obavljati kao instruktor grupnih programa u Gyms4you uključuju vođenje grupnih treninga, brigu o zadovoljstvu i napretku članova te brigu o funkcionalnosti i urednosti studia za grupne treninge.</p>
          </div>
          <div class="project-img">
            <img src="img/slika5.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h2>Kako ostati u formi tijekom blagdana?</h2>
            <p>Ostati vjeran svojoj rutini i ciljevima najteže je u vrijeme blagdana. Uz obilje hrane, kolača i alkohola na proslavama teško je uskratiti si užitke i paziti na formu.  Postignut napredak dolazi u rizik, a budući napredak stagnira. No, postoji nekoliko načina kako održati formu koliko-toliko normalnom u ovo ludo blagdansko vrijeme.</p>
          </div>
          <div class="project-img">
            <img src="img/slika6.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h2>Ugrabi Value Pack za samo 1€ na Black Friday!</h2>
            <p>Value Pack je paket pogodnosti koji funkcionira kao opcionalan dodatak na vašu članarinu. Ideja i svrha pogodnosti koje se nalaze u paketu je omogućiti članovima unaprijeđeno i poboljšano iskustvo svakog mjeseca treninga u teretani. Cilj paketa je podizanje iskustva Gyms4you članova na novu razinu!</p>
          </div>
          <div class="project-img">
            <img src="img/slika7.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h2>Dva dana Les Mills grupnih treninga za apsolutno svakog!</h2>
            <p>Što je Les Mills?
            <br>
            Les Mills je svjetski lider u kreiranju grupnih treninga te svaka tri mjeseca instruktori širom svijeta dobivaju nova izdanja treninga kako bi naši vježbači konstantno imali priliku učiti, napredovati u svom treningu te poboljšati svoje zdravlje. Ono što je posebno važno jest da iste te treninge možete raditi kako u Gyms4you, tako i u ostalim Les Mills klubovima diljem svijeta. Time se Gyms4you pozicionira uz bok svjetski poznatim fitness klubovima, što nas čini posebnima u našoj regiji.</p>
          </div>
          <div class="project-img">
            <img src="img/slika18.jpg" alt="img">
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