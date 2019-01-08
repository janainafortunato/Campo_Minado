<?php

	session_start();


	include "funcoesUteis.php";

	$linha=$_GET["l"];
	$coluna=$_GET["c"];

	//echo "você clicou na linha $linha e na coluna $coluna";

	$tabuleiro=pegarbombas();

	if ($tabuleiro[$linha][$coluna]==""){
		$_SESSION["CLICKS"][$linha][$coluna] = 1;

		if (!isset($_SESSION["acertos"])){
			$_SESSION["acertos"] = 0;
		}


		$_SESSION["acertos"]++;

		//var_dump($_SESSION["CLICKS"]);
		if ($_SESSION["acertos"]==20){
			header('Location: Voceganhou.html');

		}else{
			header('Location: Jogar.php');
		}
	
		//header('Location: Jogar.php');
	}else{
		//$_SESSION["acertos"] = 0;
		header('Location: VocePerdeu.html');
	}
   //echo " que no array tabuleiro estava representado por um ", $tabuleiro [$linha] [$coluna];
	

?>
</body>
</html>