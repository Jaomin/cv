<!DOCTYPE html>
<head>
<title>Evidence</title>
<meta charset="UTF-8">
<html xmlns:og="http://ogp.me/ns#"/> 
<meta name="description" content="vous trouverez sur ce site un descriptif exhaustif de mon parcours professionnel ainsi que quelques uns de mes supports de communication" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="og:title" content="CV Valérie Le Guen">
<meta name="og:image" content="http://www.valerieleguen.fr/images/photoSite.png">
<link rel="icon" type="image/ico" href="images/favicon.ico" />
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="temp.css">
<link rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88582422-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body>
<div class="container-fluid"> 
	<ol class="w3-navbar">
	  <li><a id="skills" href="index.php" title="home" style="text-decoration:none;">HOME</a></li>
	  <li class="active"><a href="experiences.php" title="CV" style="text-decoration:none;">CV</a></li>
	</ol>
</div>

	<div class="diapo">
		<img alt="negatif" src="images/neg1.png">
	</div>

	<div class="w3-content w3-container w3-padding-64">
	 	<div class="col-md-12 col-xs-12 parcours">

			<h1 class="w3-center">Mentions légales</h1>

			<p>valerieleguen.fr est édité à titre personnel au sens de l’article 6, III, 2° de la loi 2004-575 du 21 juin 2004.</p> 

			<h2>Hébergement :</h2>

			<p>OVH</p>
			<p>SAS au capital de 10 069 020 €<br>
			RCS Lille Métropole 424 761 419 00045<br>
			Code APE 2620Z<br>
			N° TVA : FR 22 424 761 419<br>
			Siège social : 2 rue Kellermann - 59100 Roubaix - France</p>

			<h2>Propriété :</h2>

			<p>Toute reproduction de valerieleguen.fr est strictement interdite sans accord préalable écrit. Pour toute demande de partenariat ou de reproduction, même partielle, veuillez me contacter.</p>

			</div>
			</div>
			</div>
			</div>
			<!-- Add Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
<!-- Google Map Location -->
var myCenter = new google.maps.LatLng(41.878114, -87.629798);

function initialize() {
var mapProp = {
  center: myCenter,
  zoom: 12,
  scrollwheel: false,
  draggable: false,
  mapTypeId: google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position: myCenter,
});

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-navbar" + " w3-card-2" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
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