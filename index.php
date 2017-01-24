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
     echo strval($val);
	}
		lenghtCarct($dico);

 ?>


	
</body>
</html>