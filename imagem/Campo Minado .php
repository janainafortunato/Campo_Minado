<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Campo Minado</title>
	<style> h1{
		color: white;
	}

	table,tr,td{
		border: 9px solid red;
		border-collapse: collapse;

	}
	table {
		width: 900px;
		height: 900px;
	}
	body{
		background-image: url(planodefundo.jpeg); 
		background-repeat: no-repeat; 
		background-size: cover;
	text-align: center;
	}
	.Campo_Minado{
		margin: auto;
		width: 1000px
	}
	</style>
</head>
<body> 
<h1>Campo Minado</h1>

<div class="Campo_Minado">
	


	<table> 
	<?php
	for($i=0; $i<5; $i++):
		echo "<tr>";
		for($a=0; $a<5; $a++):
         echo"<td></td>";
	    endfor;
	    echo"</tr>";
	    endfor;
	?>
		
	</table>


</div>
</body>
</html>