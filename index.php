<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<input type="text" name="Envoie">
		<button>Envoyer</button>
		<script type="text/javascript">
			
		</script>

		<?php

			echo "<h1>Excercices 1 à 3</h1>";
			echo "<br/>";
			$nom = "Coynet ";
			$prenom = "Mathieu ";
			$age = 23;
			$km = 125;
			echo $nom . $prenom . $age;
			echo "<br/>";
			echo "km = ".$km;
			/* EXO 1 à 3 ci dessus*/
			echo "<h1>Excercice 4</h1>";
			echo "<br/>";

			$chaine = "Eyooo";
			echo $chaine;
			echo "<br/>";

			$entier = 15;
			echo $entier;
			echo "<br/>";

			$decimaux = 1.368;
			echo $decimaux;
			echo "<br/>";

			$booleen = true;
			echo $booleen;
			echo "<br/>";
			/* Exo 4 ci dessus*/
			echo "<h1>Excercice 5</h1>";
			echo "<br/>";

			$pelo = "";
			echo $pelo;
			echo "<br/>";
			$pelo = 788;
			echo $pelo;
			echo "<br/>";

			/* exo 5 ci dessus*/

			echo "<h1>Excercice 6+7</h1>";
			echo "<br/>";
			echo "Bonjour " . $nom . "comment vas-tu?";
			echo "<br/>";
			echo "Bonjour " . $nom . $prenom . ",tu as " . $age . "ans!";
			echo "<br/>";

			/* exo 6+7 ci dessus */

			echo "<h1>Excercice 8</h1>";
			echo "<br/>";
			$resultat1 = 3 + 4;
			$resultat2 = 5 * 20;
			$resultat3 = 45 / 5;
			echo $resultat1 . "\n" . $resultat2 . "\n" . $resultat3 ;
			
			



		?>

	</body>
</html>