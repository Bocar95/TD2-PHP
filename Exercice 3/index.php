<!DOCTYPE html>
<html>
<head>
	<title> Exercice 3</title>
	<meta charset="UTF-8">
</head>
<body>
	<form method="POST" action="">		
		<p style="font-size: 20px:"><strong>Saisiser autant de mots que vous voulez:</strong></p>
		<input type="text" name="gm" style="width: 500px; height: 200px;"> <br/> <br/>
		<input type="submit" name="valider" value="valider"> <br/> <br/>
	</form>

	<?php 
	if (!empty($_POST['gm'])){
		$tabMots = array();
		$tabValid = array();
		$mot = "";
		$k=0;

		$chaine = $_POST['gm'];

		$tabMots = preg_split('#[" "]+#', $chaine);

		for ($i=0; $i<count($tabMots); $i++){
			if (preg_match('/[^a-z^A-Z]/', $tabMots[$i])){


				

			}else{
				if (strlen($tabMots[$i]) <=20){

					$tabValid[]=$tabMots[$i];
				  
				}
			}

		}

		echo "<br/> <br/>";
		
		echo '<p><strong>Les mots valides sont: </strong></p>';
		for ($i=0; $i<count($tabValid); $i++){

			echo $tabValid[$i]. '  ';
		}

		echo "<br/> <br/>";

		echo '<p><strong>les mots contenant la lettre "M" sont: </strong></p>';
		for ($i=0; $i<count($tabValid); $i++){

			if (preg_match('#[m,M]#', $tabValid[$i])){

				echo $tabValid[$i]. '<strong>;</strong>  ';
			}

		}

		
	}

	?>



</body>
</html>