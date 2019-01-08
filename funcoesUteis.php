<?php

	function pegartabuleiro () {
		//var_dump($_SESSION["CLICKS"]);
		if(!isset($_SESSION["CLICKS"])) {

			$tabuleiro=[
				[0,0,0,0,0],
				[0,0,0,0,0],
				[0,0,0,0,0],
				[0,0,0,0,0],
				[0,0,0,0,0]
			];
			
			$_SESSION["CLICKS"]=$tabuleiro;

		}

		return $_SESSION["CLICKS"];
	}

	function pegarBombas() {
		if(!isset($_SESSION["BOMBAS"])) {
			$bombas = [
			["","","*", "", ""],
			["*", "", "", "",""],
			["" , "", "", "","*"],
			["" , "", "","*", ""],
			["" ,"*","" , "", ""]];
			
			$_SESSION["BOMBAS"]=$bombas;
		}


   		return $_SESSION["BOMBAS"];
	}
	
?>
