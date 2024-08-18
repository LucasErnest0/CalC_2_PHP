<html>
	<head>
		<link rel="stylesheet" href="meu.css">
		
		<style>
			body{
				background-color: black;
			}
			input, button{
				margin:5px;
				
			}
			div{
				
				border-style:dotted;
				border-color: rgb(231, 231, 231);
				padding: 10px;
				background-color:rgba(41, 41, 41, 0.589) ; 
			}
		</style>
	</head>
	<body>
		<div class="w3-display-middle">
			<form action="destino.php" method="post">
				<input type="number" step="any" name="altura" value=""placeholder="Altura"> <br><br>
				<!--<input type="number" name="ano" value=""><br><br>!-->
				<input type="number" step="any" name="peso" value="" placeholder="Peso"><br><br>
				<input type="submit" value="enviar">
			</form>
		</div>
	</body>
</html>