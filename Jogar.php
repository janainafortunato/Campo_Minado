<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<style type="text/css">
		body{
			background-image: url("imagem/fundo.png");
		}
		#game{
			margin-left: 20%;
		}
	</style>
<?php

session_start();

include "funcoesUteis.php";

function CampoMinadolink ($tabuleiro,$i,$j){
	switch ($tabuleiro[$i][$j]){
		case '0':
			echo " <a href='respostacampominado.php?l=$i&c=$j'>";
			echo "<img src='imagem/quadrado.png'>";
			echo "</a>";
			break; 
		
		case '1':
			echo "<img src='imagem/quadrado2.png'>";
			// echo "1";
			break;
		
		default:
			echo "<img src='imagem/sem título.png'>";
			break;
	}
}
$tabuleiro=pegartabuleiro();

//echo "allan";

//var_dump($_SESSION["CLICKS"]);

?>
<html> 
      <body>
      <div id="game">
            <table>
       		    <?php for ($i=0; $i<sizeof($tabuleiro);$i++):?>
      				<tr> 

          				<?php for ($j=0; $j<sizeof($tabuleiro); $j++):?>

          					<td> 
          						<?php CampoMinadolink ($tabuleiro, $i,$j); ?>

          					</td>
          				<?php endfor; ?>

      			</tr>
          		<?php endfor; ?>
          </table>
        </div>
    </body>
 </html>

<div class="botao">
<br><a href="index.html" class="button">Voltar</a><br><br>
</div>
</body>

</html>