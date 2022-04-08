<?php

$mensagem = "";

// CONDIÇÃO

if ($_POST) {

	// DECLARAÇÃO DE VARIÁVEIS

	$distancia = $_POST['distancia'];
	$autonomia = $_POST['autonomia'];


	$preco_gasolina = 6.75;
	$preco_alcool = 5.30;
	$preco_diesel = 5.82;


	if (is_numeric($distancia) and is_numeric($autonomia)) {
		
		if ($distancia > 0 and $autonomia > 0) {
			
			// CALCULO

			$calculo_gasolina = ($distancia / $autonomia) * $preco_gasolina;
			$calculo_alcool = ($distancia / $autonomia) * $preco_alcool;
			$calculo_diesel = ($distancia / $autonomia) * $preco_diesel;

			$mensagem .= "<strong>Gasto da viagem para cada tipo de combustível:</strong>";
			$mensagem .= "<ul>";
			$mensagem .= "<li><strong>Gasolina: </strong>R$" . number_format($calculo_gasolina, 2, ",", ".") . "</li>";
			$mensagem .= "<li><strong>Álcool: </strong>R$" . number_format($calculo_alcool, 2, ",", ".") . "</li>";
			$mensagem .= "<li><strong>Diesel: </strong>R$" . number_format($calculo_diesel, 2, ",", ".") . "</li>";
			$mensagem .= "</ul>";

		} else {

			$mensagem .= "Nesta aplicação valores iguais ou menor que 0 serão inválidos!";
		}

	} else {

		$mensagem .= "Somente dados numéricos serão aceitos!";
	}

} else {

	$mensagem .= "As informações não foram preenchidas!";
};

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/style/style.css">
    <title>Calculo Viagem</title>
</head>

<body>
	<main>
		<div>
			<h2>Resultado</h2>
			<div>
				<?php

				echo $mensagem;

				?>

				<a class="botao" href="index.php">Voltar</a>

			</div>
		</div>
	</main>
</body>

</html>