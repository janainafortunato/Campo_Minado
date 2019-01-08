<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

	include "funcoesUteis.php";
	$linha=$_GET["l"];
	$coluna=$_GET["c"];

	echo "você clicou na linha $linha e na coluna $coluna";

	$tabuleiro=pegartabuleiro();

	if(!isset ($tabuleiro)){
		echo "erro-tabuleiro indefinido";
		die ();
	}
	header('Location: minhapágina.php');

   echo " que no array tabuleiro estava representado por um ", $tabuleiro [$linha] [$coluna];
?>

</body>
</html>