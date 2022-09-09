<?php

	if (isset($_POST['ano'])){
		$ano = filter_input(INPUT_POST, 'ano');

		function verificaAnoBisexto ($ano) {
			// O ano divisível por 400 é sempre bissexto
			if ($ano % 400 == 0){
				echo  "<script>alert('É bissexto!');</script>";
			}
			
			// O ano deve ser divisível por 4 mas não pode ser divisível por 100
			if ($ano % 4 == 0 && $ano % 100 != 0){
				echo  "<script>alert('É bissexto!');</script>";
			}else {
				echo "<script>alert('Não é bissexto!');</script>";
			}			
		  }

		  return verificaAnoBisexto($ano);
	}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>

	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
	
	<div class="container">
		<div class="container-login">
			<div class="wrap-login">
				<form method="post" class="login-form">
					<span class="login-form-title">
						Atividade 1
					</span>

					<div class="second-title margin-top-35 margin-bottom-35">
						<h3>Entre com o ano e vamos verificar se ele é bissexto</h3>
					</div>

					<div class="wrap-input margin-top-35 margin-bottom-35">
						<input class="ano input-form" type="text" name="ano" id="ano" autocomplete="off">
						<span class="focus-input-form" data-placeholder="Ano"></span>
					</div>

					<div class="container-login-form-btn">
						<button class="login-form-btn">
							Enviar Resposta
						</button>
					</div>

					<ul class="login-utils">
						<li class="margin-bottom-8 margin-top-8">
							<span class="text1">
								Voltar para a
							</span>
							<a href="../index.html" class="text2">
								Home
							</a>
						</li>

						<li>
							<span class="text1">
								Proxima
							</span>
							<a href="../atividadesPages/atvDois.php" class="text2">
								Atividade
							</a>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>
</body>
</html>