<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;" charset="utf-8" />
	<meta http-equiv="Content-Language" content="fr" />
	<meta name="viewport" content="width=device-width, user-scalable=yes" />
	<title>SOS Informations vitales de secours - Toto tata</title>
	<style type="text/css">
		<!--
		body{
		font-family: sans-serif;
		}
		#zetel{
		font-family: monospace;
		}
		-->
	</style>
</head>
<body>
	<?php
		if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] == "oktm")
	{
	?>
	<h1>Informations vitales de secours : Toto tata</h1>
		<ul>
			<li>Nom : Toto</li>
			<li>Prénom : Tata</li>
			<li>Adresse : 1, avenue de la liberté 01234 LE MONDE</li>
			<li>Date de naissance : <span id="zetel">1970-01-01</span></li>
			<li>Âge : 12 ans</li>
			<li>Sexe : F/M</li>
			<li>Véhicule : Poney magique</li>
			<li>Immatriculation : <span id="zetel">AB-123-CD</span></li>
		</ul><hr/>
	<h2>Personnes à contacter</h2>
		<ul>
			<li>Tete (sœur de la cousine du frère): <span id="zetel">+33 (1) 23 45 67 89</span></li>
			<li>Tutu (grand oncle du voisin) : <span id="zetel">+33 (7) 23 45 67 89</span></li>
			<li>Titi (chaton Nyancat) : <span id="zetel">+33 (5) 23 45 67 89</span></li>
		</ul><hr/>
	<h2>Santé</h2>
		<ul>
			<li>Groupe sanguin : X+-</li>
			<li>Port de lentilles/lunettes</li>
			<li>Médecin traitant : tutu tit</li>
			<li>N° Sécurité Sociale : <span id="zetel">2 69 05 49 588 157 80</span></li>
		</ul><hr/>
	<h2>Médical</h2>
		<ul>
			<li>Allergies connues : la connerie</li>
			<li>Contre-indications : les emmerdes</li>
			<li>Traitement médical : 
		<ul>
			<li>Anticoagulant : oui/non</li>
			<li>Antiagrégant : oui/non</li>
			<li>Autre : …</li>
		</ul></li>
			<li>Diabétique : oui/non</li>
			<li>Épileptique : oui/non</li>
			<li>Maladie cardiaque : oui/non</li>
			<li>Stent : oui/non</li>
			<li>Pacemaker : oui/non</li>
			<li>Enceinte : oui/non</li>
			<li>Diabétique : oui/non</li>
		</ul><hr/>
	<h2>Destin</h2>
		<ul>
			<li>Donneur d'organes : oui/non</li>
			<li>Receveur d'organes : oui/non</li>
			<li>Leg/héritage : …</li>
		</ul>
	<?php
	}
	else
	{
	echo '<p>Mot de passe incorrect</p>';
	}
	?>
	<p>Veuillez entrer le mot de passe pour obtenir l'accès</p>
	<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
	<p>
	<input type="password" name="mot_de_passe" />
	<input type="submit" value="Valider" />
	</p>
	</form>	
</body> 
</html>
