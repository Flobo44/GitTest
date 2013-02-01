<?php
	// Date en français
	if ($_SERVER["REMOTE_ADDR"] == "127.0.0.1") {
		$locale = 'french';
	}
	else {
		$locale = 'fr_FR';
	}
	setlocale(LC_TIME, $locale);
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<!--[if lt IE 10]>
		<link href="css/commun_ie.css?<?php echo time(); ?>" rel="stylesheet" type="text/css" media="screen" />
		<link href="css/index_ie.css?<?php echo time(); ?>" rel="stylesheet" type="text/css" media="screen" />
		<link href="css/accueil_ie.css?<?php echo time(); ?>"  rel="stylesheet" type="text/css" media="screen" />
		<link href="css/restaurant_ie.css?<?php echo time(); ?>"  rel="stylesheet" type="text/css" media="screen" />
		<link href="css/carte_ie.css?<?php echo time(); ?>"  rel="stylesheet" type="text/css" media="screen" />
		<link href="css/emporter_ie.css?<?php echo time(); ?>"  rel="stylesheet" type="text/css" media="screen" />
		<link href="css/contact_ie.css?<?php echo time(); ?>"  rel="stylesheet" type="text/css" media="screen" />
		<![endif]-->
		<!--[if (!IE)|(gte IE 10)]><!-->
		<link href="css/commun.css?<?php echo time(); ?>" rel="stylesheet" type="text/css" media="screen" />
		<link href="css/index.css?<?php echo time(); ?>"  rel="stylesheet" type="text/css" media="screen" />
		<link href="css/accueil.css?<?php echo time(); ?>"  rel="stylesheet" type="text/css" media="screen" />
		<link href="css/restaurant.css?<?php echo time(); ?>"  rel="stylesheet" type="text/css" media="screen" />
		<link href="css/carte.css?<?php echo time(); ?>"  rel="stylesheet" type="text/css" media="screen" />
		<link href="css/emporter.css?<?php echo time(); ?>"  rel="stylesheet" type="text/css" media="screen" />
		<link href="css/contact.css?<?php echo time(); ?>"  rel="stylesheet" type="text/css" media="screen" />
		<!--><![endif]-->
		<script type="text/javascript" src="scripts/jquery-1.3.2.js"></script>
		<script type="text/javascript" src="scripts/script.js"></script>
		<script type="text/javascript" src="scripts/jquery.jDiaporama.js"></script>
		<script type="text/javascript" src="scripts/jquery-glowing.js"></script>
		<script type="text/javascript" src="scripts/jquery.color.js"></script>
		<title>Café Pepone</title>
	</head>
	
	<body>
		<div id="logo">
			<p><img style="text-align: center;" src="images/logo_pepone_200.png" /></p>
		</div>
		
		<div id="page">
		
			<div id="menu">
				<ul>
					<li><a class="lien" href="#" alt="accueil"><span class="positionTexte">Accueil</span></a></li>
					<li><a class="lien" href="#" alt="restaurant"><span class="positionTexte">Le restaurant</span></a></li>
					<li><a class="lien" href="#" alt="carte"><span class="positionTexte">La carte</span></a></li>
					<li><a class="lien" href="#" alt="emporter"><span class="positionTexte">A emporter</span></a></li>
					<li><a class="lien" href="#" alt="contact"><span class="positionTexte">Contact</span></a></li>
				</ul>
			</div>
			
			<div id="transitionMenu"></div>
			
			<div id="content"></div>
			
			<div id="footer">
				<p>
					10, place de l'Église<br/>
					44700 ORVAULT<br/>
					Tél. 02 40 63 01 87<br/><br/>
					Lundi au samedi 11h00-14h30 / 18h00-22h00
				</p>
			</div>
			
		</div>
		
		<div id="powered">
			<p>Réalisé par : <a href="http://www.florianbousseaud.fr">Florian Bousseaud</a></p>
		</div>
		
	</body>
	
</html>
			
		