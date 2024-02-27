<?php
$altura = 1.76;
$sexo = 'M';

if($sexo == 'H'){
	echo("O peso ideia é: ".(72.7 * $altura) - 58);
}
else{
	echo("O peso ideal é: ".(62.1 * $altura) - 44.7);
}
?>