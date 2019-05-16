<?php
$a = 0;
$b = 0;
echo "Digite um valor";
$a = readline ();
echo "Digite um valor";
$b = readline ();
if ($a < $b){
	echo "O valor de a é menor";
} else if ($b < $a){
	echo "O valor de b é menor";
} else {
	echo "Os valores são iguais";
}
?>
