<?php
$v = array ();
$i = 0;
for ($i = 1; $i < 15; $i ++) {
$v [$i] = 0;
}
for ($i = 1; $i < 15; $i ++) {
echo ("Digite um valor");
$v [$i] = readline ();
echo ("O valor do vetor na posição");
echo ("é");
echo ($v [$i]);
}
?>
