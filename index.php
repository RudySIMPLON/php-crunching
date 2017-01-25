<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
	$dico = explode("\n", $string);

	$nmbremot =count($dico);
	echo $nmbremot; ?></br>

	<?php  
	function lenghtCarct($dico){
		$val=0;
		foreach ($dico as $key => $value ) {
			if(strlen($value) === 15){
				$val++;
			}
		} 
		echo strval($val)."</br>";
	}
	lenghtCarct($dico);


	function trouver($dico){
		$val=0;
		foreach ($dico as $key => $value ) {
			if(strpos($value,"w") == true){
				$val++;
			}

		}
		echo strval($val)."</br>";
	}
	trouver($dico);

// Affiche nombre de mot finissant par "q"


	$num_words_q=0;
foreach ($dico as $word) {
	$last_letter = substr($word, -1);
	if ($last_letter === "q") {
		$num_words_q++;
	}
}
echo  $num_words_q;





?>




</body>
</html>







</body>
</html>