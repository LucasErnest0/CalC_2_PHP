<html>
	<head>
		<link rel="stylesheet" href="meu.css">
	</head>
	<style>
		body{
				background-color: black;
		}
		div{
				color: rgb(231, 231, 231);			
				border-style:dotted;
				border-color: rgb(231, 231, 231);
				padding: 10px;
				background-color:rgba(41, 41, 41, 0.589) ; 
		}
		a {
			border-color:whitesmoke;
			padding: 3px;

			text-decoration:none;
		}
	</style>
	<body>
		<div class="w3-display-middle">
		<?php
			

			// Definir o peso e a altura
			$peso = $_POST["peso"];
			$altura = $_POST["altura"];
			$campo_sem_n = true;
			
			
			if ($peso == 0 && $altura == 0){
				$campo_sem_n = false;
		
				echo "<h3>Sem Informação</h3>";
			}
			
			if($campo_sem_n == false){
				return false;

			}
				
			// Calcular o IMC
			$imc = ($peso / ($altura * $altura));

			if ($imc < 18.5) {
					echo "Abaixo do Peso"."<br>"; 

				} 
					elseif ($imc >= 18.1 && $imc < 24.9) {
					echo  "Normal"."<br>";
					
				} 
					elseif ($imc >= 25.1 && $imc < 29.9) {
					echo "Sobrepeso"."<br>";

				} 
					elseif ($imc >= 30.1 && $imc < 39.9) {
					echo "Obesidade"."<br>";
				}
					elseif ($imc >= 40.1 && $imc < 49.9) {
					echo "Obesidade Grave"."<br>";
				} 
					elseif ($imc > 50.1) {
					echo "Obesidade Gravíssima"."<br>";
				}	

					echo  "IMC: " .$imc."<br>";	
			?>
		<br><br>
		<a href="form.php">Voltar</a>
		
		</div>
	</body>
</html>