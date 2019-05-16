<?php
$a = 0;
echo "O valor de a";
$a = readline ();
if ($a <= 10){
	echo "Menor ou igual 10";
} else if ($a < 20){
	echo "Menor que 20 e maior que 10";
} else if ($a < 30){
	echo "Menor que 30 e maior ou igual a 20";
} else if ($a < 40){
	echo "Menor que 40 ou maior ou igual a 30";
} else {
	echo "Maior ou igual a 40";
}
?>
