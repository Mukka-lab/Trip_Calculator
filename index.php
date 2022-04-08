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
		<div class="painel">
			<h2>Instruções</h2>
			<div class="conteudo-painel">
				<p>Esta aplicação irá receber do usuário os dados solicitadas e assim irá calcular o gasto em R$ da viagem, utilizando como base os combustíveis Gasolina, Álcool e Diesel. Informações sobre procedimentos e tecnologias estão no arquivo README.</p>
				<p>Para o calculo ser realizado, serão necessárias as seguintes informações:</p>
				<ul>
					<li><b>Distância da viagem em KM</b></li>
					<li><b>Quantidade de KM por litro</b></li>
				</ul>
			</div>
		</div>

		<div class="painel">
			<h2>Cálculo do gasto em R$ do consumo</h2>
			<div class="conteudo-painel">
				<form action="calculo.php" method="POST">
					<label for="distancia">Distância em Quilômetros a ser percorrida</label>
					<input type="number" class="campoTexto"  name="distancia" required/>

					<label for="autonomia">Consumo de combustível do veículo (Km/l)</label>
					<input type="number" class="campoTexto" name="autonomia" required/>

					<button class="botao" type="submit">Calcular</button>
				</form>
			</div>
		</div>

	</main>
</body>

</html>